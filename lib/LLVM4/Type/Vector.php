<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Type;

use PHPLLVM\Type as CoreType;

use PHPLLVM\LLVM4\Type;

use llvm4\LLVMTypeRef_ptr;

class Vector extends Type implements CoreType\Vector {

    public function getElementType(): CoreType {
        return Type::type($this->llvm, $this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getSize(): int {
        return $this->llvm->lib->LLVMGetVectorSize($this->type);
    }

    public function getKind(): int {
        return self::KIND_VECTOR;
    }
}