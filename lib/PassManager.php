<?php declare(strict_types=1);

namespace PHPLLVM;

interface PassManager {

    public function run(Module $module): bool;

    public function initializeFunctionPassManager(): bool;

    public function runFunctionPassManager(Value $function): bool;

    public function finalizeFunctionPassManager(): bool;

    public function dispose(): void;

}