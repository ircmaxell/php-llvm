<?php declare(strict_types=1);

namespace PHPLLVM;

interface PassManagerBuilder {

    public function dispose(): void;

    public function setOptLevel(int $optLevel): void;

    public function setSizeLevel(int $sizeLevel): void;

    public function setDisableUnitAtATime(bool $value): void;

    public function setDisableUnrollLoops(bool $value): void;

    public function setDisableSimplifyLibCalls(bool $value): void;

    public function useInlineWithThreshold(int $threshold): void;

    public function populateFunctionPassManager(PassManager $passManager): void;

    public function populateModulePassManager(PassManager $passManager): void;

    public function populateLTOPassManager(PassManager $passManager, bool $internalize, bool $runInliner): void;
    
}