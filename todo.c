typedef enum {
  LLVMRet = 1,
  LLVMBr = 2,
  LLVMSwitch = 3,
  LLVMIndirectBr = 4,
  LLVMInvoke = 5,
  LLVMUnreachable = 7,
  LLVMAdd = 8,
  LLVMFAdd = 9,
  LLVMSub = 10,
  LLVMFSub = 11,
  LLVMMul = 12,
  LLVMFMul = 13,
  LLVMUDiv = 14,
  LLVMSDiv = 15,
  LLVMFDiv = 16,
  LLVMURem = 17,
  LLVMSRem = 18,
  LLVMFRem = 19,
  LLVMShl = 20,
  LLVMLShr = 21,
  LLVMAShr = 22,
  LLVMAnd = 23,
  LLVMOr = 24,
  LLVMXor = 25,
  LLVMAlloca = 26,
  LLVMLoad = 27,
  LLVMStore = 28,
  LLVMGetElementPtr = 29,
  LLVMTrunc = 30,
  LLVMZExt = 31,
  LLVMSExt = 32,
  LLVMFPToUI = 33,
  LLVMFPToSI = 34,
  LLVMUIToFP = 35,
  LLVMSIToFP = 36,
  LLVMFPTrunc = 37,
  LLVMFPExt = 38,
  LLVMPtrToInt = 39,
  LLVMIntToPtr = 40,
  LLVMBitCast = 41,
  LLVMAddrSpaceCast = 60,
  LLVMICmp = 42,
  LLVMFCmp = 43,
  LLVMPHI = 44,
  LLVMCall = 45,
  LLVMSelect = 46,
  LLVMUserOp1 = 47,
  LLVMUserOp2 = 48,
  LLVMVAArg = 49,
  LLVMExtractElement = 50,
  LLVMInsertElement = 51,
  LLVMShuffleVector = 52,
  LLVMExtractValue = 53,
  LLVMInsertValue = 54,
  LLVMFence = 55,
  LLVMAtomicCmpXchg = 56,
  LLVMAtomicRMW = 57,
  LLVMResume = 58,
  LLVMLandingPad = 59,
  LLVMCleanupRet = 61,
  LLVMCatchRet = 62,
  LLVMCatchPad = 63,
  LLVMCleanupPad = 64,
  LLVMCatchSwitch = 65,
} LLVMOpcode;

typedef enum {
  LLVMExternalLinkage,
  LLVMAvailableExternallyLinkage,
  LLVMLinkOnceAnyLinkage,
  LLVMLinkOnceODRLinkage,
  LLVMLinkOnceODRAutoHideLinkage,
  LLVMWeakAnyLinkage,
  LLVMWeakODRLinkage,
  LLVMAppendingLinkage,
  LLVMInternalLinkage,
  LLVMPrivateLinkage,
  LLVMDLLImportLinkage,
  LLVMDLLExportLinkage,
  LLVMExternalWeakLinkage,
  LLVMGhostLinkage,
  LLVMCommonLinkage,
  LLVMLinkerPrivateLinkage,
  LLVMLinkerPrivateWeakLinkage,
} LLVMLinkage;
typedef enum {
  LLVMDefaultVisibility,
  LLVMHiddenVisibility,
  LLVMProtectedVisibility,
} LLVMVisibility;
typedef enum {
  LLVMDefaultStorageClass = 0,
  LLVMDLLImportStorageClass = 1,
  LLVMDLLExportStorageClass = 2,
} LLVMDLLStorageClass;
typedef enum {
  LLVMCCallConv = 0,
  LLVMFastCallConv = 8,
  LLVMColdCallConv = 9,
  LLVMWebKitJSCallConv = 12,
  LLVMAnyRegCallConv = 13,
  LLVMX86StdcallCallConv = 64,
  LLVMX86FastcallCallConv = 65,
} LLVMCallConv;
typedef enum {
  LLVMLandingPadCatch,
  LLVMLandingPadFilter,
} LLVMLandingPadClauseTy;
typedef enum {
  LLVMNotThreadLocal = 0,
  LLVMGeneralDynamicTLSModel,
  LLVMLocalDynamicTLSModel,
  LLVMInitialExecTLSModel,
  LLVMLocalExecTLSModel,
} LLVMThreadLocalMode;
typedef enum {
  LLVMAtomicRMWBinOpXchg,
  LLVMAtomicRMWBinOpAdd,
  LLVMAtomicRMWBinOpSub,
  LLVMAtomicRMWBinOpAnd,
  LLVMAtomicRMWBinOpNand,
  LLVMAtomicRMWBinOpOr,
  LLVMAtomicRMWBinOpXor,
  LLVMAtomicRMWBinOpMax,
  LLVMAtomicRMWBinOpMin,
  LLVMAtomicRMWBinOpUMax,
  LLVMAtomicRMWBinOpUMin,
} LLVMAtomicRMWBinOp;
typedef enum {
  LLVMDSError,
  LLVMDSWarning,
  LLVMDSRemark,
  LLVMDSNote,
} LLVMDiagnosticSeverity;

