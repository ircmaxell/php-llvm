<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\BasicBlock;
use PHPLLVM\Value;

interface SwitchBranch extends Value {

    public function addCase(Value $onValue, BasicBlock $dest): void;

}