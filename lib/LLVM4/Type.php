<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Type\Array_ as CoreArrayType;
use PHPLLVM\Type\Pointer as CorePointerType;
use PHPLLVM\Type\Struct as CoreStructType;
use PHPLLVM\Type\Vector as CoreVectorType;
use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMTypeRef;
use llvm4\LLVMTypeRef_ptr;
use FFI;

class Type implements CoreType {

    public LLVM $llvm;
    public Context $context;
    public LLVMTypeRef $type;

    private function __construct(LLVM $llvm, Context $context, LLVMTypeRef $type) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->type = $type;
    }

    public static function type(LLVM $llvm, Context $context, LLVMTypeRef $type): CoreType {
        $kind = $llvm->lib->LLVMGetTypeKind($type);
        switch ($kind) {
            case lib::LLVMFunctionTypeKind:
                return new Type\Function_($llvm, $context, $type);
            case lib::LLVMStructTypeKind:
                return new Type\Struct($llvm, $context, $type);
            case lib::LLVMArrayTypeKind:
                return new Type\Array_($llvm, $context, $type);
            case lib::LLVMPointerTypeKind:
                return new Type\Pointer($llvm, $context, $type);
            case lib::LLVMVectorTypeKind:
                return new Type\Vector($llvm, $context, $type);
            default:
                return new Type($llvm, $context, $type);
        }
    }

    public function arrayType(int $numElements): CoreArrayType {
        return new Type\Array_($this->llvm, $this->context, $this->llvm->lib->LLVMArrayType($this->type, $numElements));
    }

    public function pointerType(int $addressSpace): CorePointerType {
        return new Type\Pointer($this->llvm, $this->context, $this->llvm->lib->LLVMPointerType($this->type, $addressSpace));
    }

    public function vectorType(int $elementCount): CoreVectorType {
        return new Type\Vector($this->llvm, $this->context, $this->llvm->lib->LLVMVectorType($this->type, $elementCount));
    }

    public function getKind(): int {
        $kind = $this->llvm->lib->LLVMGetTypeKind($this->type);
        switch ($kind) {
            case lib::LLVMVoidTypeKind:
                return self::KIND_VOID;
            case lib::LLVMHalfTypeKind:
                return self::KIND_HALF;
            case lib::LLVMFloatTypeKind:
                return self::KIND_FLOAT;
            case lib::LLVMDoubleTypeKind:
                return self::KIND_DOUBLE;
            case lib::LLVMX86_FP80TypeKind:
                return self::KIND_FP80;
            case lib::LLVMFP128TypeKind:
                return self::KIND_FP128;
            case lib::LLVMPPC_FP128TypeKind:
                return self::KIND_PPCFP128;
            case lib::LLVMLabelTypeKind:
                return self::KIND_LABEL;
            case lib::LLVMIntegerTypeKind:
                return self::KIND_INTEGER;
            case lib::LLVMFunctionTypeKind:
                return self::KIND_FUNCTION;
            case lib::LLVMStructTypeKind:
                return self::KIND_STRUCT;
            case lib::LLVMArrayTypeKind:
                return self::KIND_ARRAY;
            case lib::LLVMPointerTypeKind:
                return self::KIND_POINTER;
            case lib::LLVMVectorTypeKind:
                return self::KIND_VECTOR;
            case lib::LLVMMetadataTypeKind:
                return self::KIND_METADATA;
            case lib::LLVMX86_MMXTypeKind:
                return self::KIND_MMX;
            case lib::LLVMTokenTypeKin:
                return self::KIND_TOKEN;
        }
        throw new \LogicException("Unknown kind returned from LLVM: " . ($kind->getData() + 0));
    }

    public function isSized(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMTypeIsSized($this->type));
    }

    public function dump(): void {
        $this->llvm->lib->LLVMDumpType($this->type);
    }

    public function toString(): string {
        return $this->llvm->lib->LLVMPrintTypeToString($this->type)->toString();
    }

    
    public function constNull(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMConstNull($this->type));
    }

    public function constAllOnes(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMConstAllOnes($this->type));
    }

    public function getUndef(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetUndef($this->type));
    }

    public function constInt(int $n, bool $signExtend): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMConstInt($this->type, $n, $this->llvm->toBool($signExtend)));
    }

    public function constReal(float $n): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMConstReal($this->type, $n));
    }

    public function sizeOf(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMSizeOf($this->type));
    }

    public function alignOf(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMAlignOf($this->type));
    }

}