<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMBuilderRef;
use llvm4\LLVMTypeRef_ptr;
use llvm4\LLVMValueRef_ptr;

class Builder implements CoreBuilder {

    public LLVM $llvm;
    public Context $context;
    public LLVMBuilderRef $builder;

    public function __construct(LLVM $llvm, Context $context, LLVMBuilderRef $builder) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->builder = $builder;
    }

    public function __destruct() {
        $this->dispose();
    }

    public function position(CoreBasicBlock $block, CoreValue $instr): void {
        $this->llvm->lib->LLVMPositionBuilder($this->builder, $block->block, $instr->value);
    }

    public function positionBefore(CoreValue $instr): void {
        $this->llvm->lib->LLVMPositionBuilderBefore($this->builder, $instr->value);
    }

    public function positionAtEnd(CoreBasicBlock $block): void {
        $this->llvm->lib->LLVMPositionBuilderAtEnd($this->builder, $block->block);
    }

    public function getInsertBlock(): CoreBasicBlock {
        return new BasicBlock($this->llvm->lib->LLVMGetInsertBlock($this->builder));
    }

    public function clearInsertionPosition(): void {
        $this->llvm->lib->LLVMClearInsertionPosition($this->builder);
    }

    public function insertIntoBuilder(CoreValue $instr): void {
        $this->llvm->lib->LLVMInsertIntoBuilder($this->builder, $instr->value);
    }

    public function insertIntoBuilderWithName(CoreValue $instr, string $name): void {
        $this->llvm->lib->LLVMInsertIntoBuilderWithName($this->builder, $instr->value, $name);
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposeBuilder($this->builder);
    }

    public function setCurrentDebugLocation(CoreValue $l): void {
        $this->llvm->lib->LLVMSetCurrentDebugLocation($this->builder, $l->value);
    }

    public function getCurrentDebugLocation(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetCurrentDebugLocation($this->builder));
    }

    public function setInstDebugLocation(CoreValue $inst): void {
        $this->llvm->lib->LLVMSetInstDebugLocation($this->builder, $inst->value);
    }

    public function returnVoid(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildRetVoid($this->builder));
    }

    public function returnValue(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildRet($this->builder, $value->value));
    }

    public function returnAggregate(CoreValue ...$values): CoreValue {
        $valueWrapper = $this->llvm->lib->makeArray(
            LLVMValueRev_ptr::class,
            array_map(
                function(Value $value) {
                    return $value->value;
                }, 
                $values
            )
        );
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildAggregateRet($this->builder, $valueWrapper, count($values)));
    }

    public function branch(CoreBasicBlock $dest): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildBr($this->builder, $dest->block));
    }

    public function branchIf(CoreValue $cond, CoreBasicBlock $if, CoreBasicBlock $else): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildCondBr($this->builder, $cond->value, $if->block, $else->block));
    }

    public function branchSwitch(CoreValue $value, CoreBasicBlock $default, int $numCases): CoreValue\SwitchBranch {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSwitch($this->builder, $value->value, $default->block, $numCases));
    }

    public function branchIndirect(CoreValue $addr, int $numDests): CoreValue\IndirectBranch {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildIndirectBr($this->builder, $addr->value, $numDests));
    }

    public function add(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildAdd($this->builder, $left->value, $right->value, ''));
    }

    public function addNoSignedWrap(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNSWAdd($this->builder, $left->value, $right->value, ''));
    }

    public function addNoUnsignedWrap(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNUWAdd($this->builder, $left->value, $right->value, ''));
    }

    public function fAdd(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFAdd($this->builder, $left->value, $right->value, ''));
    }

    public function sub(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSub($this->builder, $left->value, $right->value, ''));
    }

    public function subNoSignedWrap(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNSWSub($this->builder, $left->value, $right->value, ''));
    }

    public function subNoUnsignedWrap(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNUWSub($this->builder, $left->value, $right->value, ''));
    }

    public function fSub(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFSub($this->builder, $left->value, $right->value, ''));
    }

    public function mul(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildMul($this->builder, $left->value, $right->value, ''));
    }

    public function mulNoSignedWrap(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNSWMul($this->builder, $left->value, $right->value, ''));
    }

    public function mulNoUnsignedWrap(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNUWMul($this->builder, $left->value, $right->value, ''));
    }

    public function fMul(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFMul($this->builder, $left->value, $right->value, ''));
    }

    public function unsignedDiv(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildUDIV($this->builder, $left->value, $right->value, ''));
    }

    public function exactUnsignedDiv(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildExactUDiv($this->builder, $left->value, $right->value, ''));
    }

    public function signedDiv(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSDiv($this->builder, $left->value, $right->value, ''));
    }

    public function exactSignedDiv(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildExactSDiv($this->builder, $left->value, $right->value, ''));
    }

    public function fDiv(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFDiv($this->builder, $left->value, $right->value, ''));
    }

    public function unsigendRem(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildURem($this->builder, $left->value, $right->value, ''));
    }

    public function signedRem(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSRem($this->builder, $left->value, $right->value, ''));
    }

    public function fRem(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFRem($this->builder, $left->value, $right->value, ''));
    }

    public function shl(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildShl($this->builder, $left->value, $right->value, ''));
    }

    public function lShr(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildLShr($this->builder, $left->value, $right->value, ''));
    }

    public function aShr(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildAShr($this->builder, $left->value, $right->value, ''));
    }

    public function bitwiseAnd(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildAnd($this->builder, $left->value, $right->value, ''));
    }

    public function bitwiseOr(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildOr($this->builder, $left->value, $right->value, ''));
    }

    public function bitwiseXor(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildXor($this->builder, $left->value, $right->value, ''));
    }

    public function negate(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNeg($this->builder, $value->value, ''));
    }

    public function negateNoSignedWrap(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNSWNeg($this->builder, $value->value, ''));
    }

    public function negateNoUnsignedWrap(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNUWNeg($this->builder, $value->value, ''));
    }

    public function fNegate(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFNeg($this->builder, $value->value, ''));
    }

    public function not(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildNot($this->builder, $value->value, ''));
    }

    public function malloc(CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildMalloc($this->builder, $type->type, ''));
    }

    public function arrayMalloc(CoreType $type, CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildArrayMalloc($this->builder, $type->type, $value->value, ''));
    }

    public function alloca(CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildAlloca($this->builder, $type->type, ''));
    }

    public function arrayAlloca(CoreType $type, CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildArrayAlloca($this->builder, $type->type, $value->value, ''));
    }

    public function free(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFree($this->builder, $value->value, ''));
    }

    public function load(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildLoad($this->builder, $value->value, ''));
    }

    public function store(CoreValue $value, CoreValue $pointer): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildStore($this->builder, $value->value, $pointer->value, ''));
    }

    public function gep(CoreValue $pointer, CoreValue ... $indices): CoreValue {
        $valueWrapper = $llvm->lib->makeArray(
            LLVMValueRev_ptr::class,
            array_map(
                function(Value $value) {
                    return $value->value;
                }, 
                $indices
            )
        );
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildGEP($this->builder, $pointer->value, $valueWrapper, count($values), ''));
    }

    public function inBoundsGep(CoreValue $pointer, CoreValue ... $indices): CoreValue {
        $valueWrapper = $llvm->lib->makeArray(
            LLVMValueRev_ptr::class,
            array_map(
                function(Value $value) {
                    return $value->value;
                }, 
                $indices
            )
        );
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildInBoundsGEP($this->builder, $pointer->value, $valueWrapper, count($values), ''));
    }

    public function structGep(CoreValue $struct, int $index): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildStructGEP($this->builder, $struct->value, $index, ''));
    }

    public function globalString(string $string): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildGlobalString($this->builder, $string, ''));
    }

    public function globalStringPointer(string $string): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildGlobalStringPtr($this->builder, $string, ''));
    }

    public function trunc(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildTrunc($this->builder, $value->value, $type->type, ''));
    }

    public function zExt(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildZExt($this->builder, $value->value, $type->type, ''));
    }

    public function sExt(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSExt($this->builder, $value->value, $type->type, ''));
    }

    public function fpToUi(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFPToUI($this->builder, $value->value, $type->type, ''));
    }

    public function fpToSi(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFPToSI($this->builder, $value->value, $type->type, ''));
    }

    public function uiToFp(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildUIToFP($this->builder, $value->value, $type->type, ''));
    }

    public function siToFp(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSIToFP($this->builder, $value->value, $type->type, ''));
    }

    public function fpTrunc(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFPTrunc($this->builder, $value->value, $type->type, ''));
    }

    public function fpExt(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFPExt($this->builder, $value->value, $type->type, ''));
    }

    public function ptrToInt(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildPtrToInt($this->builder, $value->value, $type->type, ''));
    }

    public function intToPtr(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildIntToPtr($this->builder, $value->value, $type->type, ''));
    }

    public function bitCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildBitCast($this->builder, $value->value, $type->type, ''));
    }

    public function addrSpaceCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildAddrSpaceCast($this->builder, $value->value, $type->type, ''));
    }

    public function zExtOrBitCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildZExtOrBitCast($this->builder, $value->value, $type->type, ''));
    }

    public function sExtOrBitCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSExtOrBitCast($this->builder, $value->value, $type->type, ''));
    }

    public function truncOrBitCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildTruncOrBitCast($this->builder, $value->value, $type->type, ''));
    }

    public function pointerCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildPointerCast($this->builder, $value->value, $type->type, ''));
    }

    public function intCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildIntCast($this->builder, $value->value, $type->type, ''));
    }

    public function fpCast(CoreValue $value, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFPCast($this->builder, $value->value, $type->type, ''));
    }

    public function iCmp(int $op, CoreValue $left, CoreValue $right): CoreValue {
        switch ($op) {
            case self::INT_EQ:
                $predicate = lib::LLVMIntEQ;
                break;
            case self::INT_NE:
                $predicate = lib::LLVMIntNE;
                break;
            case self::INT_UGT:
                $predicate = lib::LLVMIntUGT;
                break;
            case self::INT_UGE:
                $predicate = lib::LLVMIntUGE;
                break;
            case self::INT_ULT:
                $predicate = lib::LLVMIntULT;
                break;
            case self::INT_ULE:
                $predicate = lib::LLVMIntULE;
                break;
            case self::INT_SGT:
                $predicate = lib::LLVMIntSGT;
                break;
            case self::INT_SGE:
                $predicate = lib::LLVMIntSGE;
                break;
            case self::INT_SLT:
                $predicate = lib::LLVMIntSLT;
                break;
            case self::INT_SLE :
                $predicate = lib::LLVMIntSLE;
                break;
            default:
                throw new \LogicException("Unknown operator for icmp: $op");
        }
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildICmp($this->builder, $predicate, $left->value, $right->value, ''));
    }

    public function fCmp(int $op, CoreValue $left, CoreValue $right): CoreValue {
        switch ($op) {
            case self::REAL_OEQ:
                $predicate = lib::LLVMRealOEQ;
                break;
            case self::REAL_OGT:
                $predicate = lib::LLVMRealOGT;
                break;
            case self::REAL_OGE:
                $predicate = lib::LLVMRealOGE;
                break;
            case self::REAL_OLT:
                $predicate = lib::LLVMRealOLT;
                break;
            case self::REAL_OLE:
                $predicate = lib::LLVMRealOLE;
                break;
            case self::REAL_ONE:
                $predicate = lib::LLVMRealONE;
                break;
            case self::REAL_ORD:
                $predicate = lib::LLVMRealORD;
                break;
            case self::REAL_UNO:
                $predicate = lib::LLVMRealUNO;
                break;
            case self::REAL_UEQ:
                $predicate = lib::LLVMRealUEQ;
                break;
            case self::REAL_UGT:
                $predicate = lib::LLVMRealUGT;
                break;
            case self::REAL_UGE:
                $predicate = lib::LLVMRealUGE;
                break;
            case self::REAL_ULT:
                $predicate = lib::LLVMRealULT;
                break;
            case self::REAL_ULE:
                $predicate = lib::LLVMRealULE;
                break;
            case self::REAL_UNE:
                $predicate = lib::LLVMRealUNE;
                break;
            default:
                throw new \LogicException("Unknown operator for fcmp: $op");
        }
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildFCmp($this->builder, $predicate, $left->value, $right->value, ''));
    }

    public function phi(CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildPhi($this->builder, $type->type, ''));
    }

    public function call(CoreValue\Function_ $function, CoreValue ... $args): CoreValue {
        $valueWrapper = $llvm->lib->makeArray(
            LLVMValueRev_ptr::class,
            array_map(
                function(Value $value) {
                    return $value->value;
                }, 
                $args
            )
        );
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildCall($this->builder, $function->value, $valueWrapper, count($args), ''));
    }

    public function select(CoreValue $if, CoreValue $then, CoreValue $else): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildSelect($this->builder, $if->value, $$then->value, $else->value, ''));
    }

    public function vaarg(CoreValue $list, CoreType $type): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildVAArg($this->builder, $list->value, $type->type, ''));
    }

    public function extractElement(CoreValue $vector, CoreValue $index): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildExtractElement($this->builder, $vector->value, $index->value, ''));
    }

    public function insertElement(CoreValue $vector, CoreValue $value, CoreValue $index): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildInsertElement($this->builder, $vector->value, $value->value, $index->value, ''));
    }

    public function shuffleVector(CoreValue $v1, CoreValue $v2, CoreValue $mask): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildShuffleVector($this->builder, $v1->value, $v2->value, $mask->value, ''));
    }

    public function extractValue(CoreValue $aggVal, int $index): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildExtractValue($this->builder, $aggVal->value, $index, ''));
    }

    public function insertValue(CoreValue $aggVal, CoreValue $value, int $index): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildInsertValue($this->builder, $aggVal->value, $value->value, $index, ''));
    }

    public function isNull(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildIsNull($this->builder, $value->value, ''));
    }

    public function isNotNull(CoreValue $value): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildIsNotNull($this->builder, $value->value, ''));
    }

    public function ptrDiff(CoreValue $left, CoreValue $right): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBuildPtrDiff($this->builder, $left->value, $right->value, ''));
    }
}