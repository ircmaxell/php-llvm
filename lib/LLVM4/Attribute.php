<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Attribute as CoreAttribute;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMAttributeRef;

abstract class Attribute implements CoreAttribute {

    public LLVM $llvm;
    public Context $context;
    public LLVMAttributeRef $attribute;

    private function __construct(LLVM $llvm, Context $context, LLVMAttributeRef $attribute) {
        $this->llvm = $llvm;
        $this->context = $context;
        $this->attribute = $attribute;
    }

    public static function attribute(LLVM $llvm, Context $context, LLVMAttributeRef $attribute): Attribute {
        if ($llvm->fromBool($llvm->lib->LLVMIsEnumAttribute($attribute))) {
            return new Attribute\Enum($llvm, $context, $attribute);
        } elseif ($llvm->fromBool($llvm->lib->LLVMIsStringAttribute($attribute))) {
            return new Attribute\String_($llvm, $context, $attribute);
        }
        throw new \LogicException("Unknown attribute type encountered");
    }
}