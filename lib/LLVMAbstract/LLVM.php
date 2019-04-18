<?php declare(strict_types=1);

namespace PHPLLVM\LLVMAbstract;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\MemoryBuffer as CoreMemoryBuffer;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\Target as CoreTarget;
use PHPLLVM\TargetSet as CoreTargetSet;
use PHPLLVM\PassManager as CorePassManager;
use PHPLLVM\PassManagerBuilder as CorePassManagerBuilder;

use llvm\llvm as lib;
use llvm\LLVMBool;
use llvm\string_ptr;
use llvm\LLVMTargetRef_ptr;
use llvm\LLVMMemoryBufferRef;
use llvm\string_;

abstract class LLVM implements CoreLLVM {

    private array $targetSets = [];
    public Factory $factory;
    public lib $lib;

    public function __construct(Factory $factory, ?string $pathToSoFile = null) {
        $this->factory = $factory;
        $this->lib = new lib($pathToSoFile ?? lib::SOFILE);
        $this->loadTargetSets();
    }

    public function contextCreate(): CoreContext {
        return $this->factory->context($this->lib->LLVMContextCreate());
    }

    public function getGlobalContext(): CoreContext {
        return $this->factory->context($this->lib->LLVMGetGobalContext());
    }

    public function moduleCreateWithName(string $name): CoreModule {
        $module = $this->lib->LLVMModuleCreateWithName($name);
        $context = $this->factory->context($this->lib->LLVMGetModuleContext($module));
        return $this->factory->module($context, $module, $name);
    }

    public function shutdown(): void {
        $this->lib->LLVMShutdown();
    }

    public function createMessage(string $message): string {
        return $this->lib->LLVMCreateMessage($message);
    }

    public function disposeMessage(string_ $message): void {
        // Bypass FFIMe, since we need to send the original pointer
        $this->lib->getFFI()->LLVMDisposeMessage($message->getData());
    }

    public function toBool(bool $value): int {
        // It's reversed... Yay...
        return $value ? 0 : 1;
    }

    public function fromBool(int $bool): bool {
        // It's reversed... Yay...
        return $bool === 0;
    }

    public function fromStringPointer(string_ptr $string): string {
        return FFI::string($string->getData()[0]);
    }

    public function getDefaultTargetTriple(): string {
        return $this->lib->LLVMGetDefaultTargetTriple();
    }

    public function createTargetData(string $rep): CoreTargetData {
        return $this->factory->targetData($this->lib->LLVMCreateTargetData($rep));
    }

    public function getTargetFromName(string $name): CoreTarget {
        return $this->factory->target($this->lib->LLVMGetTargetFromName($name));
    }

    public function getTargetFromTriple(string $triple, string &$errorMessage): CoreTarget {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $target = new LLVMTargetRef($this->lib->getFFI()->new('LLVMTargetRef'));
        $result = $this->lib->LLVMGetTargetFromTriple($triple, $target->addr(), $error);
        if (!$this->fromBool($result)) {
            $errorMessage = $error->deref(0)->toString();
            $this->disposeMessage($error->deref(0));
        }
        return $this->factory->target($target);
    }

    public function linkInMCJit(): void {
        $this->lib->LLVMLinkInMCJIT();
    }

    public function linkInInterpreter(): void {
        $this->lib->LLVMLinkInInterpreter();
    }

    public function startMultithreaded(): bool {
        return $this->fromBool($this->lib->LLVMStartMultithreaded());
    }

    public function stopMultithreaded(): void {
        $this->lib->LLVMStopMultithreaded();
    }

    public function isMultiThreaded(): bool {
        return $this->fromBool($this->lib->LLVMIsMultithreaded());
    }

    public function createPassManager(): CorePassManager {
        return $this->factory->passManager($this->lib->LLVMCreatePassManager());
    }

    public function initializeNative(): void {
        foreach ($this->targetSets as $set) {
            if ($set->isNative()) {
                $set->initialize();
            }
        }
    }

    public function initializeAll(): void {
        foreach ($this->targetSets as $set) {
            $set->initialize();
        }
    }

    public function initialize(string $name): void {
        $lcName = strtolower($name);
        foreach ($this->targetSets as $set) {
            if (strtolower($set->getName()) === $lcName) {
                $set->initialize();
                return;
            }
        }
        throw new \LogicException("Could not find compiler target $name");
    }

    private function loadTargetSets(): void {
        $it = new \GlobIterator(__DIR__ . '/TargetSet/*.php');
        foreach ($it as $file) {
            $target = $file->getBasename('.php');
            $class = __NAMESPACE__ . '\\TargetSet\\' . $target;
            if ($class::isSupported($this)) {
                $this->targetSets[] = new $class($this);
            }
        }
    }

    public function addTargetSet(CoreTargetSet $targetSet) {
        $this->targetSets[] = $targetSet;
    }

    public function createMemoryBufferWithFile(string $path, string &$message): CoreMemoryBuffer {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        $buffer = new LLVMMemoryBufferRef($this->lib->getFFI()->new('LLVMMemoryBufferRef'));
        if (!$this->fromBool($this->lib->LLVMCreateMemoryBufferWithContentsOfFile($path, $buffer->addr(), $error))) {
            $message = $error->deref(0);
            $this->disposeMessage($error->deref(0));
            throw new \RuntimeException("Create memory buffer with file failed due to $message");
        }
        return $this->factory->memoryBuffer($buffer);
    }

    public function createMemoryBufferWithString(string $data, string $name): CoreMemoryBuffer {
        return $this->factory->memoryBuffer($this->lib->LLVMCreateMemoryBufferWithMemoryRangeCopy($data, strlen($data), $name));
    }

    public function createPassManagerBuilder(): CorePassManagerBuilder {
        return $this->factory->passManagerBuilder($this->lib->LLVMPassManagerBuilderCreate());
    }

}