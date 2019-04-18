<?php declare(strict_types=1);

namespace PHPLLVM;

interface TargetMachine {
    const CODEGEN_FILE_TYPE_ASM = 1;
    const CODEGEN_FILE_TYPE_OBJECT = 2;

    public function dispose(): void;

    public function getTarget(): Target;

    public function getTriple(): string;

    public function getCPU(): string;

    public function getFeatureString(): string;

    public function createTargetDataLayout(): TargetData;

    public function setAsmVerbosity(bool $verboseAsm): void;

    public function emitToFile(Module $module, string $filename, int $codeGenType): bool;

}
