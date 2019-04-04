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

    public function initializeNative(): void;

    public function initializeAll(): void;

    public function initialize(string $name): void;

    public function addTargetSet(TargetSet $targetSet);

    public function createMemoryBufferWithFile(string $path, string &$message): MemoryBuffer;

    public function createMemoryBufferWithString(string $data, string $name): MemoryBuffer;

    public function createPassManagerBuilder(): PassManagerBuilder;
}