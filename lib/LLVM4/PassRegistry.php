<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;
use PHPLLVM\PassRegistry as CorePassRegistry;

use llvm4\LLVMPassRegistryRef;

class PassRegistry extends CorePassRegistry {

    public LLVM $llvm;
    public LLVMPassRegistryRef $passRegistry;

    public function __construct(LLVM $llvm, LLVMPassRegistryRef $passRegistry) {
        $this->llvm = $llvm;
        $this->passRegistry = $passRegistry;
    }

}