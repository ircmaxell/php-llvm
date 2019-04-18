<?php declare(strict_types=1);

namespace PHPLLVM;

interface TargetSet {

    public static function isSupported(LLVM $llvm): bool;

    public function initialize(): void;

    public function isNative(): bool;

    public function getName(): string;

}