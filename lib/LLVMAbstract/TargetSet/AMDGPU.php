<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class AMDGPU implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }
    
    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeAMDGPUTargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeAMDGPUTargetInfo();
        $this->llvm->lib->LLVMInitializeAMDGPUTarget();
        $this->llvm->lib->LLVMInitializeAMDGPUTargetMC();
        $this->llvm->lib->LLVMInitializeAMDGPUAsmParser();
        $this->llvm->lib->LLVMInitializeAMDGPUAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}