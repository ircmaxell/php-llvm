<?php declare(strict_types=1);

namespace PHPLLVM;

interface Target {
    const OPT_LEVEL_NONE = 0;
    const OPT_LEVEL_LESS = 1;
    const OPT_LEVEL_DEFAULT = 2;
    const OPT_LEVEL_AGGRESSIVE = 3;

    const RELOC_DEFAULT = 0;
    const RELOC_STATIC = 1;
    const RELOC_PIC = 2;
    const RELOC_DYNMAIC_NO_PIC = 3;

    const CODE_MODEL_DEFAULT = 0;
    const CODE_MODEL_JIT_DEFAULT = 1;
    const CODE_MODEL_SMALL = 2;
    const CODE_MODEL_KERNEL = 3;
    const CODE_MODEL_MEDIUM = 4;
    const CODE_MODEL_LARGE = 5;

    public function createTargetMachine(string $triple, string $cpu, string $features, int $optlevel, int $relocMode, int $codeModel): TargetMachine;

    public function getName(): string;

    public function getDescription(): string;

    public function hasJit(): bool;

    public function hasTargetMachine(): bool;

    public function hasAsmBackend(): bool;
    
}
