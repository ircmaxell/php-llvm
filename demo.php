<?php
require __DIR__ . '/vendor/autoload.php';

$llvm = PHPLLVM\Chooser::choose();
$llvm->initializeNative();
$llvm->linkInMCJit();

$context = $llvm->contextCreate();
$builder = $context->builderCreate();
$module = $context->moduleCreateWithName("test");

$functionType = $context->functionType($context->int32Type(), false, $context->int32Type(), $context->int32Type());

$add = $module->addFunction("add", $functionType);
$main = $add->appendBasicBlock('main');

$builder->positionAtEnd($main);
$a = $add->getParam(0);
$b = $add->getParam(1);

$int = $module->intrinsic($builder);
$c = $int->cttz($a, false);

$ret = $builder->add($a, $b);

$builder->returnValue($c);

$module->verify($module::VERIFY_ACTION_THROW, $message);

$engine = $module->createExecutionEngine();

$machine = $engine->getTargetMachine();

$machine->emitToFile($module, __DIR__ . '/test.asm', $machine::CODEGEN_FILE_TYPE_ASM);

$machine->emitToFile($module, __DIR__ . '/test.o', $machine::CODEGEN_FILE_TYPE_OBJECT);

$addr = $engine->getFunctionAddress('add');
$code = FFI::new('size_t');
$code = $addr;
$cb = FFI::new('long(*)(long, long)');
FFI::memcpy(
    FFI::addr($cb),
    FFI::addr($code),
    FFI::sizeof($cb)
);

var_dump($cb(1, 2));

