<?php declare(strict_types=1);

namespace PHPLLVM\LLVM7;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Intrinsic as CoreIntrinsic;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\TargetMachine as CoreTargetMachine;
use PHPLLVM\ExecutionEngine as CoreExecutionEngine;

use llvm\llvm as lib;

use PHPLLVM\LLVMAbstract\Intrinsic as AbstractIntrinsic;

class Intrinsic extends AbstractIntrinsic {

    public function memcpy(CoreValue $dest, CoreValue $src, CoreValue $size, bool $isVolatile): void {
        $int1 = $this->context->int1Type();
        $is32Bit = $size->typeOf()->getWidth() === 32;
        $funcName = $is32Bit ? 'llvm.memcpy.p0i8.p0i8.i32' : 'llvm.memcpy.p0i8.p0i8.i64';
        $func = $this->module->getNamedFunction($funcName);
        if ($func === null) {
            $func = $this->module->addFunction(
                $funcName,
                $this->context->functionType(
                    $this->context->voidType(),
                    false,
                    $this->context->int8Type()->pointerType(0),
                    $this->context->int8Type()->pointerType(0),
                    $is32Bit ? $this->context->int32Type() : $this->context->int64Type(),
                    $int1
                )
            );
        }
        $this->builder->call(
            $func,
            $dest,
            $src,
            $size,
            $int1->constInt($isVolatile ? 1 : 0, false)
        );
    }

    public function memmove(CoreValue $dest, CoreValue $src, CoreValue $size, bool $isVolatile): void {
        $int1 = $this->context->int1Type();
        $is32Bit = $size->typeOf()->getWidth() === 32;
        $funcName = $is32Bit ? 'llvm.memmove.p0i8.p0i8.i32' : 'llvm.memmove.p0i8.p0i8.i64';
        $func = $this->module->getNamedFunction($funcName);
        if ($func === null) {
            $func = $this->module->addFunction(
                $funcName,
                $this->context->functionType(
                    $this->context->voidType(),
                    false,
                    $this->context->int8Type()->pointerType(0),
                    $this->context->int8Type()->pointerType(0),
                    $is32Bit ? $this->context->int32Type() : $this->context->int64Type(),
                    $int1
                )
            );
        }
        $this->builder->call(
            $func,
            $dest,
            $src,
            $size,
            $int1->constInt($isVolatile ? 1 : 0, false)
        );
    }

    public function memset(CoreValue $dest, CoreValue $src, CoreValue $size, bool $isVolatile): void {
        $int1 = $this->context->int1Type();
        $is32Bit = $size->typeOf()->getWidth() === 32;
        $funcName = $is32Bit ? 'llvm.memset.p0i8.i32' : 'llvm.memset.p0i8.i64';
        $func = $this->module->getNamedFunction($funcName);
        if ($func === null) {
            $func = $this->module->addFunction(
                $funcName,
                $this->context->functionType(
                    $this->context->voidType(),
                    false,
                    $this->context->int8Type()->pointerType(0),
                    $this->context->int8Type(),
                    $is32Bit ? $this->context->int32Type() : $this->context->int64Type(),
                    $int1
                )
            );
        }
        $this->builder->call(
            $func,
            $dest,
            $src,
            $size,
            $int1->constInt($isVolatile ? 1 : 0, false)
        );
    }

}