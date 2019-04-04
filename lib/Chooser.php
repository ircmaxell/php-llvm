<?php declare(strict_types=1);

namespace PHPLLVM;

use PHPLLVM\LLVM4\LLVM as LLVM4Impl;
use llvm4\llvm as LLVM4Lib;

class Chooser {

    public const VERSIONS = [
        LLVM4Lib::class => LLVM4Impl::class,
    ];

    public static function choose(): LLVM {
        foreach (self::VERSIONS as $lib => $impl) {
            if (file_exists($lib::SOFILE)) {
                return new $impl;
            }
        }
        throw new \LogicException("No supported version could be found on your system. Is LLVM installed correctly?");
    }
}