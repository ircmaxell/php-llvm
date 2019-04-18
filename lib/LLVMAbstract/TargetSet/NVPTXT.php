<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class NVPTXT implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeNVPTXTTargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeNVPTXTTargetInfo();
        $this->llvm->lib->LLVMInitializeNVPTXTTarget();
        $this->llvm->lib->LLVMInitializeNVPTXTTargetMC();
        $this->llvm->lib->LLVMInitializeNVPTXTAsmParser();
        $this->llvm->lib->LLVMInitializeNVPTXTAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}