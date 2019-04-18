<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVMAbstract\BasicBlock;
use PHPLLVM\LLVMAbstract\Value;

use llvm\LLVMTypeRef_ptr;
use llvm\LLVMBasicBlockRef_ptr;

class Instruction extends Value implements CoreValue\Instruction {

    public function getParamParent(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetParamParent($this->value));
    }

    public function getParent(): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMGetInstructionParent($this->value));
    }

    public function getNext(): ?CoreValue\Instruction {
        $inst = $this->llvm->lib->LLVMGetNextInstruction($this->value);
        if ($inst === null) {
            return $inst;
        }
        return $this->llvm->factory->value($this->context, $inst);
    }

    public function getPrevious(): ?CoreValue\Instruction {
        $inst = $this->llvm->lib->LLVMGetPreviousInstruction($this->value);
        if ($inst === null) {
            return $inst;
        }
        return $this->llvm->factory->value($this->context, $inst);
    }

    public function removeFromParent(): void {
        $this->llvm->lib->LLVMInstructionRemoveFromParent($this->value);
    }

    public function eraseFromParent(): void {
        $this->llvm->lib->LLVMInstructionEraseFromParent($this->value);
    }

    public function getICmp(): int {
        return $this->llvm->lib->LLVMgetICmpPredicate($this->value);
    }

    public function getFCmp(): int {
        return $this->llvm->lib->LLVMgetFCmpPredicate($this->value);
    }

    public function clone(): CoreValue\Instruction {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMInstructionClone($this->value));
    }

    public function getVolatile(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMGetVolatile($this->value));
    }

    public function setVolatile(bool $value): void {
        $this->llvm->lib->LLVMSetVolatile($this->value, $this->llvm->toBool($value));
    }

    public function getOrdering(): int {
        // Todo: Map order
    }

    public function setOrdering(int $ordering): void {
        // Todo: map ordering
    }

    public function getNumArgOperands(): int {
        return $this->llvm->lib->LLVMGetNumArgOperands($this->value);
    }

    public function addCase(CoreValue $onValue, CoreBasicBlock $dest): void {
        $this->llvm->lib->LLVMAddCase($this->value, $onValue->value, $dest->block);
    }

    public function addDestination(CoreBasicBlock $dest): void {
        $this->llvm->lib->LLVMAddDestination($this->value, $dest->block);
    }

}