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

    public function initializeAArch64(): void;

    public function initializeAMDGPU(): void;

    public function initializeARM(): void;

    public function initializeHexagon(): void;

    public function initializeLenai(): void;

    public function initializeMips(): void;

    public function initializeMSP430(): void;

    public function initializeNVPTXT(): void;

    public function initializePowerPC(): void;

    public function initializeRISCV(): void;

    public function initializeSparc(): void;

    public function initializeSystemZ(): void;

    public function initializeX86(): void;

    public function initializeXCore(): void;

}