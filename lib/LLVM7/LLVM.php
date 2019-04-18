<?php declare(strict_types=1);

namespace PHPLLVM\LLVM7;

use PHPLLVM\LLVMAbstract\LLVM as CoreLLVM;

class LLVM extends CoreLLVM {

    public function __construct(?string $pathToSoFile = null) {
        $factory = new Factory($this);
        parent::__construct($factory, $pathToSoFile);
    }

}