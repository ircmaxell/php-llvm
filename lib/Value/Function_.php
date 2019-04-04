<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\Attribute;
use PHPLLVM\BasicBlock;
use PHPLLVM\Value;

interface Function_ extends Value {

    public function getNext(): ?Function_;

    public function getPrevious(): ?Function_;

    public function delete(): void;

    public function hasPersonalityFunction(): bool;

    public function getPersonalityFunction(): Function_;

    public function getIntrinsicsId(): int;

    public function getCallConvention(): int;

    public function setCallConvention(int $convention): void;

    public function getGc(): string;

    public function setGc(string $value): void;

    public function countParams(): int;

    public function getParams(): array;

    public function getParam(int $index): Value;

    public function getFirstParam(): Value;

    public function getLastParam(): Value;

    public function countBasicBlocks(): int;

    public function getBasicBlocks(): array;

    public function getFirstBasicBlock(): BasicBlock;

    public function getLastBasicBlock(): BasicBlock;

    public function getEntryBasicBlock(): BasicBlock;

    public function appendBasicBlock(string $name): BasicBlock;

    public function viewCFG(): void;

    public function viewCFGOnly(): void;

    public function blockAddress(BasicBlock $block): Value;

    public function addAttributeAtIndex(int $index, Attribute $attribute): void;

    public function getAttributeCountAtIndex(int $index): int;

    public function getAttributesAtIndex(int $index): array;

    public function getEnumAttributeAtIndex(int $index, int $kind): Attribute;

    public function getStringAttributeAtIndex(int $index, string $kind): Attribute;

    public function removeEnumAttributeAtIndex(int $index, int $kind): void;

    public function removeStringAttributeAtIndex(int $index, string $kind): void;

    public function addTargetDependentAttribute(string $a, string $v): void;

}