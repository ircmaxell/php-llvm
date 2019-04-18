<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use llvm\llvm as lib;
use llvm\LLVMAttributeRef;
use llvm\LLVMBasicBlockRef;
use llvm\LLVMBuilderRef;
use llvm\LLVMContextRef;
use llvm\LLVMExecutionEngineRef;
use llvm\LLVMMemoryBufferRef;
use llvm\LLVMModuleRef;
use llvm\LLVMPassManagerRef;
use llvm\LLVMPassManagerBuilderRef;
use llvm\LLVMTargetRef;
use llvm\LLVMTargetDataRef;
use llvm\LLVMTargetMachineRef;
use llvm\LLVMTypeRef;
use llvm\LLVMUseRef;
use llvm\LLVMValueRef;

class Factory {

    public LLVM $llvm;

    public function __construct(LLVM $llvm) {
        $this->llvm = $llvm;
    }

    public function attribute(Context $context, LLVMAttributeRef $attribute): Attribute {
        if ($this->llvm->fromBool($this->llvm->lib->LLVMIsEnumAttribute($attribute))) {
            return new Attribute\Enum($this->llvm, $context, $attribute);
        } elseif ($this->llvm->fromBool($this->llvm->lib->LLVMIsStringAttribute($attribute))) {
            return new Attribute\String_($this->llvm, $context, $attribute);
        }
        throw new \LogicException("Unknown attribute type encountered");
    }

    public function basicBlock(Context $context, LLVMBasicBlockRef $block): BasicBlock {
        return new BasicBlock($this->llvm, $context, $block);
    }

    public function builder(Context $context, LLVMBuilderRef $builder): Builder {
        return new Builder($this->llvm, $context, $builder);
    }

    public function context(LLVMContextRef $context): Context {
        return new Context($this->llvm, $context);
    }

    public function executionEngine(Context $context, LLVMExecutionEngineRef $engine): ExecutionEngine {
        return new ExecutionEngine($this->llvm, $context, $engine);
    }

    public function intrinsic(Context $context, Module $module, Builder $builder): Intrinsic {
        return new Intrinsic($this->llvm, $context, $module, $builder);
    }

    public function memoryBuffer(LLVMMemoryBufferRef $buffer): MemoryBuffer {
        return new MemoryBuffer($this->llvm, $buffer);
    }

    public function module(Context $context, LLVMModuleRef $module, string $name): Module {
        return new Module($this->llvm, $context, $module, $name);
    }

    public function passManager(LLVMPassManagerRef $passManager): PassManager {
        return new PassManager($this->llvm, $passManager);
    }

    public function passManagerBuilder(LLVMPassManagerBuilderRef $passManagerBuilder): PassManagerBuilder {
        return new PassManagerBuilder($this->llvm, $passManagerBuilder);
    }

    public function target(LLVMTargetRef $target): Target {
        return new Target($this->llvm, $target);
    }

    public function targetData(LLVMTargetDataRef $data): TargetData {
        return new TargetData($this->llvm, $data);
    }

    public function targetMachine(LLVMTargetMachineRef $machine): TargetMachine {
        return new TargetMachine($this->llvm, $machine);
    }

    public function type(Context $context, LLVMTypeRef $type): Type {
        $kind = $this->llvm->lib->LLVMGetTypeKind($type);
        switch ($kind) {
            case lib::LLVMFunctionTypeKind:
                return new Type\Function_($this->llvm, $context, $type, $kind);
            case lib::LLVMStructTypeKind:
                return new Type\Struct($this->llvm, $context, $type, $kind);
            case lib::LLVMArrayTypeKind:
                return new Type\Array_($this->llvm, $context, $type, $kind);
            case lib::LLVMPointerTypeKind:
                return new Type\Pointer($this->llvm, $context, $type, $kind);
            case lib::LLVMVectorTypeKind:
                return new Type\Vector($this->llvm, $context, $type, $kind);
            default:
                return new Type($this->llvm, $context, $type, $kind);
        }
    }

    public function use(Context $context, LLVMUseRef $use): Use_ {
        return new Use_($this->llvm, $context, $use);
    }

    public function value(Context $context, ?LLVMValueRef $value): ?Value {
        if (is_null($value)) {
            return null;
        }
        $kind = $this->llvm->lib->LLVMGetValueKind($value);
        switch ($kind) {
            case lib::LLVMArgumentValueKind:
                return new Value\Argument($this->llvm, $context, $value, $kind);
            case lib::LLVMBasicBlockValueKind:
                return new Value\BasicBlock($this->llvm, $context, $value, $kind);
            case lib::LLVMFunctionValueKind:
                return new Value\Function_($this->llvm, $context, $value, $kind);
            case lib::LLVMInstructionValueKind:
                return new Value\Instruction($this->llvm, $context, $value, $kind);
            case lib::LLVMGlobalVariableValueKind:
                return new Value\Global_($this->llvm, $context, $value, $kind);
            default:
                return new Value($this->llvm, $context, $value, $kind);
        }
    }
    
}