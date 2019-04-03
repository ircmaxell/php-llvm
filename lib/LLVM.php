<?php declare(strict_types=1);

namespace PHPLLVM;

interface LLVM {

    public function contextCreate(): Context;

    public function getGlobalContext(): Context;

    public function moduleCreateWithName(string $name): Module;

    public function shutdown(): void;

    public function createMessage(string $message): string;

    public function getDefaultTargetTriple(): string;

    public function createTargetData(string $rep): TargetData;

    public function getTargetFromName(string $name): Target;

    public function getTargetFromTriple(string $triple, string &$errorMessage): Target; 

    public function linkInMCJit(): void;

    public function linkInInterpreter(): void;

    public function startMultithreaded(): bool;

    public function stopMultithreaded(): void;

    public function isMultiThreaded(): bool;

    public function createPassManager(): PassManager;

    public function initializeNativeTarget(): void;

}