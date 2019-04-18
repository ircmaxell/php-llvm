<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\BasicBlock as CoreBasicBlock;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm\llvm as lib;
use llvm\LLVMBasicBlockRef;

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
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMBasicBlockAsValue($this->block));
    }

    public function getName(): string {
        return $this->llvm->lib->LLVMGetBasicBlockName($this->block)->toString();
    }

    public function getParent(): ?CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetBasicBlockParent($this->block));
    }

    public function getTerminator(): ?CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetBasicBlockTerminator($this->block));
    }

    public function getNext(): ?CoreBasicBlock {
        $block = $this->llvm->lib->LLVMGetPreviousBasicBlock($this->block);
        if ($block === null) {
            return null;
        }
        return $this->llvm->factory->basicBlock($this->context, $block);
    }

    public function getPrevious(): ?CoreBasicBlock {
        $block = $this->llvm->lib->LLVMGetNextBasicBlock($this->block);
        if ($block === null) {
            return null;
        }
        return $this->llvm->factory->basicBlock($this->context, $block);
    }

    public function insertBasicBlock(string $name): CoreBasicBlock {
        return $this->llvm->factory->basicBlock($this->context, $this->llvm->lib->LLVMInsertBasicBlock($this->block, $name));
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
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetFirstInstruction($this->block));
    }

    public function getLastInstruction(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetLastInstruction($this->block));
    }
}