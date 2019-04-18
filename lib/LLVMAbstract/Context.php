<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Attribute as CoreAttribute;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Intrinsic as CoreIntrinsic;
use PHPLLVM\MemoryBuffer as CoreMemoryBuffer;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Type\Function_ as CoreFunctionType;

use PHPLLVM\Value as CoreValue;

use llvm\llvm as lib;
use llvm\LLVMContextRef;
use llvm\LLVMTypeRef_ptr;
use llvm\LLVMModuleRef;

class Context implements CoreContext {

    public LLVM $llvm;
    public LLVMContextRef $context;

    public function __construct(LLVM $llvm, LLVMContextRef $context) {
        $this->llvm = $llvm;
        $this->context = $context;
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMContextDispose($this->context);
    }

    public function moduleCreateWithName(string $name): CoreModule {
        return $this->llvm->factory->module($this, $this->llvm->lib->LLVMModuleCreateWithNameInContext($name, $this->context), $name);
    }

    public function builderCreate(): CoreBuilder {
        return $this->llvm->factory->builder($this, $this->llvm->lib->LLVMCreateBuilderInContext($this->context));
    }

    public function int1Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMInt1TypeInContext($this->context));
    }

    public function int8Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMInt8TypeInContext($this->context));
    }

    public function int16Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMInt16TypeInContext($this->context));
    }

    public function int32Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMInt32TypeInContext($this->context));
    }

    public function int64Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMInt64TypeInContext($this->context));
    }

    public function int128Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMInt128TypeInContext($this->context));
    }

    public function intType(int $numBits): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMIntTypeInContext($this->context, $numBits));
    }

    public function halfType(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMHalfTypeInContext($this->context));
    }

    public function floatType(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMFloatTypeInContext($this->context));
    }

    public function doubleType(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMDoubleTypeInContext($this->context));
    }

    public function fp80Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMX86FP80TypeInContext($this->context));
    }

    public function fp128Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMFP128TypeInContext($this->context));
    }

    public function ppcfp128Type(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMPPCFP128TypeInContext($this->context));
    }

    public function functionType(CoreType $returnType, bool $isVarArgs, CoreType ... $parameters): CoreFunctionType {
        $paramWrapper = $this->llvm->lib->makeArray(
            LLVMTypeRef_ptr::class,
            array_map(
                function(Type $type) {
                    return $type->type;
                }, 
                $parameters
            )
        );
        return $this->llvm->factory->type(
            $this, 
            $this->llvm->lib->LLVMFunctionType(
                $returnType->type,
                $paramWrapper,
                count($parameters),
                // LLVM is stupid, and even though the type is declared LLVMBool, it's not, and is a normal "1/0" bool instead of the weird reversed...
                $isVarArgs ? 1 : 0
            )
        );
    }

    public function structType(bool $packed, CoreType ... $elements): CoreType {
        $elementWrapper = $this->llvm->lib->makeArray(
            LLVMTypeRef_ptr::class,
            array_map(
                function(Type $type) {
                    return $type->type;
                }, 
                $elements
            )
        );
        return $this->llvm->factory->type(
            $this,
            $this->llvm->lib->LLVMStructTypeInContext(
                $this->context,
                $elementWrapper,
                count($elements),
                $this->llvm->toBool($packed)
            )
        );
    }

    public function namedStructType(string $name): CoreType {
        return $this->llvm->factory->type(
            $this,
            $this->llvm->lib->LLVMStructCreateNamed($this->context, $name)
        );
    }

    public function voidType(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMVoidTypeInContext($this->context));
    }

    public function labelType(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMLabelTypeInContext($this->context));
    }

    public function mmxType(): CoreType {
        return $this->llvm->factory->type($this, $this->llvm->lib->LLVMX86MMXTypeInContext($this->context));
    }

    public function constString(string $string, bool $dontNullTerminate): CoreValue {
        return $this->llvm->factory->value($this, $this->llvm->lib->LLVMConstStringInContext($this->context, $string, strlen($string), $this->llvm->toBool($dontNullTerminate)));
    }

    public function createEnumAttribute(int $kind, int $value): CoreAttribute {
        // Todo: map kind
        return $this->llvm->factory->attribute($this, $this->llvm->lib->LLVMCreateEnumAttribute($this->context, $kind, $value));
    }

    public function createStringAttribute(string $kind, string $value): CoreAttribute {
        // Todo: map kind
        return $this->llvm->factory->attribute($this, $this->llvm->lib->LLVMCreateStringAttribute($this->context, $kind, strlen($kind), $value, strlen($value)));
    }

    public function parseIR(CoreMemoryBuffer $buffer, string &$message): CoreModule {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $module = new LLVMModuleRef($this->lib->getFFI()->new('LLVMModuleRef'));
        if (!$this->fromBool($this->llvm->lib->LLVMParseIRInContext($this->context, $buffer->buffer, $module->addr(), $error))) {
            $message = $error->deref(0);
            $this->disposeMessage($error->deref(0));
            throw new \RuntimeException("Parse IR from Memory Buffer failed due to $message");
        }
        return $this->llvm->factory->module($this, $module);
    }

    public function getEnumAttributeKindForName(string $kind): int {
        return $this->llvm->lib->LLVMGetEnumAttributeKindForName($kind, strlen($kind));
    }


}