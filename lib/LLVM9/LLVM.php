<?php declare(strict_types=1);

namespace PHPLLVM\LLVM9;

use PHPLLVM\LLVM4\LLVM as CoreLLVM;
use llvm9\llvm as lib;

class LLVM extends CoreLLVM {

    public function __construct(?string $pathToSoFile = null) {
        $this->lib = new lib($pathToSoFile ?? lib::SOFILE);
        $this->loadTargetSets();
    }
}