void LLVMInitializeCore(LLVMPassRegistryRef R);

typedef void(*LLVMDiagnosticHandler)(LLVMDiagnosticInfoRef, void *);
typedef void(*LLVMYieldCallback)(LLVMContextRef, void *);

void LLVMContextSetDiagnosticHandler(LLVMContextRef C, LLVMDiagnosticHandler Handler, void *DiagnosticContext);
LLVMDiagnosticHandler LLVMContextGetDiagnosticHandler(LLVMContextRef C);
void * LLVMContextGetDiagnosticContext(LLVMContextRef C);
void LLVMContextSetYieldCallback(LLVMContextRef C, LLVMYieldCallback Callback, void *OpaqueHandle);
char * LLVMGetDiagInfoDescription(LLVMDiagnosticInfoRef DI);
LLVMDiagnosticSeverity LLVMGetDiagInfoSeverity(LLVMDiagnosticInfoRef DI);
unsigned LLVMGetMDKindIDInContext(LLVMContextRef C, char *Name, unsigned SLen);
unsigned LLVMGetMDKindID(char *Name, unsigned SLen);
unsigned LLVMGetLastEnumAttributeKind(void);


unsigned LLVMGetNamedMetadataNumOperands(LLVMModuleRef M, char *Name);
void LLVMGetNamedMetadataOperands(LLVMModuleRef M, char *Name, LLVMValueRef *Dest);
void LLVMAddNamedMetadataOperand(LLVMModuleRef M, char *Name, LLVMValueRef Val);









unsigned long long LLVMConstIntGetZExtValue(LLVMValueRef ConstantVal);
long long LLVMConstIntGetSExtValue(LLVMValueRef ConstantVal);
double LLVMConstRealGetDouble(LLVMValueRef ConstantVal, LLVMBool *losesInfo);
LLVMValueRef LLVMConstStringInContext(LLVMContextRef C, char *Str, unsigned Length, LLVMBool DontNullTerminate);
LLVMValueRef LLVMConstString(char *Str, unsigned Length, LLVMBool DontNullTerminate);
LLVMBool LLVMIsConstantString(LLVMValueRef c);
char * LLVMGetAsString(LLVMValueRef c, size_t *Length);
LLVMValueRef LLVMConstStructInContext(LLVMContextRef C, LLVMValueRef *ConstantVals, unsigned Count, LLVMBool Packed);
LLVMValueRef LLVMConstStruct(LLVMValueRef *ConstantVals, unsigned Count, LLVMBool Packed);
LLVMValueRef LLVMConstArray(LLVMTypeRef ElementTy, LLVMValueRef *ConstantVals, unsigned Length);
LLVMValueRef LLVMConstNamedStruct(LLVMTypeRef StructTy, LLVMValueRef *ConstantVals, unsigned Count);
LLVMValueRef LLVMGetElementAsConstant(LLVMValueRef C, unsigned idx);
LLVMValueRef LLVMConstVector(LLVMValueRef *ScalarConstantVals, unsigned Size);
LLVMOpcode LLVMGetConstOpcode(LLVMValueRef ConstantVal);

