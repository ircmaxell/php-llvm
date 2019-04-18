<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\Context as CoreContext;
use PHPLLVM\MemoryBuffer as CoreMemoryBuffer;

use llvm\llvm as lib;
use llvm\LLVMMemoryBufferRef;
use llvm\LLVMModuleRef;

class MemoryBuffer implements CoreMemoryBuffer {

    public LLVM $llvm;
    public LLVMMemoryBufferRef $buffer;

    public function __construct(LLVM $llvm, LLVMMemoryBufferRef $buffer) {
        $this->llvm = $llvm;
        $this->buffer = $buffer;
    }

    public function getStart(): string {
        return $this->llvm->lib->LLVMGetBufferStart($this->buffer)->toString();
    }

    public function getSize(): int {
        return $this->llvm->lib->LLVMGetBufferSisze($this->buffer);
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposeMemoryBuffer($this->buffer);
    }

    public function parseBitcode(CoreContext $context): Module {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $module = new LLVMModuleRef($this->lib->getFFI()->new('LLVMModuleRef'));
        if (!$this->llvm->fromBool($this->llvm->lib->LLVMParseBitcodeInContext($context->context, $this->buffer, $module->addr(), $error))) {
            $message = $error->deref(0);
            $this->disposeMessage($error->deref(0));
            throw new \RuntimeException("Bitcode parsing failed due to $message");
        }
        return $this->llvm->factory->module($context, $mdoule);
    }

    public function getBitcodeModule(CoreContext $context): Module  {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $module = new LLVMModuleRef($this->lib->getFFI()->new('LLVMModuleRef'));
        if (!$this->llvm->fromBool($this->llvm->lib->LLVMGetBitcodeModuleInContext($context->context, $this->buffer, $module->addr(), $error))) {
            $message = $error->deref(0);
            $this->disposeMessage($error->deref(0));
            throw new \RuntimeException("Bitcode module fetch failed due to $message");
        }
        return $this->llvm->factory->module($context, $mdoule);
    }
}