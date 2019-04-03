<?php declare(strict_types=1);

namespace PHPLLVM;

interface Value {
    const KIND_ARGUMENT = 1;
    const KIND_BASIC_BLOCK = 2;
    const KIND_MEMORY_USE = 3;
    const KIND_MEMORY_DEF = 4;
    const KIND_MEMORY_PHI = 5;
    const KIND_FUNCTION = 6;
    const KIND_GLOBAL_ALIAS = 7;
    const KIND_GLOBAL_IFUNC = 8;
    const KIND_GLOBAL_VARIABLE = 9;
    const KIND_BLOCK_ADDRESS = 10;
    const KIND_CONSTANT_EXPR = 11;
    const KIND_CONSTANT_ARRAY = 12;
    const KIND_CONSTANT_STRUCT = 13;
    const KIND_CONSTANT_VECTOR = 14;
    const KIND_UNDEF_VALUE = 15;
    const KIND_CONSTANT_AGGREGATE_ZERO = 16;
    const KIND_CONSTANT_DATA_ARRAY = 17;
    const KIND_CONSTANT_DATA_VECTOR = 18;
    const KIND_CONSTANT_INT = 19;
    const KIND_CONSTANT_FP = 20;
    const KIND_CONSTANT_POINTER_NULL = 21;
    const KIND_CONSTANT_TOKEN_NONE = 22;
    const KIND_METADATA_AS_VALUE = 23;
    const KIND_INLINE_ASM = 24;
    const KIND_INSTRUCTION = 25;

    public function typeOf(): Type;

    public function getKind(): int;

    public function getName(): string;

    public function setName(string $name): void;

    public function dump(): void;

    public function toString(): string;

    public function replaceAllUsesWith(Value $new): void;

    public function isConstant(): bool;

    public function isUndef(): bool;

    public function isAArgument(): bool;

    public function isABasicBlock(): bool;

    public function isAInlineAsm(): bool;

    public function isAUser(): bool;

    public function isAConstant(): bool;

    public function isABlockAddress(): bool;

    public function isAConstantAggregateZero(): bool;

    public function isAConstantArray(): bool;

    public function isAConstantDataSequential(): bool;

    public function isAConstantDataArray(): bool;

    public function isAConstantDataVector(): bool;

    public function isAConstantExpr(): bool;

    public function isAConstantFP(): bool;

    public function isAConstantInt(): bool;

    public function isAConstantPointerNull(): bool;

    public function isAConstantStruct(): bool;

    public function isAConstantTokenNone(): bool;

    public function isAConstantVector(): bool;

    public function isAGlobalValue(): bool;

    public function isAGlobalAlias(): bool;

    public function isAGlobalObject(): bool;

    public function isAFunction(): bool;

    public function isAGlobalVariable(): bool;

    public function isAUndefValue(): bool;

    public function isAInstruction(): bool;

    public function isABinaryOperator(): bool;

    public function isACallInst(): bool;

    public function isAIntrinsicInst(): bool;

    public function isADbgInfoIntrinsic(): bool;

    public function isADbgDeclareInst(): bool;

    public function isAMemIntrinsic(): bool;

    public function isAMemCpyInst(): bool;

    public function isAMemMoveInst(): bool;

    public function isAMemSetInst(): bool;

    public function isACmpInst(): bool;

    public function isAFCmpInst(): bool;

    public function isAICmpInst(): bool;

    public function isAExtractElementInst(): bool;

    public function isAGetElementPtrInst(): bool;

    public function isAInsertElementInst(): bool;

    public function isAInsertValueInst(): bool;

    public function isALandingPadInst(): bool;

    public function isAPHINode(): bool;

    public function isASelectInst(): bool;

    public function isAShuffleVectorInst(): bool;

    public function isAStoreInst(): bool;

    public function isATerminatorInst(): bool;

    public function isABranchInst(): bool;

    public function isAIndirectBrInst(): bool;

    public function isAInvokeInst(): bool;

    public function isAReturnInst(): bool;

    public function isASwitchInst(): bool;

    public function isAUnreachableInst(): bool;

    public function isAResumeInst(): bool;

    public function isACleanupReturnInst(): bool;

    public function isACatchReturnInst(): bool;

    public function isAFuncletPadInst(): bool;

    public function isACatchPadInst(): bool;

    public function isACleanupPadInst(): bool;

    public function isAUnaryInstruction(): bool;

    public function isAAllocaInst(): bool;

    public function isACastInst(): bool;

    public function isAAddrSpaceCastInst(): bool;

    public function isABitCastInst(): bool;

    public function isAFPExtInst(): bool;

    public function isAFPToSIInst(): bool;

    public function isAFPToUIInst(): bool;

    public function isAFPTruncInst(): bool;

    public function isAIntToPtrInst(): bool;

    public function isAPtrToIntInst(): bool;

    public function isASExtInst(): bool;

    public function isASIToFPInst(): bool;

    public function isATruncInst(): bool;

    public function isAUIToFPInst(): bool;

    public function isAZExtInst(): bool;

    public function isAExtractValueInst(): bool;

    public function isALoadInst(): bool;

    public function isAVAArgInst(): bool;

    public function isAMDNode(): bool;

    public function isAMDString(): bool;

    public function getFirstUse(): Use_;

    public function getOperand(int $index): Value;

    public function getOperandUse(int $index): Use_;

    public function setOperand(int $index, Value $value): void;

    public function getNumOperands(): int;

    public function isNull(): bool;

    public function isConstantString(): bool;

    

}