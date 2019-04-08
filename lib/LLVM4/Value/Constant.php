<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVM4\BasicBlock;
use PHPLLVM\LLVM4\Value;

use llvm4\LLVMTypeRef_ptr;
use llvm4\LLVMBasicBlockRef_ptr;

class Constant extends Value implements CoreValue\Constant {

}