<?php declare(strict_types=1);
namespace PHPLLVM\LLVMAbstract\TargetSet;

use PHPLLVM\LLVMAbstract\LLVM;
use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\TargetSet;

class X86 implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public static function isSupported(CoreLLVM $llvm): bool {
        return method_exists($llvm->lib, 'LLVMInitializeX86TargetInfo');
    }

    public function initialize(): void {
        $this->llvm->lib->LLVMInitializeX86TargetInfo();
        $this->llvm->lib->LLVMInitializeX86Target();
        $this->llvm->lib->LLVMInitializeX86TargetMC();
        $this->llvm->lib->LLVMInitializeX86AsmParser();
        $this->llvm->lib->LLVMInitializeX86AsmPrinter();
    }

    public function isNative(): bool {
        $machine = posix_uname()['machine'];
        switch (strtolower($machine)) {
            case 'i386':
            case 'i486':
            case 'i586':
            case 'i686':
            case 'x86_64':
                // Todo: there should likely be more machines possible
                return true;
        }
        return false;
    }

    public function getName(): string {
        return str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }

}