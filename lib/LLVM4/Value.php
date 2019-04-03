<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;

use llvm4\llvm as lib;
use llvm4\LLVMValueRef;

class Value implements CoreValue {

    public LLVM $llvm;
    public Context $context;
    public LLVMValueRef $value;

    public function __construct(LLVM $llvm, Context $context, LLVMValueRef $value) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->value = $value;
    }

    public function getNextFunction(): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMGetNextFunction($this->value));
    }

    public function getPreviousFunction(): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMGetPreviousFunction($this->value));
    }

    public function typeOf(): CoreType {
        return new Type($this->llvm, $this->context, $this->llvm->lib->LLVMTypeOf($this->value));
    }

    public function getKind(): int {
        public function getKind(): int {
        $kind = $this->llvm->lib->LLVMGetValueKind($this->value);
        switch ($kind->getData() + 0) {
            case lib::LLVMArgumentValueKind:
                return self::KIND_ARGUMENT;
            case lib::LLVMBasicBlockValueKind:
                return self::KIND_BASIC_BLOCK;
            case lib::LLVMMemoryUseValueKind:
                return self::KIND_MEMORY_USE;
            case lib::LLVMMemoryDefValueKind:
                return self::KIND_MEMORY_DEF;
            case lib::LLVMMemoryPhiValueKind:
                return self::KIND_MEMORY_PHI;
            case lib::LLVMFunctionValueKind:
                return self::KIND_FUNCTION;
            case lib::LLVMGlobalAliasValueKind:
                return self::KIND_GLOBAL_ALIAS;
            case lib::LLVMGlobalIFuncValueKind:
                return self::KIND_GLOBAL_IFUNC;
            case lib::LLVMGlobalVariableValueKind:
                return self::KIND_GLOBAL_VARIABLE;
            case lib::LLVMBlockAddressValueKind:
                return self::KIND_BLOCK_ADDRESS;
            case lib::LLVMConstantExprValueKind:
                return self::KIND_CONSTANT_EXPR;
            case lib::LLVMConstantArrayValueKind:
                return self::KIND_CONSTANT_ARRAY;
            case lib::LLVMConstantStructValueKind:
                return self::KIND_CONSTANT_STRUCT;
            case lib::LLVMConstantVectorValueKind:
                return self::KIND_CONSTANT_VECTOR;
            case lib::LLVMUndefValueValueKind:
                return self::KIND_UNDEF_VALUE;
            case lib::LLVMConstantAggregateZeroValueKind:
                return self::KIND_CONSTANT_AGGREGATE_ZERO;
            case lib::LLVMConstantDataArrayValueKind:
                return self::KIND_CONSTANT_DATA_ARRAY;
            case lib::LLVMConstantDataVectorValueKind:
                return self::KIND_CONSTANT_DATA_VECTOR;
            case lib::LLVMConstantIntValueKind:
                return self::KIND_CONSTANT_INT;
            case lib::LLVMConstantFPValueKind:
                return self::KIND_CONSTANT_FP;
            case lib::LLVMConstantPointerNullValueKind:
                return self::KIND_CONSTANT_POINTER_NULL;
            case lib::LLVMConstantTokenNoneValueKind:
                return self::KIND_CONSTANT_TOKEN_NONE;
            case lib::LLVMMetadataAsValueValueKind:
                return self::KIND_METADATA_AS_VALUE;
            case lib::LLVMInlineAsmValueKind:
                return self::KIND_INLINE_ASM;
            case lib::LLVMInstructionValueKin:
                return self::KIND_INSTRUCTION;
        }
        throw new \LogicException("Unknown kind returned from LLVM: " . ($kind->getData() + 0));
    }

    public function getName(): string {
        return $this->llvm->lib->LLVMValueGetName($this->value);
    }

    public function setName(string $name): void {
        $this->llvm->lib->LLVMSetValueName($this->value, $name);
    }

    public function dump(): void {
        $this->llvm->lib->LLVMDumpValue($this->value);
    }

    public function toString(): string {
        return $this->llvm->lib->LLVMPrintValueToString($this->value);
    }

    public function replaceAllUsesWith(Value $new): void {
        $this->llvm->lib->LLVMReplaceAllUsesWith($this->value, $new->value);
    }

    public function isConstant(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsConstant($this->value));
    }

    public function isUndef(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsUndef($this->value));
    }

    public function isAArgument(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAArgument($this->value));
    }
    public function isABasicBlock(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsABasicBlock($this->value));
    }
    public function isAInlineAsm(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAInlineAsm($this->value));
    }
    public function isAUser(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAUser($this->value));
    }
    public function isAConstant(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstant($this->value));
    }
    public function isABlockAddress(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsABlockAddress($this->value));
    }
    public function isAConstantAggregateZero(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantAggregateZero($this->value));
    }
    public function isAConstantArray(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantArray($this->value));
    }
    public function isAConstantDataSequential(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantDataSequential($this->value));
    }
    public function isAConstantDataArray(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantDataArray($this->value));
    }
    public function isAConstantDataVector(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantDataVector($this->value));
    }
    public function isAConstantExpr(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantExpr($this->value));
    }
    public function isAConstantFP(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantFP($this->value));
    }
    public function isAConstantInt(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantInt($this->value));
    }
    public function isAConstantPointerNull(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantPointerNull($this->value));
    }
    public function isAConstantStruct(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantStruct($this->value));
    }
    public function isAConstantTokenNone(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantTokenNone($this->value));
    }
    public function isAConstantVector(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAConstantVector($this->value));
    }
    public function isAGlobalValue(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAGlobalValue($this->value));
    }
    public function isAGlobalAlias(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAGlobalAlias($this->value));
    }
    public function isAGlobalObject(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAGlobalObject($this->value));
    }
    public function isAFunction(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFunction($this->value));
    }
    public function isAGlobalVariable(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAGlobalVariable($this->value));
    }
    public function isAUndefValue(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAUndefValue($this->value));
    }
    public function isAInstruction(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAInstruction($this->value));
    }
    public function isABinaryOperator(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsABinaryOperator($this->value));
    }
    public function isACallInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACallInst($this->value));
    }
    public function isAIntrinsicInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAIntrinsicInst($this->value));
    }
    public function isADbgInfoIntrinsic(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsADbgInfoIntrinsic($this->value));
    }
    public function isADbgDeclareInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsADbgDeclareInst($this->value));
    }
    public function isAMemIntrinsic(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAMemIntrinsic($this->value));
    }
    public function isAMemCpyInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAMemCpyInst($this->value));
    }
    public function isAMemMoveInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAMemMoveInst($this->value));
    }
    public function isAMemSetInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAMemSetInst($this->value));
    }
    public function isACmpInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACmpInst($this->value));
    }
    public function isAFCmpInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFCmpInst($this->value));
    }
    public function isAICmpInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAICmpInst($this->value));
    }
    public function isAExtractElementInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAExtractElementInst($this->value));
    }
    public function isAGetElementPtrInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAGetElementPtrInst($this->value));
    }
    public function isAInsertElementInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAInsertElementInst($this->value));
    }
    public function isAInsertValueInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAInsertValueInst($this->value));
    }
    public function isALandingPadInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsALandingPadInst($this->value));
    }
    public function isAPHINode(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAPHINode($this->value));
    }
    public function isASelectInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsASelectInst($this->value));
    }
    public function isAShuffleVectorInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAShuffleVectorInst($this->value));
    }
    public function isAStoreInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAStoreInst($this->value));
    }
    public function isATerminatorInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsATerminatorInst($this->value));
    }
    public function isABranchInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsABranchInst($this->value));
    }
    public function isAIndirectBrInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAIndirectBrInst($this->value));
    }
    public function isAInvokeInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAInvokeInst($this->value));
    }
    public function isAReturnInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAReturnInst($this->value));
    }
    public function isASwitchInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsASwitchInst($this->value));
    }
    public function isAUnreachableInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAUnreachableInst($this->value));
    }
    public function isAResumeInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAResumeInst($this->value));
    }
    public function isACleanupReturnInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACleanupReturnInst($this->value));
    }
    public function isACatchReturnInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACatchReturnInst($this->value));
    }
    public function isAFuncletPadInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFuncletPadInst($this->value));
    }
    public function isACatchPadInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACatchPadInst($this->value));
    }
    public function isACleanupPadInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACleanupPadInst($this->value));
    }
    public function isAUnaryInstruction(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAUnaryInstruction($this->value));
    }
    public function isAAllocaInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAAllocaInst($this->value));
    }
    public function isACastInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsACastInst($this->value));
    }
    public function isAAddrSpaceCastInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAAddrSpaceCastInst($this->value));
    }
    public function isABitCastInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsABitCastInst($this->value));
    }
    public function isAFPExtInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFPExtInst($this->value));
    }
    public function isAFPToSIInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFPToSIInst($this->value));
    }
    public function isAFPToUIInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFPToUIInst($this->value));
    }
    public function isAFPTruncInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAFPTruncInst($this->value));
    }
    public function isAIntToPtrInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAIntToPtrInst($this->value));
    }
    public function isAPtrToIntInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAPtrToIntInst($this->value));
    }
    public function isASExtInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsASExtInst($this->value));
    }
    public function isASIToFPInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsASIToFPInst($this->value));
    }
    public function isATruncInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsATruncInst($this->value));
    }
    public function isAUIToFPInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAUIToFPInst($this->value));
    }
    public function isAZExtInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAZExtInst($this->value));
    }
    public function isAExtractValueInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAExtractValueInst($this->value));
    }
    public function isALoadInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsALoadInst($this->value));
    }
    public function isAVAArgInst(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAVAArgInst($this->value));
    }
    public function isAMDNode(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAMDNode($this->value));
    }
    public function isAMDString(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsAMDString($this->value));
    }

    public function getFirstUse(): CoreUse {
        return new Use_($this->llvm, $this->context, $this->llvm->lib->LLVMGetFirstUse($this->value));
    }

    public function getOperand(int $index): CoreValue {
        return new Value($this->llvm, $this->context, $this->llvm->lib->LLVMGetOperand($this->value, $index));
    }

    public function getOperandUse(int $index): CoreUse {
        return new Use_($this->llvm, $this->context, $this->llvm->lib->LLVMGetOperandUse($this->value, $index));
    }

    public function setOperand(int $index, CoreValue $value): void {
        $this->llvm->lib->LLVMSetOperand($this->value, $index, $value->value);
    }

    public function getNumOperands(): int {
        return $this->llvm->lib->LLVMGetNumOperands($this->value);
    }

    public function isNull(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsNull($this->value));
    }
    
}