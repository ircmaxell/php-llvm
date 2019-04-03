<?php declare(strict_types=1);

namespace PHPLLVM\LLVM4;

use PHPLLVM\LLVM as CoreLLVM;
use PHPLLVM\Context as CoreContext;
use PHPLLVM\Module as CoreModule;
use PHPLLVM\Type as CoreType;
use PHPLLVM\Value as CoreValue;
use PHPLLVM\Use_ as CoreUse;
use PHPLLVM\Target as CoreTarget;
use PHPLLVM\TargetData as CoreTargetData;
use PHPLLVM\TargetMachine as CoreTargetMachine;

use llvm4\llvm as lib;
use llvm4\LLVMTargetMachineRef;
use llvm4\string_ptr;
use FFI;

class TargetMachine implements CoreTargetMachine {

    public LLVM $llvm;
    public LLVMTargetMachineRef $machine;

    public function __construct(LLVM $llvm, LLVMTargetMachineRef $machine) {
        $this->llvm = $llvm;
        $this->machine = $machine;
    }

    public function dispose(): void {
        $this->llvm->lib->LLVMDisposeTargetMachine($this->machine);
    }

    public function getTarget(): CoreTarget {
        return new Target($this->llvm, $this->llvm->lib->LLVMGetTargetMachineTarget($this->machine));
    }

    public function getTriple(): string {
        return $this->llvm->lib->LLVMGetTargetMachineTriple($this->machine)->toString();
    }

    public function getCPU(): string {
        return $this->llvm->lib->LLVMGetTargetMachineCPU($this->machine)->toString();
    }

    public function getFeatureString(): string {
        return $this->llvm->lib->LLVMGetTargetMachineFeatureString($this->machine)->toString();
    }

    public function createTargetDataLayout(): CoreTargetData {
        return new TargetData($this->llvm, $this->llvm->lib->LLVMCreateTargetDataLayout($this->machine));
    }

    public function setAsmVerbosity(bool $verboseAsm): void {
        $this->llvm->lib->LLVMSetTargetMachineAsmVerbosity($this->machine, $this->toBool($verboseAsm));
    }

    public function emitToFile(CoreModule $module, string $filename, int $codeGenType): bool {
        $error = new string_ptr(FFI::addr(FFI::new('char*')));
        switch ($codeGenType) {
            case self::CODEGEN_FILE_TYPE_ASM:
                $codeGen = lib::LLVMAssemblyFile;
                break;
            case self::CODEGEN_FILE_TYPE_OBJECT:
                $codeGen = lib::LLVMObjectFile;
                break;
            default: 
                throw new \LogicException("Unknown code gen type: $codeGenType");
        }
        $bool = $this->llvm->fromBool($this->llvm->lib->LLVMTargetMachineEmitToFile($this->machine, $module->module, $filename, $codeGen, $error));
        if (!$bool) {
            $errorMessage = $error->deref(0)->toString();
            $this->llvm->disposeMessage($error->deref(0));
            throw new \RuntimeException("Emit to file failed due to: $errorMessage");
        }
        return $bool;
    }
}