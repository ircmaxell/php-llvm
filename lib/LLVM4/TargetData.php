<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;
use PHPLLVM\Target as CoreTarget;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\TargetMachine as CoreTargetMachine;

use llvm4\llvm as lib;
use llvm4\LLVMTargetDataRef;

class TargetData implements CoreTargetData {

    public LLVM $llvm;
    public LLVMTargetDataRef $targetData;

    public function __construct(LLVM $llvm, LLVMTargetDataRef $targetData) {
        $this->llvm = $llvm;
        $this->targetData = $targetData;
    }

    public function __destruct() {
        $this->dispose();
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposeTargetData($this->targetData);
    }

    public function toString(): string {
        return $this->llvm->lib->LLVMCopyStringRepOfTargetData($this->targetData)->toString();
    }

    public function byteOrder(): int {
        $order = $this->llvm->lib->LLVMByteOrder($this->targetData);
        switch ($order) {
            case lib::LLVMBigEndian:
                return self::BYTE_ORDER_BIG_ENDIAN;
            case lib::LLVMLittleEndian:
                return self::BYTE_ORDER_LITTLE_ENDIAN;
        }
        throw new \LogicException("Unknown byte order: $order");
    }

    public function pointerSize(): int {
        return $this->llvm->lib->LLVMPointerSize($this->targetData);
    }

    public function pointerSizeForAddressSpace(int $addressSpace): int {
        return $this->llvm->lib->LLVMPointerSizeForAS($this->targetData, $addressSpace);
    }

    public function intPointerType(): CoreType {
        return Type::type($this->llvm->lib->LLVMIntPtrType($this->targetData));
    }

    public function intPointerTypeForAddressSpace(int $addressSpace): CoreType {
        return Type::type($this->llvm->lib->LLVMIntPtrTypeForAS($this->targetData, $addressSpace));
    }

    public function sizeOfTypeInBits(CoreType $type): int {
        return $this->llvm->lib->LLVMSizeOfTypeInBits($this->targetData, $type->type);
    }

    public function storeSizeOfType(CoreType $type): int {
        return $this->llvm->lib->LLVMStoreSizeOfType($this->targetData, $type->type);
    }

    public function ABISizeOfType(CoreType $type): int {
        return $this->llvm->lib->LLVMABISizeOfType($this->targetData, $type->type);
    }

    public function ABIAlignmentOfType(CoreType $type): int {
        return $this->llvm->lib->ABIAlignmentOfType($this->targetData, $type->type);
    }

    public function callFrameAlignmentOfType(CoreType $type): int {
        return $this->llvm->lib->LLVMCallFrameAlignmentOftype($this->targetData, $type->type);
    }

    public function preferredAlignmentOfType(CoreType $type): int {
        return $this->llvm->lib->LLVMPreferredAlignmentOfType($this->targetData, $type->type);
    }

    public function preferredAlignmnetOfGlobal(CoreValue $global): int {
        return $this->llvm->lib->LLVMPreferredAlignmentOfGlobal($this->targetData, $global->value);
    }

    public function elementAtOffset(CoreType $struct, int $offset): int {
        return $this->llvm->lib->LLVMElementAtOffset($this->targetData, $struct->type, $offset);
    }

    public function offsetOfElement(CoreType $struct, int $element): int {
        return $this->llvm->lib->LLVMOffsetOfElement($this->targetData, $struct->type, $element);
    }
    
}