<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Type;

use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVMAbstract\Type;
use PHPLLVM\LLVMAbstract\Value;

class Pointer extends Type implements CoreType\Pointer {

    public function getElementType(): CoreType {
        return $this->llvm->factory->type($this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getAddressSpace(): int {
        return $this->llvm->lib->LLVMGetPointerAddressSpace($this->type);
    }

    public function constNull(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMConstPointerNull($this->type));
    }

    public function getKind(): int {
        return self::KIND_POINTER;
    }

}