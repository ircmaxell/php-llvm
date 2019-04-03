<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value;

interface Argument extends Value {

    public function getNext(): ?Value;

    public function getPrevious(): ?Value;

    public function setAlignment(int $alignment): void;
    
}