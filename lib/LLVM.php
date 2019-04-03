<?php declare(strict_types=1);

namespace PHPLLVM;

interface LLVM {

    public function contextCreate(): Context;

    public function getGlobalContext(): Context;

    public function moduleCreateWithName(string $name): Module;

    public function shutdown(): void;

    public function createMessage(string $message): string;

    public function disposeMessage(string $message): void;

}