<?php declare(strict_types=1);

namespace PHPLLVM\Type;

use PHPLLVM\Type;

interface Vector extends Element {

    public function getAddressSpace(): int;
    
}