<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;

use llvm4\llvm as lib;
use llvm4\LLVMUseRef;

class Use_ implements CoreUse {
    public LLVM $llvm;
    public Context $context;
    public LLVMUseRef $use;

    public function __construct(LLVM $llvm, Context $context, LLVMValueRef $use) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->use = $use;
    }

    public function getNextUse(): ?CoreUse {
        $use = $this->llvm->lib->LLVMGetNextUse($this->use);
        if ($use === null) {
            return null;
        }
        return new Use_($this->llvm, $this->context, $use);
    }

    public function getUser(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetUser($this->use));
    }

    public function getUsedValue(): CoreValue {
        return Value::value($this->llvm, $this->context, $this->llvm->lib->LLVMGetUsedValue($this->use));
    }

}