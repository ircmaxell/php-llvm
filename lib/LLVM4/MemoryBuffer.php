<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\Context as CoreContext;
use PHPLLVM\MemoryBuffer as CoreMemoryBuffer;

use llvm4\llvm as lib;
use llvm4\LLVMMemoryBufferRef;
use llvm4\LLVMModuleRef;

class MemoryBuffer implements CoreMemoryBuffer {

    public LLVM $llvm;
    public LLVMMemoryBufferRef $buffer;

    public function __construct(LLVM $llvm, LLVMMemoryManagerRef $buffer) {
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
        return new Module($this->llvm, $context, $mdoule);
    }

    public function getBitcodeModule(CoreContext $context): Module  {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $module = new LLVMModuleRef($this->lib->getFFI()->new('LLVMModuleRef'));
        if (!$this->llvm->fromBool($this->llvm->lib->LLVMGetBitcodeModuleInContext($context->context, $this->buffer, $module->addr(), $error))) {
            $message = $error->deref(0);
            $this->disposeMessage($error->deref(0));
            throw new \RuntimeException("Bitcode module fetch failed due to $message");
        }
        return new Module($this->llvm, $context, $mdoule);
    }
}