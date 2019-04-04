<?php

require __DIR__ . '/../vendor/autoload.php';

$llvm = new FFIMe\FFIMe('/usr/lib/llvm-4.0/lib/libLLVM-4.0.so.1', ['/usr/include/llvm-c-4.0/', '/usr/include/llvm-4.0/']);
$llvm->include("llvm-c/Core.h");
$llvm->include("llvm-c/Target.h");
$llvm->include("llvm-c/TargetMachine.h");
$llvm->include("llvm-c/ExecutionEngine.h");
$llvm->include("llvm-c/Analysis.h");
$llvm->include("llvm-c/BitReader.h");
$llvm->include("llvm-c/BitWriter.h");
$llvm->include("llvm-c/Disassembler.h");
$llvm->include("llvm-c/IRReader.h");
$llvm->include("llvm-c/Linker.h");
$llvm->include("llvm-c/Object.h");
$llvm->include("llvm-c/Support.h");

$llvm->include("llvm-c/Transforms/PassManagerBuilder.h");
$llvm->include("llvm-c/Transforms/Scalar.h");
$llvm->include("llvm-c/Transforms/IPO.h");
$llvm->include("llvm-c/Transforms/Vectorize.h");

$llvm->codegen('llvm4\\llvm', __DIR__ . '/llvm4.php');

$orig = file_get_contents(__DIR__ . '/llvm4.php');
file_put_contents(__DIR__ . '/llvm4.php', $orig . $code);