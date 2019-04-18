<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVMAbstract\BasicBlock;
use PHPLLVM\LLVMAbstract\Value;


class Global_ extends Value implements CoreValue\Global_ {

    public function getNext(): ?CoreValue {
        $value = $this->llvm->lib->LLVMGetNextGlobal($this->value);
        if ($value === null) {
            return null;
        }
        return $this->llvm->factory->value($this->context, $value);
    }

    public function getPrevious(): ?CoreValue {
        $value = $this->llvm->lib->LLVMGetPreviousGlobal($this->value);
        if ($value === null) {
            return null;
        }
        return $this->llvm->factory->value($this->context, $value);
    }

    public function delete(): void {
        $this->llvm->lib->LLVMDeleteGlobal($this->value);
    }

    public function getInitializer(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetInitializer($this->value));
    }

    public function setInitializer(CoreValue $value): void {
        $this->llvm->lib->LLVMSetInitializer($this->value, $value->value);
    }

    public function isThreadLocal(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsThreadLocal($this->value));
    }

    public function setThreadLocal(bool $value): void {
        $this->llvm->lib->LLVMSetThreadLocal($this->value, $this->toBool($value));
    }

    public function isGlobalConstant(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMIsGlobalConstant($this->value));
    }

    public function setGlobalConstant(bool $value): void {
        $this->llvm->lib->LLVMSetGlobalConstant($this->value, $this->toBool($value));
    }

    public function getThreadLocalMode(): int {
        return $this->llvm->lib->LLVMGetThreadLocalMode($this->value);
    }

    public function setThreadLocalMode(int $mode): void {
        $this->llvm->lib->LLVMSetThreadLocalMode($this->value, $mode);
    }
}