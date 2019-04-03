<?php declare(strict_types=1);

namespace PHPLLVM;

interface ExecutionEngine {

    public function dispose(): void;

    public function runStaticConstructors(): void;

    public function runStaticDestructors(): void;

    public function freeMachineCodeForFunction(Value $function): void;

    public function addModule(Module $module): void;

    public function getTargetData(): TargetData;

    public function getTargetMachine(): TargetMachine;

    public function getPointerToGlobal(Value $global);

    public function getGlobalValueAddress(string $name): int;

    public function getFunctionAddress(string $name): int;

}
