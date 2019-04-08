<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMBasicBlockRef;

class BasicBlock implements CoreBasicBlock {

    public LLVM $llvm;
    public Context $context;
    public LLVMBasicBlockRef $block;

    public function __construct(LLVM $llvm, Context $context, LLVMBasicBlockRef $block) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->block = $block;
    }

    public function asValue(): CoreValue\BasicBlock {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMBasicBlockAsValue($this->block));
    }

    public function getName(): string {
        return $this->llvm->lib->LLVMGetBasicBlockName($this->block)->toString();
    }

    public function getParent(): ?CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetBasicBlockParent($this->block));
    }

    public function getTerminator(): ?CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetBasicBlockTerminator($this->block));
    }

    public function getNext(): ?CoreBasicBlock {
        $block = $this->llvm->lib->LLVMGetPreviousBasicBlock($this->block);
        if ($block === null) {
            return null;
        }
        return new BasicBlock($this->llvm, $this->context, $block);
    }

    public function getPrevious(): ?CoreBasicBlock {
        $block = $this->llvm->lib->LLVMGetNextBasicBlock($this->block);
        if ($block === null) {
            return null;
        }
        return new BasicBlock($this->llvm, $this->context, $block);
    }

    public function insertBasicBlock(string $name): CoreBasicBlock {
        return new BasicBlock($this->llvm, $this->context, $this->llvm->lib->LLVMInsertBasicBlock($this->block, $name));
    }

    public function delete(): void {
        $this->llvm->lib->LLVMDeleteBasicBlock($this->block);
    }

    public function removeFromParent(): void {
        $this->llvm->lib->LLVMRemoveBasicBlockFromParent($this->block);
    }

    public function moveBefore(CoreBasicBlock $move): void {
        $this->llvm->lib->LLVMMoveBasicBlockBefore($this->block, $move->block);
    }

    public function moveAfter(CoreBasicBlock $move): void {
        $this->llvm->lib->LLVMMoveBasicBlockAfter($this->block, $move->block);
    }

    public function getFirstInstruction(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetFirstInstruction($this->block));
    }

    public function getLastInstruction(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetLastInstruction($this->block));
    }
}