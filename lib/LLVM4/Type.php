<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMTypeRef;
use llvm4\LLVMTypeRef_ptr;
use FFI;

class Type implements CoreType {

    public LLVM $llvm;
    public Context $context;
    public LLVMTypeRef $type;

    public function __construct(LLVM $llvm, Context $context, LLVMTypeRef $type) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->type = $type;
    }

    public static function functionType(CoreType $returnType, bool $isVarArgs, CoreType ... $parameters): CoreType {
        $llvm = $returnType->llvm;
        $context = $returnType->context;
        $paramWrapper = $llvm->lib->makeArray(
            LLVMTypeRef_ptr::class,
            array_map(
                function(Type $type) use ($llvm, $context) {
                    if ($type->llvm !== $llvm || $type->context !== $context) {
                        throw new \LogicException("Parameter not created from this instance of context");
                    }
                    return $type->type;
                }, 
                $parameters
            )
        );
        return new Type(
            $llvm, 
            $context, 
            $llvm->lib->LLVMFunctionType(
                $returnType->type,
                $paramWrapper,
                count($parameters),
                $llvm->toBool($isVarArgs)
            )
        );
    }

    public function arrayType(int $numElements): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMArrayType($this->type, $numElements));
    }

    public function pointerType(int $addressSpace): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMPointerType($this->type, $addressSpace));
    }

    public function vectorType(int $elementCount): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMVectorType($this->type, $elementCount));
    }

    public function getKind(): int {
        $kind = $this->llvm->lib->LLVMGetTypeKind($this->type);
        switch ($kind->getData() + 0) {
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
        return $this->llvm->lib->LLVMPrintTypeToString($this->type);
    }

    public function isFunctionVarArg(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsFunctionVarArg($this->type));
    }

    public function getReturnType(): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMGetReturnType($this->type));
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
            $result[$i] = new Type($this->llvm, $this->context, $paramWrapper->deref($i));
        }
        return $result;
    }

    public function getStructName(): string {
        return $this->llvm->lib->LLVMGetStructName($this->type);
    }

    public function setStructBody(bool $packed, CoreType ... $elements): void {
        $elementWrapper = $this->llvm->lib->makeArray(
            LLVMTypeRef_ptr::class,
            array_map(
                function(Type $type) {
                    return $type->type;
                }, 
                $elements
            )
        );
        $this->llvm->lib->LLVMStructTypeInContext(
            $this->type,
            $elementWrapper,
            count($elements),
            $this->llvm->toBool($packed)
        );
    }

    public function countStructElements(): int {
        return $this->llvm->lib->LLVMCountStructElementTypes($this->type);
    }

    public function getStructElements(): array {
        $nElements = $this->countStructElements();
        $elements = $this->llvm->lib->getFFI()->new('LLVMTypeRef[' . $nElements . ']');
        $elementWrapper = new LLVMTypeRef_ptr($elements);
        $this->llvm->lib->LLVMGetStructElementTypes($this->type, $elementWrapper);
        $result = [];
        for ($i = 0; $i < $nParams; $i++) {
            $result[$i] = new Type($this->llvm, $this->context, $elementWrapper->deref($i));
        }
        return $result;
    }

    public function getStructElementAtIndex(int $index): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMStructGetTypeAtIndex($this->type, $index));
    }

    public function isPackedStruct(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsPackedStruct($this->type));
    }

    public function isOpaqueStruct(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsOpaqueStruct($this->type));
    }

    public function getElementType(): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMGetElementType($this->type));
    }

    public function getArrayLength(): int {
        return $this->llvm->lib->LLVMGetArrayLength($this->type);
    }

    public function getPointerAddressSpace(): int {
        return $this->llvm->lib->LLVMGetPointerAddressSpace($this->type);
    }

    public function getVectorSize(): int {
        return $this->llvm->lib->LLVMGetVectorSize($this->type);
    }

    public function constNull(): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMConstNull($this->type));
    }

    public function constAllOnes(): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMConstAllOnes($this->type));
    }

    public function getUndef(): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMGetUndef($this->type));
    }

    public function constPointerNull(): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMConstPointerNull($this->type));
    }

    public function constInt(int $n, bool $signExtend): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMConstInt($this->type, $n, $this->llvm->toBool($signExtend)));
    }

    public function constReal(float $n): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMConstReal($this->type, $n));
    }
}