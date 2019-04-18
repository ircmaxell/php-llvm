<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class MSP430 implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeMSP430TargetInfo');
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