<?php declare(strict_types=1);

namespace PHPLLVM;

interface TargetData {

    const BYTE_ORDER_BIG_ENDIAN = 1;
    const BYTE_ORDER_LITTLE_ENDIAN = 2;

    public function dispose(): void;

    public function toString(): string;

    public function byteOrder(): int;

    public function pointerSize(): int;

    public function pointerSizeForAddressSpace(int $addressSpace): int;

    public function intPointerType(): Type;

    public function intPointerTypeForAddressSpace(int $addressSpace): Type;

    public function sizeOfTypeInBits(Type $type): int;

    public function storeSizeOfType(Type $type): int;

    public function ABISizeOfType(Type $type): int;

    public function ABIAlignmentOfType(Type $type): int;

    public function callFrameAlignmentOfType(Type $type): int;

    public function preferredAlignmentOfType(Type $type): int;

    public function preferredAlignmnetOfGlobal(Value $global): int;

    public function elementAtOffset(Type $struct, int $offset): int;

    public function offsetOfElement(Type $struct, int $element): int;
    
}
