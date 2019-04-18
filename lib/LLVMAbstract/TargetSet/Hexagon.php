<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class Hexagon implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeHexagonTargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeHexagonTargetInfo();
        $this->llvm->lib->LLVMInitializeHexagonTarget();
        $this->llvm->lib->LLVMInitializeHexagonTargetMC();
        $this->llvm->lib->LLVMInitializeHexagonAsmParser();
        $this->llvm->lib->LLVMInitializeHexagonAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}