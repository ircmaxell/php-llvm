<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class WebAssembly implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeWebAssemblyTargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeWebAssemblyTargetInfo();
        $this->llvm->lib->LLVMInitializeWebAssemblyTarget();
        $this->llvm->lib->LLVMInitializeWebAssemblyTargetMC();
        $this->llvm->lib->LLVMInitializeWebAssemblyAsmParser();
        $this->llvm->lib->LLVMInitializeWebAssemblyAsmPrinter();
    }

    public function isNative(): bool {
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}