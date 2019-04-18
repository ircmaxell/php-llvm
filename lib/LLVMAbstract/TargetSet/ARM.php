<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class ARM implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeARMTargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeARMTargetInfo();
        $this->llvm->lib->LLVMInitializeARMTarget();
        $this->llvm->lib->LLVMInitializeARMTargetMC();
        $this->llvm->lib->LLVMInitializeARMAsmParser();
        $this->llvm->lib->LLVMInitializeARMAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }
    
}