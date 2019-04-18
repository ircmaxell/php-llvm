<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class AArch64 implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeAArch64TargetInfo');
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