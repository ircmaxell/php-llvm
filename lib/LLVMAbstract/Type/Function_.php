<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Type;

use PHPLLVM\Type as CoreType;

use PHPLLVM\LLVMAbstract\Type;

use llvm\LLVMTypeRef_ptr;

class Function_ extends Type implements CoreType\Function_ {

    public function isVarArg(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsFunctionVarArg($this->type));
    }

    public function getReturnType(): CoreType {
        return $this->llvm->factory->type($this->context, $this->llvm->lib->LLVMGetReturnType($this->type));
    }

    public function countParameters(): int {
        return $this->llvm->lib->LLVMCountParamTypes($this->type);
    }

    public function getParameters(): array {
        $nParams = $this->countParameters();
        $params = $this->llvm->lib->getFFI()->new('LLVMTypeRef[' . $nParams . ']');
        $paramWrapper = new LLVMTypeRef_ptr($params);
        $this->llvm->lib->LLVMGetParamTypes($this->type, $paramWrapper);
        $result = [];
        for ($i = 0; $i < $nParams; $i++) {
            $result[$i] = $this->llvm->factory->type($this->context, $paramWrapper->deref($i));
        }
        return $result;
    }

    public function getKind(): int {
        return self::KIND_FUNCTION;
    }
}