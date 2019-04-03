<?php declare(strict_types=1);

namespace PHPLLVM\Type;

use PHPLLVM\Type;

interface Element extends Type {

    public function getElementType(): Type;

}