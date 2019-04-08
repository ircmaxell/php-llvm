<?php declare(strict_types=1);

namespace PHPLLVM;

interface Intrinsic {

    public function va_start(Value $arglist): void;

    public function va_end(Value $arglist): void;

    public function va_copy(Value $dest, Value $src): void;

    public function memcpy(Value $dest, Value $src, Value $size, Value $isVolatile): void;

    public function memmove(Value $dest, Value $src, Value $size, Value $isVolatile): void;

    public function memset(Value $dest, Value $src, Value $size, Value $isVolatile): void;

    public function bitreverse(Value $value): Value;

    public function bitswap(Value $value): Value;

    public function ctpop(Value $value): Value;

    public function ctlz(Value $value, bool $isZeroUndef): Value;

    public function cttz(Value $value, bool $isZeroUndef): Value;
    
}