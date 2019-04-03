<?php declare(strict_types=1);

namespace PHPLLVM\Type;

use PHPLLVM\Type;

interface Pointer extends Element {

    public function getSize(): int;
    
}