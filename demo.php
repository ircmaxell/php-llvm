<?php
require __DIR__ . '/vendor/autoload.php';

use PHPLLVM\LLVM4\LLVM;
use PHPLLVM\LLVM4\Type;

$llvm = new LLVM;
$llvm->initializeNative();
$llvm->linkInMCJit();

$context = $llvm->contextCreate();
$builder = $context->builderCreate();
$module = $context->moduleCreateWithName("test");

$functionType = Type::functionType($context->int32Type(), false, $context->int32Type(), $context->int32Type());

$add = $module->addFunction("add", $functionType);
$main = $add->appendBasicBlock('main');

$builder->positionAtEnd($main);
$a = $add->getParam(0);
$b = $add->getParam(1);

$ret = $builder->add($a, $b);

$builder->returnValue($ret);

$module->verify($module::VERIFY_ACTION_THROW, $message);

$engine = $module->createExecutionEngine();

$machine = $engine->getTargetMachine();

$machine->emitToFile($module, __DIR__ . '/test.asm', $machine::CODEGEN_FILE_TYPE_ASM);