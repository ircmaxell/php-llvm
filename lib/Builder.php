<?php declare(strict_types=1);

namespace PHPLLVM;

interface Builder {

    const INT_EQ = 1;
    const INT_NE = 2;
    const INT_UGT = 3;
    const INT_UGE = 4;
    const INT_ULT = 5;
    const INT_ULE = 6;
    const INT_SGT = 7;
    const INT_SGE = 8;
    const INT_SLT = 9;
    const INT_SLE = 10;

    const REAL_OEQ = 20;
    const REAL_OGT = 21;
    const REAL_OGE = 22;
    const REAL_OLT = 23;
    const REAL_OLE = 24;
    const REAL_ONE = 25;
    const REAL_ORD = 26;
    const REAL_UNO = 27;
    const REAL_UEQ = 28;
    const REAL_UGT = 29;
    const REAL_UGE = 30;
    const REAL_ULT = 31;
    const REAL_ULE = 32;
    const REAL_UNE = 33;

    public function position(BasicBlock $block, Value $instr): void;

    public function positionBefore(Value $instr): void;

    public function positionAtEnd(BasicBlock $block): void;

    public function getInsertBlock(): BasicBlock;

    public function clearInsertionPosition(): void;

    public function insertIntoBuilder(Value $instr): void;

    public function insertIntoBuilderWithName(Value $instr, string $name): void;

    public function dispose(): void;

    public function setCurrentDebugLocation(Value $l): void;

    public function getCurrentDebugLocation(): Value;

    public function setInstDebugLocation(Value $inst): void;

    public function returnVoid(): Value;

    public function returnValue(Value $value): Value;

    public function returnAggregate(Value ...$values): Value;

    public function branch(BasicBlock $dest): Value;

    public function branchIf(Value $cond, BasicBlock $if, BasicBlock $else): Value;

    public function branchSwitch(Value $value, BasicBlock $default, int $numCases): Value\SwitchBranch;

    public function branchIndirect(Value $addr, int $numDests): Value\IndirectBranch;

    public function add(Value $left, Value $right): Value;

    public function addNoSignedWrap(Value $left, Value $right): Value;

    public function addNoUnsignedWrap(Value $left, Value $right): Value;

    public function fAdd(Value $left, Value $right): Value;

    public function sub(Value $left, Value $right): Value;

    public function subNoSignedWrap(Value $left, Value $right): Value;

    public function subNoUnsignedWrap(Value $left, Value $right): Value;

    public function fSub(Value $left, Value $right): Value;

    public function mul(Value $left, Value $right): Value;

    public function mulNoSignedWrap(Value $left, Value $right): Value;

    public function mulNoUnsignedWrap(Value $left, Value $right): Value;

    public function fMul(Value $left, Value $right): Value;

    public function unsignedDiv(Value $left, Value $right): Value;

    public function exactUnsignedDiv(Value $left, Value $right): Value;

    public function signedDiv(Value $left, Value $right): Value;

    public function exactSignedDiv(Value $left, Value $right): Value;

    public function fDiv(Value $left, Value $right): Value;

    public function unsigendRem(Value $left, Value $right): Value;

    public function signedRem(Value $left, Value $right): Value;

    public function fRem(Value $left, Value $right): Value;

    public function shl(Value $left, Value $right): Value;

    public function lShr(Value $left, Value $right): Value;

    public function aShr(Value $left, Value $right): Value;

    public function bitwiseAnd(Value $left, Value $right): Value;

    public function bitwiseOr(Value $left, Value $right): Value;

    public function bitwiseXor(Value $left, Value $right): Value;

    public function negate(Value $value): Value;

    public function negateNoSignedWrap(Value $value): Value;

    public function negateNoUnsignedWrap(Value $value): Value;

    public function fNegate(Value $value): Value;

    public function not(Value $value): Value;

    public function malloc(Type $type): Value;

    public function arrayMalloc(Type $type, Value $value): Value;

    public function alloca(Type $type): Value;

    public function arrayAlloca(Type $type, Value $value): Value;

    public function free(Value $value): Value;

    public function load(Value $value): Value;

    public function store(Value $value, Value $pointer): Value;

    public function gep(Value $pointer, Value ... $indices): Value;

    public function inBoundsGep(Value $pointer, Value ... $indices): Value;

    public function structGep(Value $struct, int $index): Value;

    public function globalString(string $string): Value;

    public function globalStringPointer(string $string): Value;

    public function trunc(Value $value, Type $type): Value;

    public function zExt(Value $value, Type $type): Value;

    public function sExt(Value $value, Type $type): Value;

    public function fpToUi(Value $value, Type $type): Value;

    public function fpToSi(Value $value, Type $type): Value;

    public function uiToFp(Value $value, Type $type): Value;

    public function siToFp(Value $value, Type $type): Value;

    public function fpTrunc(Value $value, Type $type): Value;

    public function fpExt(Value $value, Type $type): Value;

    public function ptrToInt(Value $value, Type $type): Value;

    public function intToPtr(Value $value, Type $type): Value;

    public function bitCast(Value $value, Type $type): Value;

    public function addrSpaceCast(Value $value, Type $type): Value;

    public function zExtOrBitCast(Value $value, Type $type): Value;

    public function sExtOrBitCast(Value $value, Type $type): Value;

    public function truncOrBitCast(Value $value, Type $type): Value;

    public function pointerCast(Value $value, Type $type): Value;

    public function intCast(Value $value, Type $type): Value;

    public function fpCast(Value $value, Type $type): Value;

    public function iCmp(int $op, Value $left, Value $right): Value;

    public function fCmp(int $op, Value $left, Value $right): Value;

    public function phi(Type $type): Value;

    public function call(Value\Function_ $function, Value ... $args): Value;

    public function select(Value $if, Value $then, Value $else): Value;

    public function vaarg(Value $list, Type $type): Value;

    public function extractElement(Value $vector, Value $index): Value;

    public function insertElement(Value $vector, Value $value, Value $index): Value;

    public function shuffleVector(Value $v1, Value $v2, Value $mask): Value;

    public function extractValue(Value $aggVal, int $index): Value;

    public function insertValue(Value $aggVal, Value $value, int $index): Value;

    public function isNull(Value $value): Value;

    public function isNotNull(Value $value): Value;

    public function ptrDiff(Value $left, Value $right): Value;

}
