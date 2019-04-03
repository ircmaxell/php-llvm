<?php declare(strict_types=1);

namespace PHPLLVM;

interface BasicBlock {

    public function asValue(): Value\BasicBlock;

    public function getName(): string;

    public function getParent(): Value;

    public function getTerminator(): Value;

    public function getNext(): ?BasicBlock;

    public function getPrevious(): ?BasicBlock;

    public function insertBasicBlock(string $name): BasicBlock;

    public function delete(): void;

    public function removeFromParent(): void;

    public function moveBefore(BasicBlock $move): void;

    public function moveAfter(BasicBlock $move): void;

    public function getFirstInstruction(): Value;

    public function getLastInstruction(): Value;

}