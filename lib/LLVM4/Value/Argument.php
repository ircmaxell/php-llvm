<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVM4\BasicBlock;
use PHPLLVM\LLVM4\Value;

use llvm4\LLVMTypeRef_ptr;
use llvm4\LLVMBasicBlockRef_ptr;

class Argument extends Value implements CoreValue\Argument {

    public function getNext(): ?CoreValue {
        $value = $this->llvm->lib->LLVMGetNextParam($this->value);
        if ($value === null) {
            return null;
        }
        return Value::value($value);
    }

    public function getPrevious(): ?CoreValue {
        $value = $this->llvm->lib->LLVMGetPreviousParam($this->value);
        if ($value === null) {
            return null;
        }
        return Value::value($value);
    }

    public function setAlignment(int $alignment): void {
        $this->llvm->lib->LLVMSetParamAlignment($this->value, $alignment);
    }
}