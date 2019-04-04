<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Type;

use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVM4\Type;
use PHPLLVM\LLVM4\Value;

use llvm4\LLVMTypeRef_ptr;

class Pointer extends Type implements CoreType\Pointer {

    public function getElementType(): CoreType {
        return Type::type($this->llvm, $this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getAddressSpace(): int {
        return $this->llvm->lib->LLVMGetPointerAddressSpace($this->type);
    }

    public function constNull(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMConstPointerNull($this->type));
    }

    public function getKind(): int {
        return self::KIND_POINTER;
    }

}