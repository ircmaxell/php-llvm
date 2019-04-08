<?php declare(strict_types=1);

namespace PHPLLVM;

interface Type {
    const KIND_VOID     = 0;
    const KIND_HALF     = 1;
    const KIND_FLOAT    = 2;
    const KIND_DOUBLE   = 3;
    const KIND_FP80     = 4;
    const KIND_FP128    = 5;
    const KIND_PPCFP128 = 6;
    const KIND_LABEL    = 7;
    const KIND_INTEGER  = 8;
    const KIND_FUNCTION = 9;
    const KIND_STRUCT   = 10;
    const KIND_ARRAY    = 11;
    const KIND_POINTER  = 12;
    const KIND_VECTOR   = 13;
    const KIND_METADATA = 14;
    const KIND_MMX      = 15;
    const KIND_TOKEN    = 16;

    public function arrayType(int $numElements): Type\Array_;

    public function pointerType(int $addressSpace): Type\Pointer;

    public function vectorType(int $elementCount): Type\Vector;

    public function getKind(): int;

    public function isSized(): bool;

    public function dump(): void;

    public function toString(): string;

    public function constNull(): Value;

    public function constAllOnes(): Value;

    public function getUndef(): Value;

    public function constInt(int $n, bool $signExtend): Value;

    public function constReal(float $n): Value;

    public function sizeOf(): Value;

    public function alignOf(): Value;

    public function getWidth(): int;

}