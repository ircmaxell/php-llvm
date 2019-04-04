<?php declare(strict_types=1);

namespace PHPLLVM\Attribute;
use PHPLLVM\Attribute;

interface String_ extends Attribute {

    public function getKind(): string;

    public function getValue(): string;

}