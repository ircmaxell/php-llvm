<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4\Value;

use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVM4\BasicBlock;
use PHPLLVM\LLVM4\Value;

use llvm4\LLVMTypeRef_ptr;
use llvm4\LLVMBasicBlockRef_ptr;

class Function_ extends Value implements CoreValue\Function_ {

    public function getKind(): int {
        return self::KIND_FUNCTION;
    }

    public function getNext(): ?CoreValue\Function_ {
        $func = $this->llvm->lib->LLVMGetNextFunction($this->value);
        if ($func === null) {
            return null;
        }
        return new Function_($this->llvm, $this->context, $func);
    }

    public function getPrevious(): ?CoreValue\Function_ {
        $func = $this->llvm->lib->LLVMGetPreviousFunction($this->value);
        if ($func === null) {
            return null;
        }
        return new Function_($this->llvm, $this->context, $func);
    }

    public function delete(): void {
        $this->llvm->lib->LLVMDeleteFunction($this->value);
    }

    public function hasPersonalityFunction(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMHasPersonalityFn($this->value));
    }

    public function getPersonalityFunction(): CoreValue\Function_ {
        return Value::value($this->llvm->lib->LLVMGetPersonalityFn($this->value));
    }

    public function setPersonalityFunction(CoreValue\Function_ $func): CoreValue {
        return Value::value($this->llvm->lib->LLVMSetPersonalityFn($this->value, $func));
    }

    public function getIntrinsicsId(): int {
        return $this->llvm->lib->LLVMGetIntrinsicID($this->value);
    }

    public function getCallConvention(): int {
        return $this->llvm->lib->LLVMGetFunctionCallConv($this->value);
    }

    public function setCallConvention(int $convention): void {
        $this->llvm->lib->LLVMSetFunctionCallConv($this->value, $convention);
    }

    public function getGc(): string {
        return $this->llvm->lib->LLVMGetGC($this->value)->toString();
    }

    public function setGc(string $value): void {
        $this->llvm->lib->LLVMSetGC($this->value, $value);
    }

    public function addTargetDependentAttribute(string $a, string $v): void {
        $this->llvm->lib->LLVMSetTargetDependentFunctionAttr($this->value, $a, $v);
    }

    public function countParams(): int {
        return $this->llvm->lib->LLVMCountParams($this->value);
    }

    public function getParams(): array {
        $nParams = $this->countParams();
        $params = $this->llvm->lib->getFFI()->new('LLVMValueRef[' . $nParams . ']');
        $paramWrapper = new LLVMValueRef_ptr($params);
        $this->llvm->lib->LLVMGetParams($this->value, $paramWrapper);
        $result = [];
        for ($i = 0; $i < $nParams; $i++) {
            $result[$i] = Value::value($this->llvm, $this->context, $paramWrapper->deref($i));
        }
        return $result;
    }

    public function getParam(int $index): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetParam($this->value, $index));
    }

    public function getFirstParam(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetFirstParam($this->value));
    }

    public function getLastParam(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetLastParam($this->value));
    }

    public function countBasicBlocks(): int {
        return $this->llvm->lib->LLVMCountBasicBlocks($this->value);
    }

    public function getBasicBlocks(): array {
        $nBlocks = $this->countBasicBlocks();
        $blocks = $this->llvm->lib->getFFI()->new('LLVMBasicBlockRef[' . $nParams . ']');
        $blockWrapper = new LLVMBasicBlockRef_ptr($blocks);
        $this->llvm->lib->LLVMGetBasicBlocks($this->value, $blockWrapper);
        $result = [];
        for ($i = 0; $i < $nBlocks; $i++) {
            $result[$i] = new BasicBlock($this->llvm, $this->context, $blockWrapper->deref($i));
        }
        return $result;
    }

    public function getFirstBasicBlock(): CoreBasicBlock {
        return new BasicBlock($this->llvm->lib->LLVMGetFirstBasicBlock($this->value));
    }

    public function getLastBasicBlock(): CoreBasicBlock {
        return new BasicBlock($this->llvm->lib->LLVMGetLastBasicBlock($this->value));
    }

    public function getEntryBasicBlock(): CoreBasicBlock {
        return new BasicBlock($this->llvm->lib->LLVMGetEntryBasicBlock($this->value));
    }

    public function appendBasicBlock(string $name): CoreBasicBlock {
        return new BasicBlock($this->llvm, $this->context, $this->llvm->lib->LLVMAppendBasicBlockInContext($this->context->context, $this->value, $name));
    }

    public function viewCFG(): void {
        $this->llvm->lib->LLVMViewFunctionCFG($this->value);
    }

    public function viewCFGOnly(): void {
        $this->llvm->lib->LLVMViewFunctionCFGOnly($this->value);
    }
}