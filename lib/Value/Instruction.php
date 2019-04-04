<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\BasicBlock;
use PHPLLVM\Value;

interface Instruction extends Value {

    const ORDERING_NOT_ATOMIC = 0;
    const ORDERING_UNORDERED = 1;
    const ORDERING_MONOTONIC = 2;
    const ORDERING_ACQUIRE = 4;
    const ORDERING_RELEASE = 5;
    const ORDERING_ACQUIRE_RELEASE = 6;
    const ORDERING_SEQUENTIALLY_CONSISTENT = 7;

    public function getParamParent(): Value;

    public function getParent(): BasicBlock;

    public function getNext(): ?Instruction;

    public function getPrevious(): ?Instruction;

    public function removeFromParent(): void;

    public function eraseFromParent(): void;

    public function getICmp(): int;

    public function getFCmp(): int;

    public function clone(): Instruction;

    public function getVolatile(): bool;

    public function setVolatile(bool $value): void;

    public function getOrdering(): int;

    public function setOrdering(int $ordering): void;

    public function getNumArgOperands(): int;
    
    public function addCase(Value $onValue, BasicBlock $dest): void;

    public function addDestination(BasicBlock $dest): void;

}