<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVMAbstract\Value;

class BasicBlock extends Value implements CoreValue\BasicBlock {

    public function asBasicBlock(): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMValueAsBasicBlock($this->value));
    }

}