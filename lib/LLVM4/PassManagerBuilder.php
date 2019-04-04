<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;
use PHPLLVM\Target as CoreTarget;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\TargetMachine as CoreTargetMachine;
use PHPLLVM\PassManager as CorePassManager;
use PHPLLVM\PassManagerBuilder as CorePassManagerBuilder

use llvm4\llvm as lib;
use llvm4\LLVMPassManagerBuilderRef;

class PassManagerBuilder implements CorePassManagerBuilder {

    public LLVM $llvm;
    public LLVMPassManagerRef $passManagerBuilder;

    public function __construct(LLVM $llvm, LLVMPassManagerBuilderRef $passManagerBuilder) {
        $this->llvm = $llvm;
        $this->passManagerBuilder = $passManagerBuilder;
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMPassManagerBuilderDispose($this->passManagerBuilder);
    }

    public function setOptLevel(int $optLevel): void {
        $this->llvm->lib->LLVMPassManagerBuilderSetOptLevel($this->passManagerBuilder, $optLevel);
    }

    public function setSizeLevel(int $sizeLevel): void {
        $this->llvm->lib->LLVMPassManagerBuilderSetSizeLevel($this->passManagerBuilder, $sizeLevel);
    }

    public function setDisableUnitAtATime(bool $value): void {
        $this->llvm->lib->LLVMPassManagerBuilderSetDisableUnitAtATime($this->passManagerBuilder, $this->llvm->toBool($value));
    }

    public function setDisableUnrollLoops(bool $value): void {
        $this->llvm->lib->LLVMPassManagerBuilderSetDisableUnrollLoops($this->passManagerBuilder, $this->llvm->toBool($value));
    }

    public function setDisableSimplifyLibCalls(bool $value): void {
        $this->llvm->lib->LLVMPassManagerBuilderSetDisableSimplifyLibCalls($this->passManagerBuilder, $this->llvm->toBool($value));
    }

    public function useInlineWithThreshold(int $threshold): void {
        $this->llvm->lib->LLVMPassManagerBuilderUseInlinerWithThreshold($this->passManagerBuilder, $threshold);
    }

    public function populateFunctionPassManager(PassManager $passManager): void {
        $this->llvm->lib->LLVMPassManagerBuilderPopulateFunctionPassManager($this->passManagerBuilder, $passManagerBuilder);
    }

    public function populateModulePassManager(PassManager $passManager): void {
        $this->llvm->lib->LLVMPassManagerBuilderPopulateModulePassManager($this->passManagerBuilder, $passManagerBuilder);
    }

    public function populateLTOPassManager(PassManager $passManager, bool $internalize, bool $runInliner): void {
        $this->llvm->lib->LLVMPassManagerBuilderPopulateLTOPassManager($this->passManagerBuilder, $passManagerBuilder, $this->llvm->toBool($internalize), $this->llvm->toBool($runInliner));
    }
}