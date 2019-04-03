<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;
use PHPLLVM\Target as CoreTarget;
use PHPLLVM\TargetMachine as CoreTargetMachine;

use llvm4\llvm as lib;
use llvm4\LLVMTargetRef;

class Target implements CoreTarget {

    public LLVM $llvm;
    public LLVMTargetRef $target;

    public function __construct(LLVM $llvm, LLVMTargetRef $target) {
        $this->llvm = $llvm;
        $this->target = $target;
    }

    public function createTargetMachine(string $triple, string $cpu, string $features, int $optlevel, int $relocMode, int $codeModel): CoreTargetMachine {
        throw new \LogicException("Todo: remap int parameters to llvm parameters");


        return new TargetMachine($this->llvm, $this->llvm->lib->LLVMCreateTargetMachine($this->target, $triple, $cpu, $features, $optLevel, $relocMode, $coreModel));
    }

    public function getName(): string {
        return $this->llvm->lib->LLVMGetTargetName($this->target);
    }

    public function getDescription(): string {
        return $this->llvm->lib->LLVMGetTargetDescription($this->target);
    }

    public function hasJit(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMTargetHasJIT($this->target));
    }

    public function hasTargetMachine(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMTargetHasTargetMachine($this->target));
    }

    public function hasAsmBackend(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMTargetHasAsmBackend($this->target));
    }
}