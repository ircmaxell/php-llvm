<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\TargetMachine as CoreTargetMachine;
use PHPLLVM\ExecutionEngine as CoreExecutionEngine;

use llvm\LLVMExecutionEngineRef;

class ExecutionEngine implements CoreExecutionEngine {

    public LLVM $llvm;
    public Context $context;
    public LLVMExecutionEngineRef $engine;

    public function __construct(LLVM $llvm, Context $context, LLVMExecutionEngineRef $engine) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->engine = $engine;
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposeExecutionEngine($this->engine);
    }

    public function runStaticConstructors(): void {
        $this->llvm->lib->LLVMRunStaticConstructors($this->engine);
    }

    public function runStaticDestructors(): void {
        $this->llvm->lib->LLVMRunStaticDestructors($this->engine);
    }

    public function freeMachineCodeForFunction(CoreValue $function): void {
        $this->llvm->lib->LLVMFreeMachineCodeForFunction($this->engine, $function->value);
    }

    public function addModule(CoreModule $module): void {
        $this->llvm->lib->LLVMAddModule($this->engine, $module->module);
    }

    public function getTargetData(): CoreTargetData {
        return $this->llvm->factory->targetData($this->llvm->lib->LLVMGetExecutionEngineTargetData($this->engine));
    }

    public function getTargetMachine(): CoreTargetMachine {
        return $this->llvm->factory->targetMachine($this->llvm->lib->LLVMGetExecutionEngineTargetMachine($this->engine));
    }

    public function getPointerToGlobal(CoreValue $global) {
        return $this->llvm->lib->LLVMGetPointerToGlobal($this->engine, $global->value);
    }

    public function getGlobalValueAddress(string $name): int {
        return $this->llvm->lib->LLVMGetGlobalValueAddress($this->engine, $name);
    }

    public function getFunctionAddress(string $name): int {
        return $this->llvm->lib->LLVMGetFunctionAddress($this->engine, $name);
    }
}