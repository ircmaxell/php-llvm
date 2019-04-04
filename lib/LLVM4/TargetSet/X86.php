<?php declare(strict_types=1);
namespace PHPLLVM\LLVM4\TargetSet;

use PHPLLVM\LLVM4\LLVM;
use PHPLLVM\TargetSet;

class X86 implements TargetSet {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
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