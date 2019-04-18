<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;

use llvm\LLVMUseRef;

class Use_ implements CoreUse {
    public LLVM $llvm;
    public Context $context;
    public LLVMUseRef $use;

    public function __construct(LLVM $llvm, Context $context, LLVMUseRef $use) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->use = $use;
    }

    public function getNextUse(): ?CoreUse {
        $use = $this->llvm->lib->LLVMGetNextUse($this->use);
        if ($use === null) {
            return null;
        }
        return $this->llvm->factory->use($this->context, $use);
    }

    public function getUser(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetUser($this->use));
    }

    public function getUsedValue(): CoreValue {
        return $this->llvm->factory->value($this->context, $this->llvm->lib->LLVMGetUsedValue($this->use));
    }

}