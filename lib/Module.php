<?php declare(strict_types=1);

namespace PHPLLVM;

interface Module {
    const VERIFY_ACTION_ABORT  = 1;
    const VERIFY_ACTION_PRINT  = 2;
    const VERIFY_ACTION_RETURN = 3;
    const VERIFY_ACTION_THROW  = 4;

    public function dispose(): void;

    public function clone(): Module;

    public function getIdentifier(): string;

    public function setIdentifier(string $identifier): void;

    public function getDataLayout(): string;

    public function setDataLayout(string $layout): void;

    public function getTarget(): string;

    public function setTarget(string $target): void;

    public function dump(): void;

    public function printToFile(string $filename, string &$errorMessage): bool;

    public function printToString(): string;

    public function setInlineAsm(string $asm): void;

    public function getTypeByName(string $name): Type;

    public function addFunction(string $name, Type\Function_ $func): Value;

    public function getNamedFunction(string $name): Value;

    public function getFirstFunction(): Value;

    public function getLastFunction(): Value;

    public function getModuleDataLayout(): TargetData;

    public function setModuleDataLayout(TargetData $targetData);

    public function createExecutionEngine(): ExecutionEngine;

    public function createInterpreter(): ExecutionEngine;

    public function createJITCompiler(int $optLevel): ExecutionEngine;

    public function verify(int $verifyAction, &$outMessage): bool;

    public function createFunctionPassManager(): PassManager;

}