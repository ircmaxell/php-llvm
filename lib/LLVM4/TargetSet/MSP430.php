<?php declare(strict_types=1);
namespace PHPLLVM\LLVM4\TargetSet;

use PHPLLVM\LLVM4\LLVM;
use PHPLLVM\TargetSet;

class MSP430 implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeMSP430TargetInfo();
        $this->llvm->lib->LLVMInitializeMSP430Target();
        $this->llvm->lib->LLVMInitializeMSP430TargetMC();
        $this->llvm->lib->LLVMInitializeMSP430AsmParser();
        $this->llvm->lib->LLVMInitializeMSP430AsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}