LLVMValueRef LLVMConstNeg(LLVMValueRef ConstantVal);
LLVMValueRef LLVMConstNSWNeg(LLVMValueRef ConstantVal);
LLVMValueRef LLVMConstNUWNeg(LLVMValueRef ConstantVal);
LLVMValueRef LLVMConstFNeg(LLVMValueRef ConstantVal);
LLVMValueRef LLVMConstNot(LLVMValueRef ConstantVal);
LLVMValueRef LLVMConstAdd(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstNSWAdd(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstNUWAdd(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstFAdd(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);

LLVMValueRef LLVMConstSub(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstNSWSub(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstNUWSub(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstFSub(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);

LLVMValueRef LLVMConstMul(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstNSWMul(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstNUWMul(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstFMul(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstUDiv(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstExactUDiv(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstSDiv(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstExactSDiv(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);

LLVMValueRef LLVMConstFDiv(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);

LLVMValueRef LLVMConstURem(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstSRem(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstFRem(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);

LLVMValueRef LLVMConstAnd(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstOr(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstXor(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstICmp(LLVMIntPredicate Predicate, LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstFCmp(LLVMRealPredicate Predicate, LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);

LLVMValueRef LLVMConstShl(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstLShr(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);
LLVMValueRef LLVMConstAShr(LLVMValueRef LHSConstant, LLVMValueRef RHSConstant);




LLVMValueRef LLVMConstGEP(LLVMValueRef ConstantVal, LLVMValueRef *ConstantIndices, unsigned NumIndices);
LLVMValueRef LLVMConstInBoundsGEP(LLVMValueRef ConstantVal, LLVMValueRef *ConstantIndices, unsigned NumIndices);




LLVMValueRef LLVMConstTrunc(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstSExt(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstZExt(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstFPTrunc(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstFPExt(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstUIToFP(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstSIToFP(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstFPToUI(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstFPToSI(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstPtrToInt(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstIntToPtr(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstBitCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstAddrSpaceCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstZExtOrBitCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstSExtOrBitCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstTruncOrBitCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstPointerCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstIntCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType, LLVMBool isSigned);
LLVMValueRef LLVMConstFPCast(LLVMValueRef ConstantVal, LLVMTypeRef ToType);
LLVMValueRef LLVMConstSelect(LLVMValueRef ConstantCondition, LLVMValueRef ConstantIfTrue, LLVMValueRef ConstantIfFalse);
LLVMValueRef LLVMConstExtractElement(LLVMValueRef VectorConstant, LLVMValueRef IndexConstant);
LLVMValueRef LLVMConstInsertElement(LLVMValueRef VectorConstant, LLVMValueRef ElementValueConstant, LLVMValueRef IndexConstant);
LLVMValueRef LLVMConstShuffleVector(LLVMValueRef VectorAConstant, LLVMValueRef VectorBConstant, LLVMValueRef MaskConstant);
LLVMValueRef LLVMConstExtractValue(LLVMValueRef AggConstant, unsigned *IdxList, unsigned NumIdx);
LLVMValueRef LLVMConstInsertValue(LLVMValueRef AggConstant, LLVMValueRef ElementValueConstant, unsigned *IdxList, unsigned NumIdx);
LLVMValueRef LLVMConstInlineAsm(LLVMTypeRef Ty, char *AsmString, char *Constraints, LLVMBool HasSideEffects, LLVMBool IsAlignStack);

LLVMModuleRef LLVMGetGlobalParent(LLVMValueRef Global);
LLVMBool LLVMIsDeclaration(LLVMValueRef Global);

LLVMLinkage LLVMGetLinkage(LLVMValueRef Global);
void LLVMSetLinkage(LLVMValueRef Global, LLVMLinkage Linkage);
char * LLVMGetSection(LLVMValueRef Global);
void LLVMSetSection(LLVMValueRef Global, char *Section);
LLVMVisibility LLVMGetVisibility(LLVMValueRef Global);
void LLVMSetVisibility(LLVMValueRef Global, LLVMVisibility Viz);
LLVMDLLStorageClass LLVMGetDLLStorageClass(LLVMValueRef Global);
void LLVMSetDLLStorageClass(LLVMValueRef Global, LLVMDLLStorageClass Class);
LLVMBool LLVMHasUnnamedAddr(LLVMValueRef Global);
void LLVMSetUnnamedAddr(LLVMValueRef Global, LLVMBool HasUnnamedAddr);
unsigned LLVMGetAlignment(LLVMValueRef V);
void LLVMSetAlignment(LLVMValueRef V, unsigned Bytes);

LLVMBool LLVMIsExternallyInitialized(LLVMValueRef GlobalVar);
void LLVMSetExternallyInitialized(LLVMValueRef GlobalVar, LLVMBool IsExtInit);

LLVMValueRef LLVMMDStringInContext(LLVMContextRef C, char *Str, unsigned SLen);
LLVMValueRef LLVMMDString(char *Str, unsigned SLen);
LLVMValueRef LLVMMDNodeInContext(LLVMContextRef C, LLVMValueRef *Vals, unsigned Count);
LLVMValueRef LLVMMDNode(LLVMValueRef *Vals, unsigned Count);
char * LLVMGetMDString(LLVMValueRef V, unsigned *Length);
unsigned LLVMGetMDNodeNumOperands(LLVMValueRef V);
void LLVMGetMDNodeOperands(LLVMValueRef V, LLVMValueRef *Dest);

int LLVMHasMetadata(LLVMValueRef Val);
LLVMValueRef LLVMGetMetadata(LLVMValueRef Val, unsigned KindID);
void LLVMSetMetadata(LLVMValueRef Val, unsigned KindID, LLVMValueRef Node);

void LLVMAddCallSiteAttribute(LLVMValueRef C, LLVMAttributeIndex Idx, LLVMAttributeRef A);
unsigned LLVMGetCallSiteAttributeCount(LLVMValueRef C, LLVMAttributeIndex Idx);
void LLVMGetCallSiteAttributes(LLVMValueRef C, LLVMAttributeIndex Idx, LLVMAttributeRef *Attrs);
LLVMAttributeRef LLVMGetCallSiteEnumAttribute(LLVMValueRef C, LLVMAttributeIndex Idx, unsigned KindID);
LLVMAttributeRef LLVMGetCallSiteStringAttribute(LLVMValueRef C, LLVMAttributeIndex Idx, char *K, unsigned KLen);
void LLVMRemoveCallSiteEnumAttribute(LLVMValueRef C, LLVMAttributeIndex Idx, unsigned KindID);
void LLVMRemoveCallSiteStringAttribute(LLVMValueRef C, LLVMAttributeIndex Idx, char *K, unsigned KLen);
LLVMValueRef LLVMGetCalledValue(LLVMValueRef Instr);
LLVMBool LLVMIsTailCall(LLVMValueRef CallInst);
void LLVMSetTailCall(LLVMValueRef CallInst, LLVMBool IsTailCall);
LLVMBasicBlockRef LLVMGetNormalDest(LLVMValueRef InvokeInst);
LLVMBasicBlockRef LLVMGetUnwindDest(LLVMValueRef InvokeInst);
void LLVMSetNormalDest(LLVMValueRef InvokeInst, LLVMBasicBlockRef B);
void LLVMSetUnwindDest(LLVMValueRef InvokeInst, LLVMBasicBlockRef B);
unsigned LLVMGetNumSuccessors(LLVMValueRef Term);
LLVMBasicBlockRef LLVMGetSuccessor(LLVMValueRef Term, unsigned i);
void LLVMSetSuccessor(LLVMValueRef Term, unsigned i, LLVMBasicBlockRef block);
LLVMBool LLVMIsConditional(LLVMValueRef Branch);
LLVMValueRef LLVMGetCondition(LLVMValueRef Branch);
void LLVMSetCondition(LLVMValueRef Branch, LLVMValueRef Cond);
LLVMBasicBlockRef LLVMGetSwitchDefaultDest(LLVMValueRef SwitchInstr);
LLVMTypeRef LLVMGetAllocatedType(LLVMValueRef Alloca);
LLVMBool LLVMIsInBounds(LLVMValueRef GEP);
void LLVMSetIsInBounds(LLVMValueRef GEP, LLVMBool InBounds);
void LLVMAddIncoming(LLVMValueRef PhiNode, LLVMValueRef *IncomingValues, LLVMBasicBlockRef *IncomingBlocks, unsigned Count);
unsigned LLVMCountIncoming(LLVMValueRef PhiNode);
LLVMValueRef LLVMGetIncomingValue(LLVMValueRef PhiNode, unsigned Index);
LLVMBasicBlockRef LLVMGetIncomingBlock(LLVMValueRef PhiNode, unsigned Index);
unsigned LLVMGetNumIndices(LLVMValueRef Inst);
unsigned * LLVMGetIndices(LLVMValueRef Inst);

LLVMValueRef LLVMBuildInvoke(LLVMBuilderRef, LLVMValueRef Fn, LLVMValueRef *Args, unsigned NumArgs, LLVMBasicBlockRef Then, LLVMBasicBlockRef Catch, char *Name);
LLVMValueRef LLVMBuildLandingPad(LLVMBuilderRef B, LLVMTypeRef Ty, LLVMValueRef PersFn, unsigned NumClauses, char *Name);
LLVMValueRef LLVMBuildResume(LLVMBuilderRef B, LLVMValueRef Exn);
LLVMValueRef LLVMBuildUnreachable(LLVMBuilderRef);
unsigned LLVMGetNumClauses(LLVMValueRef LandingPad);
LLVMValueRef LLVMGetClause(LLVMValueRef LandingPad, unsigned Idx);
void LLVMAddClause(LLVMValueRef LandingPad, LLVMValueRef ClauseVal);
LLVMBool LLVMIsCleanup(LLVMValueRef LandingPad);
void LLVMSetCleanup(LLVMValueRef LandingPad, LLVMBool Val);

LLVMAtomicOrdering LLVMGetOrdering(LLVMValueRef MemoryAccessInst);
void LLVMSetOrdering(LLVMValueRef MemoryAccessInst, LLVMAtomicOrdering Ordering);

LLVMValueRef LLVMBuildFence(LLVMBuilderRef B, LLVMAtomicOrdering ordering, LLVMBool singleThread, char *Name);
LLVMValueRef LLVMBuildAtomicRMW(LLVMBuilderRef B, LLVMAtomicRMWBinOp op, LLVMValueRef PTR, LLVMValueRef Val, LLVMAtomicOrdering ordering, LLVMBool singleThread);
LLVMValueRef LLVMBuildAtomicCmpXchg(LLVMBuilderRef B, LLVMValueRef Ptr, LLVMValueRef Cmp, LLVMValueRef New, LLVMAtomicOrdering SuccessOrdering, LLVMAtomicOrdering FailureOrdering, LLVMBool SingleThread);
LLVMBool LLVMIsAtomicSingleThread(LLVMValueRef AtomicInst);
void LLVMSetAtomicSingleThread(LLVMValueRef AtomicInst, LLVMBool SingleThread);
LLVMAtomicOrdering LLVMGetCmpXchgSuccessOrdering(LLVMValueRef CmpXchgInst);
void LLVMSetCmpXchgSuccessOrdering(LLVMValueRef CmpXchgInst, LLVMAtomicOrdering Ordering);
LLVMAtomicOrdering LLVMGetCmpXchgFailureOrdering(LLVMValueRef CmpXchgInst);
void LLVMSetCmpXchgFailureOrdering(LLVMValueRef CmpXchgInst, LLVMAtomicOrdering Ordering);
LLVMModuleProviderRef LLVMCreateModuleProviderForExistingModule(LLVMModuleRef M);
void LLVMDisposeModuleProvider(LLVMModuleProviderRef M);

LLVMPassRegistryRef LLVMGetGlobalPassRegistry(void);

typedef struct LLVMOpaqueTargetLibraryInfotData * LLVMTargetLibraryInfoRef;


void LLVMAddTargetLibraryInfo(LLVMTargetLibraryInfoRef TLI, LLVMPassManagerRef PM);

typedef enum {
  LLVMCodeGenLevelNone,
  LLVMCodeGenLevelLess,
  LLVMCodeGenLevelDefault,
  LLVMCodeGenLevelAggressive,
} LLVMCodeGenOptLevel;
typedef enum {
  LLVMRelocDefault,
  LLVMRelocStatic,
  LLVMRelocPIC,
  LLVMRelocDynamicNoPic,
} LLVMRelocMode;
typedef enum {
  LLVMCodeModelDefault,
  LLVMCodeModelJITDefault,
  LLVMCodeModelSmall,
  LLVMCodeModelKernel,
  LLVMCodeModelMedium,
  LLVMCodeModelLarge,
} LLVMCodeModel;

LLVMTargetRef LLVMGetFirstTarget(void);
LLVMTargetRef LLVMGetNextTarget(LLVMTargetRef T);
LLVMTargetRef LLVMGetTargetFromName(char *Name);

void LLVMAddAnalysisPasses(LLVMTargetMachineRef T, LLVMPassManagerRef PM);
typedef struct LLVMOpaqueGenericValue * LLVMGenericValueRef;
typedef struct LLVMOpaqueMCJITMemoryManager * LLVMMCJITMemoryManagerRef;
struct LLVMMCJITCompilerOptions {
  unsigned OptLevel;
  LLVMCodeModel CodeModel;
  LLVMBool NoFramePointerElim;
  LLVMBool EnableFastISel;
  LLVMMCJITMemoryManagerRef MCJMM;
};
LLVMGenericValueRef LLVMCreateGenericValueOfInt(LLVMTypeRef Ty, unsigned long long N, LLVMBool IsSigned);
LLVMGenericValueRef LLVMCreateGenericValueOfPointer(void *P);
LLVMGenericValueRef LLVMCreateGenericValueOfFloat(LLVMTypeRef Ty, double N);
unsigned LLVMGenericValueIntWidth(LLVMGenericValueRef GenValRef);
unsigned long long LLVMGenericValueToInt(LLVMGenericValueRef GenVal, LLVMBool IsSigned);
void * LLVMGenericValueToPointer(LLVMGenericValueRef GenVal);
double LLVMGenericValueToFloat(LLVMTypeRef TyRef, LLVMGenericValueRef GenVal);
void LLVMDisposeGenericValue(LLVMGenericValueRef GenVal);
void LLVMInitializeMCJITCompilerOptions(struct LLVMMCJITCompilerOptions *Options, size_t SizeOfOptions);
LLVMBool LLVMCreateMCJITCompilerForModule(LLVMExecutionEngineRef *OutJIT, LLVMModuleRef M, struct LLVMMCJITCompilerOptions *Options, size_t SizeOfOptions, char **OutError);
int LLVMRunFunctionAsMain(LLVMExecutionEngineRef EE, LLVMValueRef F, unsigned ArgC, char **ArgV, char **EnvP);
LLVMGenericValueRef LLVMRunFunction(LLVMExecutionEngineRef EE, LLVMValueRef F, unsigned NumArgs, LLVMGenericValueRef *Args);

LLVMBool LLVMRemoveModule(LLVMExecutionEngineRef EE, LLVMModuleRef M, LLVMModuleRef *OutMod, char **OutError);
LLVMBool LLVMFindFunction(LLVMExecutionEngineRef EE, char *Name, LLVMValueRef *OutFn);
void * LLVMRecompileAndRelinkFunction(LLVMExecutionEngineRef EE, LLVMValueRef Fn);

void LLVMAddGlobalMapping(LLVMExecutionEngineRef EE, LLVMValueRef Global, void *Addr);
typedef uint8_t *(*LLVMMemoryManagerAllocateCodeSectionCallback)(void *Opaque, uintptr_t Size, unsigned Alignment, unsigned SectionID, char *SectionName);
typedef uint8_t *(*LLVMMemoryManagerAllocateDataSectionCallback)(void *Opaque, uintptr_t Size, unsigned Alignment, unsigned SectionID, char *SectionName, LLVMBool IsReadOnly);
typedef LLVMBool(*LLVMMemoryManagerFinalizeMemoryCallback)(void *Opaque, char **ErrMsg);
typedef void(*LLVMMemoryManagerDestroyCallback)(void *Opaque);
LLVMMCJITMemoryManagerRef LLVMCreateSimpleMCJITMemoryManager(void *Opaque, LLVMMemoryManagerAllocateCodeSectionCallback AllocateCodeSection, LLVMMemoryManagerAllocateDataSectionCallback AllocateDataSection, LLVMMemoryManagerFinalizeMemoryCallback FinalizeMemory, LLVMMemoryManagerDestroyCallback Destroy);
void LLVMDisposeMCJITMemoryManager(LLVMMCJITMemoryManagerRef MM);
typedef enum {
  LLVMAbortProcessAction,
  LLVMPrintMessageAction,
  LLVMReturnStatusAction,
} LLVMVerifierFailureAction;

LLVMBool LLVMVerifyFunction(LLVMValueRef Fn, LLVMVerifierFailureAction Action);

typedef void * LLVMDisasmContextRef;
typedef int(*LLVMOpInfoCallback)(void *DisInfo, uint64_t PC, uint64_t Offset, uint64_t Size, int TagType, void *TagBuf);
struct LLVMOpInfoSymbol1 {
  uint64_t Present;
  char *Name;
  uint64_t Value;
};
struct LLVMOpInfo1 {
  struct LLVMOpInfoSymbol1 AddSymbol;
  struct LLVMOpInfoSymbol1 SubtractSymbol;
  uint64_t Value;
  uint64_t VariantKind;
};
typedef char *(*LLVMSymbolLookupCallback)(void *DisInfo, uint64_t ReferenceValue, uint64_t *ReferenceType, uint64_t ReferencePC, char **ReferenceName);
LLVMDisasmContextRef LLVMCreateDisasm(char *TripleName, void *DisInfo, int TagType, LLVMOpInfoCallback GetOpInfo, LLVMSymbolLookupCallback SymbolLookUp);
LLVMDisasmContextRef LLVMCreateDisasmCPU(char *Triple, char *CPU, void *DisInfo, int TagType, LLVMOpInfoCallback GetOpInfo, LLVMSymbolLookupCallback SymbolLookUp);
LLVMDisasmContextRef LLVMCreateDisasmCPUFeatures(char *Triple, char *CPU, char *Features, void *DisInfo, int TagType, LLVMOpInfoCallback GetOpInfo, LLVMSymbolLookupCallback SymbolLookUp);
int LLVMSetDisasmOptions(LLVMDisasmContextRef DC, uint64_t Options);
void LLVMDisasmDispose(LLVMDisasmContextRef DC);
size_t LLVMDisasmInstruction(LLVMDisasmContextRef DC, uint8_t *Bytes, uint64_t BytesSize, uint64_t PC, char *OutString, size_t OutStringSize);
LLVMBool LLVMParseIRInContext(LLVMContextRef ContextRef, LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutM, char **OutMessage);
typedef enum {
  LLVMLinkerDestroySource = 0,
  LLVMLinkerPreserveSource_Removed = 1,
} LLVMLinkerMode;
LLVMBool LLVMLinkModules2(LLVMModuleRef Dest, LLVMModuleRef Src);
typedef struct LLVMOpaqueObjectFile * LLVMObjectFileRef;
typedef struct LLVMOpaqueSectionIterator * LLVMSectionIteratorRef;
typedef struct LLVMOpaqueSymbolIterator * LLVMSymbolIteratorRef;
typedef struct LLVMOpaqueRelocationIterator * LLVMRelocationIteratorRef;
LLVMObjectFileRef LLVMCreateObjectFile(LLVMMemoryBufferRef MemBuf);
void LLVMDisposeObjectFile(LLVMObjectFileRef ObjectFile);
LLVMSectionIteratorRef LLVMGetSections(LLVMObjectFileRef ObjectFile);
void LLVMDisposeSectionIterator(LLVMSectionIteratorRef SI);
LLVMBool LLVMIsSectionIteratorAtEnd(LLVMObjectFileRef ObjectFile, LLVMSectionIteratorRef SI);
void LLVMMoveToNextSection(LLVMSectionIteratorRef SI);
void LLVMMoveToContainingSection(LLVMSectionIteratorRef Sect, LLVMSymbolIteratorRef Sym);
LLVMSymbolIteratorRef LLVMGetSymbols(LLVMObjectFileRef ObjectFile);
void LLVMDisposeSymbolIterator(LLVMSymbolIteratorRef SI);
LLVMBool LLVMIsSymbolIteratorAtEnd(LLVMObjectFileRef ObjectFile, LLVMSymbolIteratorRef SI);
void LLVMMoveToNextSymbol(LLVMSymbolIteratorRef SI);
char * LLVMGetSectionName(LLVMSectionIteratorRef SI);
uint64_t LLVMGetSectionSize(LLVMSectionIteratorRef SI);
char * LLVMGetSectionContents(LLVMSectionIteratorRef SI);
uint64_t LLVMGetSectionAddress(LLVMSectionIteratorRef SI);
LLVMBool LLVMGetSectionContainsSymbol(LLVMSectionIteratorRef SI, LLVMSymbolIteratorRef Sym);
LLVMRelocationIteratorRef LLVMGetRelocations(LLVMSectionIteratorRef Section);
void LLVMDisposeRelocationIterator(LLVMRelocationIteratorRef RI);
LLVMBool LLVMIsRelocationIteratorAtEnd(LLVMSectionIteratorRef Section, LLVMRelocationIteratorRef RI);
void LLVMMoveToNextRelocation(LLVMRelocationIteratorRef RI);
char * LLVMGetSymbolName(LLVMSymbolIteratorRef SI);
uint64_t LLVMGetSymbolAddress(LLVMSymbolIteratorRef SI);
uint64_t LLVMGetSymbolSize(LLVMSymbolIteratorRef SI);
uint64_t LLVMGetRelocationOffset(LLVMRelocationIteratorRef RI);
LLVMSymbolIteratorRef LLVMGetRelocationSymbol(LLVMRelocationIteratorRef RI);
uint64_t LLVMGetRelocationType(LLVMRelocationIteratorRef RI);
char * LLVMGetRelocationTypeName(LLVMRelocationIteratorRef RI);
char * LLVMGetRelocationValueString(LLVMRelocationIteratorRef RI);
LLVMBool LLVMLoadLibraryPermanently(char *Filename);
void LLVMParseCommandLineOptions(int argc, char **argv, char *Overview);
void * LLVMSearchForAddressOfSymbol(char *symbolName);
void LLVMAddSymbol(char *symbolName, void *symbolValue);


void LLVMAddAggressiveDCEPass(LLVMPassManagerRef PM);
void LLVMAddBitTrackingDCEPass(LLVMPassManagerRef PM);
void LLVMAddAlignmentFromAssumptionsPass(LLVMPassManagerRef PM);
void LLVMAddCFGSimplificationPass(LLVMPassManagerRef PM);
void LLVMAddDeadStoreEliminationPass(LLVMPassManagerRef PM);
void LLVMAddScalarizerPass(LLVMPassManagerRef PM);
void LLVMAddMergedLoadStoreMotionPass(LLVMPassManagerRef PM);
void LLVMAddGVNPass(LLVMPassManagerRef PM);
void LLVMAddNewGVNPass(LLVMPassManagerRef PM);
void LLVMAddIndVarSimplifyPass(LLVMPassManagerRef PM);
void LLVMAddInstructionCombiningPass(LLVMPassManagerRef PM);
void LLVMAddJumpThreadingPass(LLVMPassManagerRef PM);
void LLVMAddLICMPass(LLVMPassManagerRef PM);
void LLVMAddLoopDeletionPass(LLVMPassManagerRef PM);
void LLVMAddLoopIdiomPass(LLVMPassManagerRef PM);
void LLVMAddLoopRotatePass(LLVMPassManagerRef PM);
void LLVMAddLoopRerollPass(LLVMPassManagerRef PM);
void LLVMAddLoopUnrollPass(LLVMPassManagerRef PM);
void LLVMAddLoopUnswitchPass(LLVMPassManagerRef PM);
void LLVMAddMemCpyOptPass(LLVMPassManagerRef PM);
void LLVMAddPartiallyInlineLibCallsPass(LLVMPassManagerRef PM);
void LLVMAddLowerSwitchPass(LLVMPassManagerRef PM);
void LLVMAddPromoteMemoryToRegisterPass(LLVMPassManagerRef PM);
void LLVMAddReassociatePass(LLVMPassManagerRef PM);
void LLVMAddSCCPPass(LLVMPassManagerRef PM);
void LLVMAddScalarReplAggregatesPass(LLVMPassManagerRef PM);
void LLVMAddScalarReplAggregatesPassSSA(LLVMPassManagerRef PM);
void LLVMAddScalarReplAggregatesPassWithThreshold(LLVMPassManagerRef PM, int Threshold);
void LLVMAddSimplifyLibCallsPass(LLVMPassManagerRef PM);
void LLVMAddTailCallEliminationPass(LLVMPassManagerRef PM);
void LLVMAddConstantPropagationPass(LLVMPassManagerRef PM);
void LLVMAddDemoteMemoryToRegisterPass(LLVMPassManagerRef PM);
void LLVMAddVerifierPass(LLVMPassManagerRef PM);
void LLVMAddCorrelatedValuePropagationPass(LLVMPassManagerRef PM);
void LLVMAddEarlyCSEPass(LLVMPassManagerRef PM);
void LLVMAddEarlyCSEMemSSAPass(LLVMPassManagerRef PM);
void LLVMAddLowerExpectIntrinsicPass(LLVMPassManagerRef PM);
void LLVMAddTypeBasedAliasAnalysisPass(LLVMPassManagerRef PM);
void LLVMAddScopedNoAliasAAPass(LLVMPassManagerRef PM);
void LLVMAddBasicAliasAnalysisPass(LLVMPassManagerRef PM);
void LLVMAddArgumentPromotionPass(LLVMPassManagerRef PM);
void LLVMAddConstantMergePass(LLVMPassManagerRef PM);
void LLVMAddDeadArgEliminationPass(LLVMPassManagerRef PM);
void LLVMAddFunctionAttrsPass(LLVMPassManagerRef PM);
void LLVMAddFunctionInliningPass(LLVMPassManagerRef PM);
void LLVMAddAlwaysInlinerPass(LLVMPassManagerRef PM);
void LLVMAddGlobalDCEPass(LLVMPassManagerRef PM);
void LLVMAddGlobalOptimizerPass(LLVMPassManagerRef PM);
void LLVMAddIPConstantPropagationPass(LLVMPassManagerRef PM);
void LLVMAddPruneEHPass(LLVMPassManagerRef PM);
void LLVMAddIPSCCPPass(LLVMPassManagerRef PM);
void LLVMAddInternalizePass(LLVMPassManagerRef, unsigned AllButMain);
void LLVMAddStripDeadPrototypesPass(LLVMPassManagerRef PM);
void LLVMAddStripSymbolsPass(LLVMPassManagerRef PM);
void LLVMAddBBVectorizePass(LLVMPassManagerRef PM);
void LLVMAddLoopVectorizePass(LLVMPassManagerRef PM);
void LLVMAddSLPVectorizePass(LLVMPassManagerRef PM);