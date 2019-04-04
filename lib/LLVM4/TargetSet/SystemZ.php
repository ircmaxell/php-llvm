<?php declare(strict_types=1);
namespace PHPLLVM\LLVM4\TargetSet;

use PHPLLVM\LLVM4\LLVM;
use PHPLLVM\TargetSet;

class SystemZ implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeSystemZTargetInfo();
        $this->llvm->lib->LLVMInitializeSystemZTarget();
        $this->llvm->lib->LLVMInitializeSystemZTargetMC();
        $this->llvm->lib->LLVMInitializeSystemZAsmParser();
        $this->llvm->lib->LLVMInitializeSystemZAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}