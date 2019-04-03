<?php declare(strict_types=1);

namespace PHPLLVM\Type;

use PHPLLVM\Type;

interface Function_ extends Type {

    public function isVarArg(): bool;

    public function getReturnType(): Type;

    public function countParameters(): int;

    public function getParameters(): array;

}