<?php declare(strict_types=1);
namespace PHPLLVM\LLVM4\TargetSet;

use PHPLLVM\LLVM4\LLVM;
use PHPLLVM\TargetSet;

class AArch64 implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeAArch64TargetInfo();
        $this->llvm->lib->LLVMInitializeAArch64Target();
        $this->llvm->lib->LLVMInitializeAArch64TargetMC();
        $this->llvm->lib->LLVMInitializeAArch64AsmParser();
        $this->llvm->lib->LLVMInitializeAArch64AsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}