<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract\Value;

use PHPLLVM\Attribute as CoreAttribute;
use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Value as CoreValue;

use PHPLLVM\LLVMAbstract\Attribute;
use PHPLLVM\LLVMAbstract\BasicBlock;
use PHPLLVM\LLVMAbstract\Value;

use llvm\LLVMAttributeRef_ptr;
use llvm\LLVMTypeRef_ptr;
use llvm\LLVMBasicBlockRef_ptr;

class Function_ extends Value implements CoreValue\Function_ {

    public function getKind(): int {
        return self::KIND_FUNCTION;
    }

    public function getNext(): ?CoreValue\Function_ {
        $func = $this->llvm->lib->LLVMGetNextFunction($this->value);
        if ($func === null) {
            return null;
        }
        return $this->llvm->factory->value($this->context, $func);
    }

    public function getPrevious(): ?CoreValue\Function_ {
        $func = $this->llvm->lib->LLVMGetPreviousFunction($this->value);
        if ($func === null) {
            return null;
        }
        return $this->llvm->factory->value($this->context, $func);
    }

    public function delete(): void {
        $this->llvm->lib->LLVMDeleteFunction($this->value);
    }

    public function hasPersonalityFunction(): bool {
        return $this->llvm->fromBool($this->llvm->lib->LLVMHasPersonalityFn($this->value));
    }

    public function getPersonalityFunction(): CoreValue\Function_ {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetPersonalityFn($this->value));
    }

    public function setPersonalityFunction(CoreValue\Function_ $func): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMSetPersonalityFn($this->value, $func));
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
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetParam($this->value, $index));
    }

    public function getFirstParam(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetFirstParam($this->value));
    }

    public function getLastParam(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetLastParam($this->value));
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
            $result[$i] = $this->llvm->factory->basicBlock($this->context, $blockWrapper->deref($i));
        }
        return $result;
    }

    public function getFirstBasicBlock(): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMGetFirstBasicBlock($this->value));
    }

    public function getLastBasicBlock(): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMGetLastBasicBlock($this->value));
    }

    public function getEntryBasicBlock(): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMGetEntryBasicBlock($this->value));
    }

    public function appendBasicBlock(string $name): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMAppendBasicBlockInContext($this->context->context, $this->value, $name));
    }

    public function viewCFG(): void {
        $this->llvm->lib->LLVMViewFunctionCFG($this->value);
    }

    public function viewCFGOnly(): void {
        $this->llvm->lib->LLVMViewFunctionCFGOnly($this->value);
    }

    public function blockAddress(CoreBasicBlock $block): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMBlockAddress($this->value, $block->block));
    }

    public function addAttributeAtIndex(int $index, CoreAttribute $attribute): void {
        $this->llvm->lib->LLVMAddAttributeAtIndex($this->value, $index, $attribute->attribute);
    }

    public function getAttributeCountAtIndex(int $index): int {
        return $this->llvm->lib->LLVMGetAttributeCountAtIndex($this->value, $index);
    }

    public function getAttributesAtIndex(int $index): array {
        $nAttributes = $this->getAttributeCountAtIndex($index);
        $attributes = new LLVMAttributeRef_ptr($this->llvm->lib->getFFI()->new('LLVMAttributeRef[' . $nAttributes . ']'));
        $this->llvm->getAttributesAtIndex($this->value, $index, $attributes);
        $result = [];
        for ($i = 0; $i < $nAttributes; $i++) {
            $result[$i] = $this->llvm->factory->attribute($this->context, $attributes->deref($i));
        }
        return $result;
    }

    public function getEnumAttributeAtIndex(int $index, int $kind): CoreAttribute {
        return $this->llvm->factory->attribute($this->context, $this->llvm->lib->LLVMGetEnumAttributeAtIndex($this->value, $index, $kind));
    }

    public function getStringAttributeAtIndex(int $index, string $kind): CoreAttribute {
        return $this->llvm->factory->attribute($this->context, $this->llvm->lib->LLVMGetStringAttributeAtIndex($this->value, $index, $kind, strlen($kind)));
    }

    public function removeEnumAttributeAtIndex(int $index, int $kind): void {
        $this->llvm->lib->LLVMRemoveEnumAttributeAtIndex($this->value, $index, $kind);
    }

    public function removeStringAttributeAtIndex(int $index, string $kind): void {
        $this->llvm->lib->LLVMRemoveStringAttributeAtIndex($this->value, $index, $kind, strlen($kind));
    }

}