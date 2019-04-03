<?php declare(strict_types=1);

namespace PHPLLVM\Type;

use PHPLLVM\Type;

interface Array_ extends Element {

    public function getLength(): int;

}