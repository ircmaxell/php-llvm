<?php declare(strict_types=1);

namespace PHPLLVM\Attribute;
use PHPLLVM\Attribute;

interface Enum extends Attribute {

    public function getKind(): int;

    public function getValue(): int;

}