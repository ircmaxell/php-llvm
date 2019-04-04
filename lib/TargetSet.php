<?php declare(strict_types=1);

namespace PHPLLVM;

interface TargetSet {

    public function initialize(): void;

    public function isNative(): bool;

    public function getName(): string;

}