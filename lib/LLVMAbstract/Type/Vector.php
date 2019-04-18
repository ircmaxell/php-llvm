<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Type;

use PHPLLVM\Type as CoreType;

use PHPLLVM\LLVMAbstract\Type;

class Vector extends Type implements CoreType\Vector {

    public function getElementType(): CoreType {
        return $this->llvm->factory->type($this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getSize(): int {
        return $this->llvm->lib->LLVMGetVectorSize($this->type);
    }

    public function getKind(): int {
        return self::KIND_VECTOR;
    }
}