<?php declare(strict_types=1);

namespace PHPLLVM;

interface Attribute {

    const INDEX_RETURN = 0;
    const INDEX_FUNCTION = -1;

    public function isEnumAttribute(): bool;

    public function isStringAttribute(): bool;

}