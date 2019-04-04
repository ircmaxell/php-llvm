<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;
use PHPLLVM\Target as CoreTarget;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\TargetMachine as CoreTargetMachine;
use PHPLLVM\PassManager as CorePassManager;

use llvm4\llvm as lib;
use llvm4\LLVMPassManagerRef;
use llvm4\string_ptr;
use FFI;

class PassManager implements CorePassManager {

    public LLVM $llvm;
    public LLVMPassManagerRef $passManager;

    public function __construct(LLVM $llvm, LLVMPassManagerRef $passManager) {
        $this->llvm = $llvm;
        $this->passManager = $passManager;
    }

    public function __destruct() {
        $this->dispose();
    }

    public function run(CoreModule $module): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMRunPassManager($this->passManager, $module->module));
    }

    public function initializeFunctionPassManager(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMInitializeFunctionPassManager($this->passManager));
    }

    public function runFunctionPassManager(CoreValue $function): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMRunFunctionPassManager($this->passManager, $function->value));
    }

    public function finalizeFunctionPassManager(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMFinalizeFunctionPassManager($this->passManager));
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposePassManager($this->passManager);
    }
}