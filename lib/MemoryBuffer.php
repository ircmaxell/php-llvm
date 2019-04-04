<?php declare(strict_types=1);

namespace PHPLLVM;

interface MemoryBuffer {

    public function getStart(): string;

    public function getSize(): int;

    public function dispose(): void;

    public function parseBitcode(Context $context): Module;

    public function getBitcodeModule(Context $context): Module;

}