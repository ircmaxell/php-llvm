<?php declare(strict_types=1);

namespace PHPLLVM\LLVM8;

use PHPLLVM\LLVMAbstract\LLVM as CoreLLVM;
use PHPLLVM\LLVMAbstract\Factory;

class LLVM extends CoreLLVM {

    public function __construct(?string $pathToSoFile = null) {
        $factory = new Factory($this);
        parent::__construct($factory, $pathToSoFile);
    }

}