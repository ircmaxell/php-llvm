<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\MemoryBuffer as CoreMemoryBuffer;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\PassManager as CorePassManager;
use PHPLLVM\ExecutionEngine as CoreExecutionEngine;
use PHPLLVM\TargetData as CoreTargetData;

use llvm4\llvm as lib;
use llvm4\LLVMModuleRef;
use llvm4\LLVMExecutionEngineRef;
use llvm4\string_ptr;
use FFI;

class Module implements CoreModule {

    public LLVM $llvm;
    public Context $context;
    public LLVMModuleRef $module;
    public string $name;

    public function __construct(LLVM $llvm, Context $context, LLVMModuleRef $module, string $name) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->module = $module;
        $this->name = $name;
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposeModule($this->module);
    }

    public function clone(): CoreModule {
        return new Module($this->llvm, $this->context, $this->llvm->lib->LLVMCloneModule($this->module));
    }

    public function getIdentifier(): string {
        return $this->name;
    }

    public function setIdentifier(string $identifier): void {
        $this->name = $identifier;
        $this->llvm->lib->LLVMSetModuleIdentifier($this->module, $identifier, strlen($identifier));
    }

    public function getDataLayout(): string {
        return $this->llvm->lib->LLVMGetDataLayoutStr($this->module);
    }

    public function setDataLayout(string $layout): void {
        $this->llvm->lib->LLVMSetDataLayout($this->module, $layout);
    }

    public function getTarget(): string {
        return $this->llvm->lib->LLVMGetTarget($this->module);
    }

    public function setTarget(string $target): void {
        $this->llvm->lib->LLVMSetTarget($this->module, $target);
    }

    public function dump(): void {
        $this->llvm->lib->LLVMDumpModule($this->module);
    }

    public function printToFile(string $filename, string &$errorMessage): bool {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $bool = $this->llvm->lib->LLVMPrintModuleToFile($this->module, $filename, $error);

        $errorMessage = $error->deref(0)->toString();
        $this->llvm->disposeMessage($error->deref(0));
        return $this->llvm->fromBool($bool);
    }

    public function printToString(): string {
        return $this->llvm->lib->LLVMPrintModuleToString($this->module)->toString();
    }

    public function setInlineAsm(string $asm): void {
        $this->llvm->lib->LLVMSetModuleInlineAsm($this->module, $asm);
    }

    public function getTypeByName(string $name): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMGetTypeByName($this->module, $name));
    }

    public function addFunction(string $name, CoreType\Function_ $func): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMAddFunction($this->module, $name, $func->type));
    }

    public function getNamedFunction(string $name): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetNamedFunction($this->module, $name));
    }

    public function getFirstFunction(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetFirstFunction($this->module));
    }

    public function getLastFunction(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetLastFunction($this->module));
    }

    public function createFunctionPassManager(): CorePassManager {
        return new PassManager($this->llvm, $this->lib->LLVMCreatePassManagerForModule($this->module));
    }

    public function getModuleDataLayout(): CoreTargetData {
        return new TargetData($this->llvm, $this->llvm->lib->LLVMGetModuleDataLayout($this->module));
    }

    public function setModuleDataLayout(CoreTargetData $targetData) {
        $this->llvm->lib->LLVMSetModuleDataLayout($this->module, $targetData->targetData);
    }

    public function createExecutionEngine(): CoreExecutionEngine {
        $engine = new LLVMExecutionEngineRef($this->llvm->lib->getFFI()->new('LLVMExecutionEngineRef'));
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $result = $this->llvm->fromBool($this->llvm->lib->LLVMCreateExecutionEngineForModule($engine->addr(), $this->module, $error));
        if (!$result) {
            $message = $error->deref(0)->toString();
            $this->llvm->disposeMessage($error->deref(0));
            throw new \RuntimeException("Could not create exeuction engine: $message");
        }
        return new ExecutionEngine($this->llvm, $this->context, $engine);
    }

    public function createInterpreter(): CoreExecutionEngine {
        $engine = new LLVMExecutionEngineRef($this->llvm->lib->getFFI()->new('LLVMExecutionEngineRef'));
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $result = $this->llvm->fromBool($this->llvm->lib->LLVMCreateInterpreterForModule($engine->addr(), $this->module, $error));
        if (!$result) {
            $message = $error->deref(0)->toString();
            $this->llvm->disposeMessage($error->deref(0));
            throw new \RuntimeException("Could not create interpreter: $message");
        }
        return new ExecutionEngine($this->llvm, $this->context, $engine);
    }

    public function createJITCompiler(int $optLevel): CoreExecutionEngine {
        $engine = new LLVMExecutionEngineRef($this->llvm->lib->getFFI()->new('LLVMExecutionEngineRef'));
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $result = $this->llvm->fromBool($this->llvm->lib->LLVMCreateJITCompilerForModule($engine->addr(), $this->module, $optLevel, $error));
        if (!$result) {
            $message = $error->deref(0)->toString();
            $this->llvm->disposeMessage($error->deref(0));
            throw new \RuntimeException("Could not create jit compiler: $message");
        }
        return new ExecutionEngine($this->llvm, $this->context, $engine);
    }

    public function verify(int $verifyAction, &$outMessage): bool {
        switch ($verifyAction) {
            case self::VERIFY_ACTION_ABORT :
                $action = lib::LLVMAbortProcessAction;
                break;
            case self::VERIFY_ACTION_PRINT :
                $action = lib::LLVMPrintMessageAction;
                break;
            case self::VERIFY_ACTION_RETURN:
            case self::VERIFY_ACTION_THROW:
                $action = lib::LLVMReturnStatusAction;
                break;
            default:
                throw new \RuntimeException("Unknown verification action supplied: $verifyAction");
        }
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $result = $this->llvm->fromBool($this->llvm->lib->LLVMVerifyModule($this->module, $action, $error));
        $outMessage = $error->deref(0)->toString();
        $this->llvm->disposeMessage($error->deref(0));
        if (!$result && $verifyAction === self::VERIFY_ACTION_THROW) {
            throw new \RuntimeException("Module verification failed due to $outMessage");
        }
        return $result;
    }

    public function getNamedMetadataNumOperands(string $name): int {
        return $this->llvm->lib->LLVMGetNamedMetadataNumOperands($this->module, $name);
    }

    public function getNamedMetadataOperands(string $name): array {
        // Todo determine how to count...
    }

    public function addNamedMetadataOperand(string $name, CoreValue $ref): void {
        $this->llvm->lib->LLVMAddNamedMetadataOperand($this->module, $name, $rev->value);
    }

    public function addAlias(CoreType $type, CoreValue $aliasee, string $name): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMAddAlias($this->module, $type->type, $aliasee->value, $name));
    }

    public function writeBitcodeToFile(string $path): int {
        return $this->llvm->lib->LLVMWriteBitcodeToFile($this->module, $path);
    }

    public function writeBitcodeToMemoryBuffer(): CoreMemoryBuffer {
        return new MemoryBuffer($this->llvm, $this->llvm->lib->LLVMWriteBitcodeToMemoryBuffer($this->module));
    }

    public function link(CoreModule $other): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMLinkModules2($this->module, $other->module));
    }

    public function addGlobal(CoreType $type, string $name): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMAddGlobal($this->module, $type->type, $name));
    }

    public function addGlobalInAddressSpace(CoreType $type, string $name, int $addressSpace): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMAddGlobalInAddressSpace($this->module, $type->type, $name, $addressSpace));
    }

    public function getNamedGlobal(string $name): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetNamedGlobal($this->module, $name));
    }

    public function getFirstGlobal(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetFirstGlobal($this->module));
    }

    public function getLastGlobal(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetLastGlobal($this->module));
    }
    
}