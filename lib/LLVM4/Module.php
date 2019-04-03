<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMModuleRef;

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

        // $error leaks here, since there's no way (yet) for us to call Dispose on it...
        $errorMessage = $this->llvm->fromStringPointer($error);
        return $this->llvm->fromBool($bool);
    }

    public function printToString(): string {
        return $this->llvm->lib->LLVMPrintModuleToString($this->module);
    }

    public function setInlineAsm(string $asm): void {
        $this->llvm->lib->LLVMSetModuleInlineAsm($this->module, $asm);
    }

    public function getTypeByName(string $name): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMGetTypeByName($this->module, $name));
    }

    public function addFunction(string $name, CoreType $type): CoreValue {
        return new Value($this->lib, $this->context, $this->llvm->lib->LLVMAddFunction($this->module, $name, $type));
    }

    public function getNamedFunction(string $name): CoreValue {
        return new Value($this->lib, $this->context, $this->llvm->lib->LLVMGetNamedFunction($this->module, $name));
    }

    public function getFirstFunction(): CoreValue {
        return new Value($this->lib, $this->context, $this->llvm->lib->LLVMGetFirstFunction($this->module));
    }

    public function getLastFunction(): CoreValue {
        return new Value($this->lib, $this->context, $this->llvm->lib->LLVMGetLastFunction($this->module));
    }

    
}