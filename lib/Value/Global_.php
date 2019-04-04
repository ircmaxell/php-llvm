<?php declare(strict_types=1);

namespace PHPLLVM\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value;

interface Global_ extends Value {

    const NOT_THREAD_LOCAL = 0;
    const GENERAL_DYNAMIC_TLS = 1;
    const LOCAL_DYNAMIC_TLS = 2;
    const INITIAL_EXEC_TLS = 3;
    const LOCAL_EXEC_TLS = 4;

    public function getNext(): ?Value;

    public function getPrevious(): ?Value;

    public function delete(): void;

    public function getInitializer(): Value;

    public function setInitializer(Value $value): void;

    public function isThreadLocal(): bool;

    public function setThreadLocal(bool $value): void;

    public function isGlobalConstant(): bool;

    public function setGlobalConstant(bool $value): void;

    public function getThreadLocalMode(): int;

    public function setThreadLocalMode(int $mode): void;
    
}