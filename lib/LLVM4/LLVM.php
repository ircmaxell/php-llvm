<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;

use llvm4\llvm as lib;
use llvm4\LLVMBool;
use llvm4\string_ptr;

class LLVM implements CoreLLVM {

    public lib $lib;

    public function __construct(?string $pathToSoFile = null) {
        $this->lib = new lib($pathToSoFile ?? lib::SOFILE);
    }

    public function contextCreate(): CoreContext {
        return new Context($this, $this->lib->LLVMContextCreate());
    }

    public function getGlobalContext(): CoreContext {
        return new Context($this, $this->lib->LLVMGetGobalContext());
    }

    public function moduleCreateWithName(string $name): CoreModule {
        $module = $this->lib->LLVMModuleCreateWithName($name);
        $context = new Context($this, $this->lib->LLVMGetModuleContext($module));
        return new Module($this, $context, $module, $name);
    }

    public function shutdown(): void {
        $this->lib->LLVMShutdown();
    }

    public function createMessage(string $message): string {
        return $this->lib->LLVMCreateMessage($message);
    }

    public function disposeMessage(string $message): void {
        $this->lib->LLVMDisposeMessage($message);
    }

    public function toBool(bool $value): LLVMBool {
        $bool = $this->lib->getFFI()->new('LLVMBool');
        $bool = $value ? 1 : 0;
        return new LLVMBool($bool);
    }

    public function fromBool(LLVMBool $bool): bool {
        return ($bool->getData() + 0) === 0;
    }

    public function fromStringPointer(string_ptr $string): string {
        return FFI::string($string->getData()[0]);
    }

}