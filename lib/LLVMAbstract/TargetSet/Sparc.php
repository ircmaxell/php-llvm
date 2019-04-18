<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class Sparc implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeSparcTargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeSparcTargetInfo();
        $this->llvm->lib->LLVMInitializeSparcTarget();
        $this->llvm->lib->LLVMInitializeSparcTargetMC();
        $this->llvm->lib->LLVMInitializeSparcAsmParser();
        $this->llvm->lib->LLVMInitializeSparcAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}