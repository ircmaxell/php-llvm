<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Type;

use PHPLLVM\Type as CoreType;

use PHPLLVM\LLVMAbstract\Type;

class Array_ extends Type implements CoreType\Array_ {

    public function getElementType(): CoreType {
        return $this->llvm->factory->type($this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getLength(): int {
        return $this->llvm->lib->LLVMGetArrayLength($this->type);
    }

    public function getKind(): int {
        return self::KIND_ARRAY;
    }

}