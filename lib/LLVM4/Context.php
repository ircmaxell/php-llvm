<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Attribute as CoreAttribute;
use PHPLLVM\Builder as CoreBuilder;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\MemoryBuffer as CoreMemoryBuffer;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Type\Function_ as CoreFunctionType;

use PHPLLVM\Value as CoreValue;

use llvm4\llvm as lib;
use llvm4\LLVMContextRef;
use llvm4\LLVMTypeRef_ptr;
use llvm4\LLVMModuleRef;

class Context implements CoreContext {

    public LLVM $llvm;
    public LLVMContextRef $context;

    public function __construct(LLVM $llvm, LLVMContextRef $context) {
        $this->llvm = $llvm;
        $this->context = $context;
    }

    public function __destruct() {
        $this->dispose();
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMContextDispose($this->context);
    }

    public function moduleCreateWithName(string $name): CoreModule {
        return new Module($this->llvm, $this, $this->llvm->lib->LLVMModuleCreateWithNameInContext($name, $this->context), $name);
    }

    public function builderCreate(): CoreBuilder {
        return new Builder($this->llvm, $this, $this->llvm->lib->LLVMCreateBuilderInContext($this->context));
    }

    public function int1Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMInt1TypeInContext($this->context));
    }

    public function int8Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMInt8TypeInContext($this->context));
    }

    public function int16Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMInt16TypeInContext($this->context));
    }

    public function int32Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMInt32TypeInContext($this->context));
    }

    public function int64Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMInt64TypeInContext($this->context));
    }

    public function int128Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMInt128TypeInContext($this->context));
    }

    public function intType(int $numBits): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMIntTypeInContext($this->context, $numBits));
    }

    public function halfType(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMHalfTypeInContext($this->context));
    }

    public function floatType(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMFloatTypeInContext($this->context));
    }

    public function doubleType(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMDoubleTypeInContext($this->context));
    }

    public function fp80Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMX86FP80TypeInContext($this->context));
    }

    public function fp128Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMFP128TypeInContext($this->context));
    }

    public function ppcfp128Type(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMPPCFP128TypeInContext($this->context));
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
        return Type::type(
            $this->llvm, 
            $this, 
            $this->llvm->lib->LLVMFunctionType(
                $returnType->type,
                $paramWrapper,
                count($parameters),
                $this->llvm->toBool($isVarArgs)
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
        return Type::type(
            $this->llvm,
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
        return Type::type(
            $this->llvm,
            $this,
            $this->llvm->lib->LLVMStructCreateNamed($this->context, $name)
        );
    }

    public function voidType(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMVoidTypeInContext($this->context));
    }

    public function labelType(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMLabelTypeInContext($this->context));
    }

    public function mmxType(): CoreType {
        return Type::type($this->llvm, $this, $this->llvm->lib->LLVMX86MMXTypeInContext($this->context));
    }

    public function constString(string $string, bool $dontNullTerminate): CoreValue {
        return Value::value($this->llvm, $this, $this->llvm->lib->LLVMConstStringInContext($this->context, $string, strlen($string), $this->llvm->toBool($dontNullTerminate)));
    }

    public function createEnumAttribute(int $kind, int $value): CoreAttribute {
        // Todo: map kind
        return Attribute::attribute($this->llvm, $this, $this->llvm->lib->LLVMCreateEnumAttribute($this->context, $kind, $value));
    }

    public function createStringAttribute(string $kind, string $value): CoreAttribute {
        // Todo: map kind
        return Attribute::attribute($this->llvm, $this, $this->llvm->lib->LLVMCreateStringAttribute($this->context, $kind, strlen($kind), $value, strlen($value)));
    }

    public function parseIR(CoreMemoryBuffer $buffer, string &$message): CoreModule {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $module = new LLVMModuleRef($this->lib->getFFI()->new('LLVMModuleRef'));
        if (!$this->fromBool($this->llvm->lib->LLVMParseIRInContext($this->context, $buffer->buffer, $module->addr(), $error))) {
            $message = $error->deref(0);
            $this->disposeMessage($error->deref(0));
            throw new \RuntimeException("Parse IR from Memory Buffer failed due to $message");
        }
        return new Module($this->llvm, $this, $module);
    }


}