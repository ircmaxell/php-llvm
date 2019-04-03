<?php declare(strict_types=1);

namespace PHPLLVM\Type;

use PHPLLVM\Type;

interface Struct extends Type {

    public function getName(): string;

    public function setBody(bool $packed, Type ... $elements): void;

    public function countElements(): int;

    public function getElements(): array;

    public function getElementAtIndex(int $index): Type;

    public function isPacked(): bool;

    public function isOpaque(): bool;

}