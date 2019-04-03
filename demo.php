<?php
require __DIR__ . '/vendor/autoload.php';

use PHPLLVM\LLVM4\LLVM;
use PHPLLVM\LLVM4\Type;

$llvm = new LLVM;


$context = $llvm->contextCreate();
$module = $context->moduleCreateWithName("test");

$functionType = Type::functionType($context->int8Type(), false, $context->int16Type(), $context->int32Type());

echo " return = ", $functionType->getReturnType()->toString(), "\n";

foreach ($functionType->getParameters() as $index => $parameter) {
    echo " param[$index] = ", $parameter->toString(), "\n";
}