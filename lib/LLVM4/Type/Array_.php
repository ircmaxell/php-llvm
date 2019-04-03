<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Type;

use PHPLLVM\Type as CoreType;

use PHPLLVM\LLVM4\Type;

use llvm4\LLVMTypeRef_ptr;

class Array_ extends Type implements CoreType\Array_ {

    public function getElementType(): CoreType {
        return Type::type($this->llvm, $this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getArrayLength(): int {
        return $this->llvm->lib->LLVMGetArrayLength($this->type);
    }

    public function getKind(): int {
        return self::KIND_ARRAY;
    }

}