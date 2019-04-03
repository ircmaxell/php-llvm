<?php

require __DIR__ . '/../vendor/autoload.php';

$llvm = new FFIMe\FFIMe('/usr/lib/llvm-4.0/lib/libLLVM-4.0.so.1', ['/usr/include/llvm-c-4.0/', '/usr/include/llvm-4.0/']);
$llvm->include("llvm-c/Core.h");
$llvm->include("llvm-c/TargetMachine.h");
$llvm->include("llvm-c/ExecutionEngine.h");
$llvm->include("llvm-c/Analysis.h");
$llvm->codegen('llvm4\\llvm', __DIR__ . '/llvm4.php');

$orig = file_get_contents(__DIR__ . '/llvm4.php');
file_put_contents(__DIR__ . '/llvm4.php', $orig . $code);