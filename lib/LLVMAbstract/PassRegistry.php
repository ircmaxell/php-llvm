<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;
use PHPLLVM\PassRegistry as CorePassRegistry;

use llvm\LLVMPassRegistryRef;

class PassRegistry extends CorePassRegistry {

    public LLVM $llvm;
    public LLVMPassRegistryRef $passRegistry;

    public function __construct(LLVM $llvm, LLVMPassRegistryRef $passRegistry) {
        $this->llvm = $llvm;
        $this->passRegistry = $passRegistry;
    }

}