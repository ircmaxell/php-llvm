<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\LLVMAbstract\Value;

class Argument extends Value implements CoreValue\Argument {

    public function getNext(): ?CoreValue {
        $value = $this->llvm->lib->LLVMGetNextParam($this->value);
        if ($value === null) {
            return null;
        }
        return $this->llvm->factory->value($this->context, $value);
    }

    public function getPrevious(): ?CoreValue {
        $value = $this->llvm->lib->LLVMGetPreviousParam($this->value);
        if ($value === null) {
            return null;
        }
        return $this->llvm->factory->value($this->context, $value);
    }

    public function setAlignment(int $alignment): void {
        $this->llvm->lib->LLVMSetParamAlignment($this->value, $alignment);
    }
}