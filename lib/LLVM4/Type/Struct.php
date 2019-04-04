<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Type;

use PHPLLVM\Type as CoreType;

use PHPLLVM\LLVM4\Type;

use llvm4\LLVMTypeRef_ptr;

class Struct extends Type implements CoreType\Struct {

    public function getName(): string {
        return $this->llvm->lib->LLVMGetStructName($this->type);
    }

    public function setBody(bool $packed, CoreType ... $elements): void {
        $elementWrapper = $this->llvm->lib->makeArray(
            LLVMTypeRef_ptr::class,
            array_map(
                function(Type $type) {
                    return $type->type;
                }, 
                $elements
            )
        );
        $this->llvm->lib->LLVMStructSetBody(
            $this->type,
            $elementWrapper,
            count($elements),
            $this->llvm->toBool($packed)
        );
    }

    public function countElements(): int {
        return $this->llvm->lib->LLVMCountStructElementTypes($this->type);
    }

    public function getElements(): array {
        $nElements = $this->countStructElements();
        $elements = $this->llvm->lib->getFFI()->new('LLVMTypeRef[' . $nElements . ']');
        $elementWrapper = new LLVMTypeRef_ptr($elements);
        $this->llvm->lib->LLVMGetStructElementTypes($this->type, $elementWrapper);
        $result = [];
        for ($i = 0; $i < $nElements; $i++) {
            $result[$i] = Type::type($this->llvm, $this->context, $elementWrapper->deref($i));
        }
        return $result;
    }

    public function getElementAtIndex(int $index): CoreType {
        return Type::type($this->llvm, $this->context, $this->llvm->lib->LLVMStructGetTypeAtIndex($this->type, $index));
    }

    public function isPacked(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsPackedStruct($this->type));
    }

    public function isOpaque(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsOpaqueStruct($this->type));
    }

    public function getKind(): int {
        return self::KIND_STRUCT;
    }

}