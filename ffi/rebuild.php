<?php

require __DIR__ . '/../vendor/autoload.php';

$llvm = new FFIMe\FFIMe('/usr/lib/llvm-4.0/lib/libLLVM-4.0.so.1', ['/usr/include/llvm-c-4.0/', '/usr/include/llvm-4.0/']);
$llvm->include("llvm-c/Core.h");
$llvm->include("llvm-c/TargetMachine.h");
$llvm->include("llvm-c/ExecutionEngine.h");
$llvm->include("llvm-c/Analysis.h");
$llvm->codegen('llvm4\\llvm', __DIR__ . '/llvm4.php');

$code = '
class string_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(string_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): string_ptr_ptr { return new string_ptr_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return \'char**\'; }
}
class uint64_t implements illvm {
    private FFI\CData $data;
    public function __construct($data) { $tmp = FFI::new(\'unsigned long long\'); $tmp = $data; $this->data = $tmp; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint64_t $other): bool { return $this->data == $other->data; }
    public function addr(): uint64_t_ptr { return new uint64_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return \'uint64_t\'; }
}
';

$orig = file_get_contents(__DIR__ . '/llvm4.php');
file_put_contents(__DIR__ . '/llvm4.php', $orig . $code);