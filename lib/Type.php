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

    public static function functionType(Type $returnType, bool $isVarArgs, Type ... $parameters): Type;

    public function arrayType(int $numElements): Type;

    public function pointerType(int $addressSpace): Type;

    public function vectorType(int $elementCount): Type;

    public function getKind(): int;

    public function isSized(): bool;

    public function dump(): void;

    public function toString(): string;

    public function isFunctionVarArg(): bool;

    public function getReturnType(): Type;

    public function countParameters(): int;

    public function getParameters(): array;

    public function getStructName(): string;

    public function setStructBody(bool $packed, Type ... $elements): void;

    public function countStructElements(): int;

    public function getStructElements(): array;

    public function getStructElementAtIndex(int $index): Type;

    public function isPackedStruct(): bool;

    public function isOpaqueStruct(): bool;

    public function getElementType(): Type;

    public function getArrayLength(): int;

    public function getPointerAddressSpace(): int;

    public function getVectorSize(): int;

    public function constNull(): Value;

    public function constAllOnes(): Value;

    public function getUndef(): Value;

}