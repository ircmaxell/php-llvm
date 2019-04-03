<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\BasicBlock;
use PHPLLVM\Value;

interface IndirectBranch extends Value {

    public function addDestination(BasicBlock $dest): void;

}