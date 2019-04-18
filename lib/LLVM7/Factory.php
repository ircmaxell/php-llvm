<?php declare(strict_types=1);

namespace PHPLLVM\LLVM7;

use PHPLLVM\LLVMAbstract\Builder;
use PHPLLVM\LLVMAbstract\Context;
use PHPLLVM\LLVMAbstract\Factory as AbstractFactory;
use PHPLLVM\LLVMAbstract\Intrinsic;
use PHPLLVM\LLVMAbstract\Module;


class Factory extends AbstractFactory {

    public function intrinsic(Context $context, Module $module, Builder $builder): Intrinsic {
        return new Intrinsic($this->llvm, $context, $module, $builder);
    }

}