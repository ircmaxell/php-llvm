<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value;

interface BasicBlock extends Value {

    public function asBasicBlock(): CoreBasicBlock;
}