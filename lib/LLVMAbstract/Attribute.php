<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Attribute as CoreAttribute;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm\llvm as lib;
use llvm\LLVMAttributeRef;

abstract class Attribute implements CoreAttribute {

    public LLVM $llvm;
    public Context $context;
    public LLVMAttributeRef $attribute;

    public function __construct(LLVM $llvm, Context $context, LLVMAttributeRef $attribute) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->attribute = $attribute;
    }

}