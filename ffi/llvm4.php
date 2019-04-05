<?php namespace llvm4;
use FFI;
interface illvm {}
class llvm {
    const SOFILE = '/usr/lib/llvm-4.0/lib/libLLVM-4.0.so.1';
    const HEADER_DEF = 'typedef void(*LLVMFatalErrorHandler)(char *Reason);
void LLVMInstallFatalErrorHandler(LLVMFatalErrorHandler Handler);
void LLVMResetFatalErrorHandler(void);
void LLVMEnablePrettyStackTrace(void);
typedef float float_t;
typedef double double_t;
extern double acos(double __x);
extern double asin(double __x);
extern double atan(double __x);
extern double atan2(double __y, double __x);
extern double cos(double __x);
extern double sin(double __x);
extern double tan(double __x);
extern double cosh(double __x);
extern double sinh(double __x);
extern double tanh(double __x);
extern double acosh(double __x);
extern double asinh(double __x);
extern double atanh(double __x);
extern double exp(double __x);
extern double frexp(double __x, int *__exponent);
extern double ldexp(double __x, int __exponent);
extern double log(double __x);
extern double log10(double __x);
extern double modf(double __x, double *__iptr);
extern double expm1(double __x);
extern double log1p(double __x);
extern double logb(double __x);
extern double exp2(double __x);
extern double log2(double __x);
extern double pow(double __x, double __y);
extern double sqrt(double __x);
extern double hypot(double __x, double __y);
extern double cbrt(double __x);
extern double ceil(double __x);
extern double fabs(double __x);
extern double floor(double __x);
extern double fmod(double __x, double __y);
extern int isinf(double __value);
extern int finite(double __value);
extern double drem(double __x, double __y);
extern double significand(double __x);
extern double copysign(double __x, double __y);
extern double nan(char *__tagb);
extern int isnan(double __value);
extern double j0(double);
extern double j1(double);
extern double jn(int, double);
extern double y0(double);
extern double y1(double);
extern double yn(int, double);
extern double erf(double);
extern double erfc(double);
extern double lgamma(double);
extern double tgamma(double);
extern double gamma(double);
extern double lgamma_r(double, int *__signgamp);
extern double rint(double __x);
extern double nextafter(double __x, double __y);
extern double nexttoward(double __x, long double __y);
extern double remainder(double __x, double __y);
extern double scalbn(double __x, int __n);
extern int ilogb(double __x);
extern double scalbln(double __x, long int __n);
extern double nearbyint(double __x);
extern double round(double __x);
extern double trunc(double __x);
extern double remquo(double __x, double __y, int *__quo);
extern long int lrint(double __x);
extern long long int llrint(double __x);
extern long int lround(double __x);
extern long long int llround(double __x);
extern double fdim(double __x, double __y);
extern double fmax(double __x, double __y);
extern double fmin(double __x, double __y);
extern double fma(double __x, double __y, double __z);
extern double scalb(double __x, double __n);
extern float acosf(float __x);
extern float asinf(float __x);
extern float atanf(float __x);
extern float atan2f(float __y, float __x);
extern float cosf(float __x);
extern float sinf(float __x);
extern float tanf(float __x);
extern float coshf(float __x);
extern float sinhf(float __x);
extern float tanhf(float __x);
extern float acoshf(float __x);
extern float asinhf(float __x);
extern float atanhf(float __x);
extern float expf(float __x);
extern float frexpf(float __x, int *__exponent);
extern float ldexpf(float __x, int __exponent);
extern float logf(float __x);
extern float log10f(float __x);
extern float modff(float __x, float *__iptr);
extern float expm1f(float __x);
extern float log1pf(float __x);
extern float logbf(float __x);
extern float exp2f(float __x);
extern float log2f(float __x);
extern float powf(float __x, float __y);
extern float sqrtf(float __x);
extern float hypotf(float __x, float __y);
extern float cbrtf(float __x);
extern float ceilf(float __x);
extern float fabsf(float __x);
extern float floorf(float __x);
extern float fmodf(float __x, float __y);
extern int isinff(float __value);
extern int finitef(float __value);
extern float dremf(float __x, float __y);
extern float significandf(float __x);
extern float copysignf(float __x, float __y);
extern float nanf(char *__tagb);
extern int isnanf(float __value);
extern float j0f(float);
extern float j1f(float);
extern float jnf(int, float);
extern float y0f(float);
extern float y1f(float);
extern float ynf(int, float);
extern float erff(float);
extern float erfcf(float);
extern float lgammaf(float);
extern float tgammaf(float);
extern float gammaf(float);
extern float lgammaf_r(float, int *__signgamp);
extern float rintf(float __x);
extern float nextafterf(float __x, float __y);
extern float nexttowardf(float __x, long double __y);
extern float remainderf(float __x, float __y);
extern float scalbnf(float __x, int __n);
extern int ilogbf(float __x);
extern float scalblnf(float __x, long int __n);
extern float nearbyintf(float __x);
extern float roundf(float __x);
extern float truncf(float __x);
extern float remquof(float __x, float __y, int *__quo);
extern long int lrintf(float __x);
extern long long int llrintf(float __x);
extern long int lroundf(float __x);
extern long long int llroundf(float __x);
extern float fdimf(float __x, float __y);
extern float fmaxf(float __x, float __y);
extern float fminf(float __x, float __y);
extern float fmaf(float __x, float __y, float __z);
extern float scalbf(float __x, float __n);
extern long double acosl(long double __x);
extern long double asinl(long double __x);
extern long double atanl(long double __x);
extern long double atan2l(long double __y, long double __x);
extern long double cosl(long double __x);
extern long double sinl(long double __x);
extern long double tanl(long double __x);
extern long double coshl(long double __x);
extern long double sinhl(long double __x);
extern long double tanhl(long double __x);
extern long double acoshl(long double __x);
extern long double asinhl(long double __x);
extern long double atanhl(long double __x);
extern long double expl(long double __x);
extern long double frexpl(long double __x, int *__exponent);
extern long double ldexpl(long double __x, int __exponent);
extern long double logl(long double __x);
extern long double log10l(long double __x);
extern long double modfl(long double __x, long double *__iptr);
extern long double expm1l(long double __x);
extern long double log1pl(long double __x);
extern long double logbl(long double __x);
extern long double exp2l(long double __x);
extern long double log2l(long double __x);
extern long double powl(long double __x, long double __y);
extern long double sqrtl(long double __x);
extern long double hypotl(long double __x, long double __y);
extern long double cbrtl(long double __x);
extern long double ceill(long double __x);
extern long double fabsl(long double __x);
extern long double floorl(long double __x);
extern long double fmodl(long double __x, long double __y);
extern int isinfl(long double __value);
extern int finitel(long double __value);
extern long double dreml(long double __x, long double __y);
extern long double significandl(long double __x);
extern long double copysignl(long double __x, long double __y);
extern long double nanl(char *__tagb);
extern int isnanl(long double __value);
extern long double j0l(long double);
extern long double j1l(long double);
extern long double jnl(int, long double);
extern long double y0l(long double);
extern long double y1l(long double);
extern long double ynl(int, long double);
extern long double erfl(long double);
extern long double erfcl(long double);
extern long double lgammal(long double);
extern long double tgammal(long double);
extern long double gammal(long double);
extern long double lgammal_r(long double, int *__signgamp);
extern long double rintl(long double __x);
extern long double nextafterl(long double __x, long double __y);
extern long double nexttowardl(long double __x, long double __y);
extern long double remainderl(long double __x, long double __y);
extern long double scalbnl(long double __x, int __n);
extern int ilogbl(long double __x);
extern long double scalblnl(long double __x, long int __n);
extern long double nearbyintl(long double __x);
extern long double roundl(long double __x);
extern long double truncl(long double __x);
extern long double remquol(long double __x, long double __y, int *__quo);
extern long int lrintl(long double __x);
extern long long int llrintl(long double __x);
extern long int lroundl(long double __x);
extern long long int llroundl(long double __x);
extern long double fdiml(long double __x, long double __y);
extern long double fmaxl(long double __x, long double __y);
extern long double fminl(long double __x, long double __y);
extern long double fmal(long double __x, long double __y, long double __z);
extern long double scalbl(long double __x, long double __n);
extern int signgam;
enum {
  FP_NAN = 0,
  FP_INFINITE = 1,
  FP_ZERO = 2,
  FP_SUBNORMAL = 3,
  FP_NORMAL = 4,
};
typedef enum {
  _IEEE_ = (- 1),
  _SVID_,
  _XOPEN_,
  _POSIX_,
  _ISOC_,
} _LIB_VERSION_TYPE;
extern _LIB_VERSION_TYPE _LIB_VERSION;
struct exception {
  int type;
  char *name;
  double arg1;
  double arg2;
  double retval;
};
extern int matherr(struct exception *__exc);
typedef signed char int_least8_t;
typedef short int int_least16_t;
typedef int int_least32_t;
typedef long int int_least64_t;
typedef unsigned char uint_least8_t;
typedef unsigned short int uint_least16_t;
typedef unsigned int uint_least32_t;
typedef unsigned long int uint_least64_t;
typedef signed char int_fast8_t;
typedef long int int_fast16_t;
typedef long int int_fast32_t;
typedef long int int_fast64_t;
typedef unsigned char uint_fast8_t;
typedef unsigned long int uint_fast16_t;
typedef unsigned long int uint_fast32_t;
typedef unsigned long int uint_fast64_t;
typedef long int intmax_t;
typedef unsigned long int uintmax_t;
typedef int wchar_t;
typedef wchar_t __gwchar_t;
typedef struct {
  long int quot;
  long int rem;
} imaxdiv_t;
extern intmax_t imaxabs(intmax_t __n);
extern imaxdiv_t imaxdiv(intmax_t __numer, intmax_t __denom);
extern intmax_t strtoimax(char *__nptr, char **__endptr, int __base);
extern uintmax_t strtoumax(char *__nptr, char **__endptr, int __base);
extern intmax_t wcstoimax(__gwchar_t *__nptr, __gwchar_t **__endptr, int __base);
extern uintmax_t wcstoumax(__gwchar_t *__nptr, __gwchar_t **__endptr, int __base);
typedef unsigned char __u_char;
typedef unsigned short int __u_short;
typedef unsigned int __u_int;
typedef unsigned long int __u_long;
typedef signed char __int8_t;
typedef unsigned char __uint8_t;
typedef signed short int __int16_t;
typedef unsigned short int __uint16_t;
typedef signed int __int32_t;
typedef unsigned int __uint32_t;
typedef signed long int __int64_t;
typedef unsigned long int __uint64_t;
typedef long int __quad_t;
typedef unsigned long int __u_quad_t;
typedef unsigned long int __dev_t;
typedef unsigned int __uid_t;
typedef unsigned int __gid_t;
typedef unsigned long int __ino_t;
typedef unsigned long int __ino64_t;
typedef unsigned int __mode_t;
typedef unsigned long int __nlink_t;
typedef long int __off_t;
typedef long int __off64_t;
typedef int __pid_t;
typedef struct {
  int __val[2];
} __fsid_t;
typedef long int __clock_t;
typedef unsigned long int __rlim_t;
typedef unsigned long int __rlim64_t;
typedef unsigned int __id_t;
typedef long int __time_t;
typedef unsigned int __useconds_t;
typedef long int __suseconds_t;
typedef int __daddr_t;
typedef int __key_t;
typedef int __clockid_t;
typedef void * __timer_t;
typedef long int __blksize_t;
typedef long int __blkcnt_t;
typedef long int __blkcnt64_t;
typedef unsigned long int __fsblkcnt_t;
typedef unsigned long int __fsblkcnt64_t;
typedef unsigned long int __fsfilcnt_t;
typedef unsigned long int __fsfilcnt64_t;
typedef long int __fsword_t;
typedef long int __ssize_t;
typedef long int __syscall_slong_t;
typedef unsigned long int __syscall_ulong_t;
typedef __off64_t __loff_t;
typedef __quad_t * __qaddr_t;
typedef char * __caddr_t;
typedef long int __intptr_t;
typedef unsigned int __socklen_t;
typedef __u_char u_char;
typedef __u_short u_short;
typedef __u_int u_int;
typedef __u_long u_long;
typedef __quad_t quad_t;
typedef __u_quad_t u_quad_t;
typedef __fsid_t fsid_t;
typedef __loff_t loff_t;
typedef __ino_t ino_t;
typedef __dev_t dev_t;
typedef __gid_t gid_t;
typedef __mode_t mode_t;
typedef __nlink_t nlink_t;
typedef __uid_t uid_t;
typedef __pid_t pid_t;
typedef __id_t id_t;
typedef __daddr_t daddr_t;
typedef __caddr_t caddr_t;
typedef __key_t key_t;
struct timeval {
  __time_t tv_sec;
  __suseconds_t tv_usec;
};
typedef int __sig_atomic_t;
typedef struct {
  unsigned long int __val[(1024 / (8 * (sizeof (unsigned long int))))];
} __sigset_t;
typedef __sigset_t sigset_t;
typedef __suseconds_t suseconds_t;
typedef long int __fd_mask;
typedef struct {
  __fd_mask __fds_bits[(1024 / (8 * ((int)(sizeof (__fd_mask)))))];
} fd_set;
typedef __fd_mask fd_mask;
extern int select(int __nfds, fd_set *__readfds, fd_set *__writefds, fd_set *__exceptfds, struct timeval *__timeout);
extern int pselect(int __nfds, fd_set *__readfds, fd_set *__writefds, fd_set *__exceptfds, struct timespec *__timeout, __sigset_t *__sigmask);
struct timezone {
  int tz_minuteswest;
  int tz_dsttime;
};
typedef struct timezone * __timezone_ptr_t;
extern int gettimeofday(struct timeval *__tv, __timezone_ptr_t __tz);
extern int settimeofday(struct timeval *__tv, struct timezone *__tz);
extern int adjtime(struct timeval *__delta, struct timeval *__olddelta);
enum __itimer_which {
  ITIMER_REAL = 0,
  ITIMER_VIRTUAL = 1,
  ITIMER_PROF = 2,
};
struct itimerval {
  struct timeval it_interval;
  struct timeval it_value;
};
typedef int __itimer_which_t;
extern int getitimer(__itimer_which_t __which, struct itimerval *__value);
extern int setitimer(__itimer_which_t __which, struct itimerval *__new, struct itimerval *__old);
extern int utimes(char *__file, struct timeval __tvp[2]);
extern int lutimes(char *__file, struct timeval __tvp[2]);
extern int futimes(int __fd, struct timeval __tvp[2]);
typedef unsigned long int ulong;
typedef unsigned short int ushort;
typedef unsigned int uint;
typedef unsigned char u_int8_t;
typedef unsigned short int u_int16_t;
typedef unsigned int u_int32_t;
typedef unsigned long int u_int64_t;
typedef int register_t;
extern unsigned int gnu_dev_major(unsigned long long int __dev);
extern unsigned int gnu_dev_minor(unsigned long long int __dev);
extern unsigned long long int gnu_dev_makedev(unsigned int __major, unsigned int __minor);
typedef __blksize_t blksize_t;
typedef __blkcnt_t blkcnt_t;
typedef __fsblkcnt_t fsblkcnt_t;
typedef __fsfilcnt_t fsfilcnt_t;
typedef unsigned long int pthread_t;
union pthread_attr_t {
  char __size[56];
  long int __align;
};
typedef union pthread_attr_t pthread_attr_t;
typedef struct __pthread_internal_list {
  struct __pthread_internal_list *__prev;
  struct __pthread_internal_list *__next;
} __pthread_list_t;
typedef union {
  struct __pthread_mutex_s {
    int __lock;
    unsigned int __count;
    int __owner;
    unsigned int __nusers;
    int __kind;
    short __spins;
    short __elision;
    __pthread_list_t __list;
  } __data;
  char __size[40];
  long int __align;
} pthread_mutex_t;
typedef union {
  char __size[4];
  int __align;
} pthread_mutexattr_t;
typedef union {
  struct {
    int __lock;
    unsigned int __futex;
    unsigned long long int __total_seq;
    unsigned long long int __wakeup_seq;
    unsigned long long int __woken_seq;
    void *__mutex;
    unsigned int __nwaiters;
    unsigned int __broadcast_seq;
  } __data;
  char __size[48];
  long long int __align;
} pthread_cond_t;
typedef union {
  char __size[4];
  int __align;
} pthread_condattr_t;
typedef unsigned int pthread_key_t;
typedef int pthread_once_t;
typedef union {
  struct {
    int __lock;
    unsigned int __nr_readers;
    unsigned int __readers_wakeup;
    unsigned int __writer_wakeup;
    unsigned int __nr_readers_queued;
    unsigned int __nr_writers_queued;
    int __writer;
    int __shared;
    signed char __rwelision;
    unsigned char __pad1[7];
    unsigned long int __pad2;
    unsigned int __flags;
  } __data;
  char __size[56];
  long int __align;
} pthread_rwlock_t;
typedef union {
  char __size[8];
  long int __align;
} pthread_rwlockattr_t;
typedef int pthread_spinlock_t;
typedef union {
  char __size[32];
  long int __align;
} pthread_barrier_t;
typedef union {
  char __size[4];
  int __align;
} pthread_barrierattr_t;
typedef int LLVMBool;
typedef struct LLVMOpaqueMemoryBuffer * LLVMMemoryBufferRef;
typedef struct LLVMOpaqueContext * LLVMContextRef;
typedef struct LLVMOpaqueModule * LLVMModuleRef;
typedef struct LLVMOpaqueType * LLVMTypeRef;
typedef struct LLVMOpaqueValue * LLVMValueRef;
typedef struct LLVMOpaqueBasicBlock * LLVMBasicBlockRef;
typedef struct LLVMOpaqueBuilder * LLVMBuilderRef;
typedef struct LLVMOpaqueModuleProvider * LLVMModuleProviderRef;
typedef struct LLVMOpaquePassManager * LLVMPassManagerRef;
typedef struct LLVMOpaquePassRegistry * LLVMPassRegistryRef;
typedef struct LLVMOpaqueUse * LLVMUseRef;
typedef struct LLVMOpaqueAttributeRef * LLVMAttributeRef;
typedef struct LLVMOpaqueDiagnosticInfo * LLVMDiagnosticInfoRef;
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
  LLVMVoidTypeKind,
  LLVMHalfTypeKind,
  LLVMFloatTypeKind,
  LLVMDoubleTypeKind,
  LLVMX86_FP80TypeKind,
  LLVMFP128TypeKind,
  LLVMPPC_FP128TypeKind,
  LLVMLabelTypeKind,
  LLVMIntegerTypeKind,
  LLVMFunctionTypeKind,
  LLVMStructTypeKind,
  LLVMArrayTypeKind,
  LLVMPointerTypeKind,
  LLVMVectorTypeKind,
  LLVMMetadataTypeKind,
  LLVMX86_MMXTypeKind,
  LLVMTokenTypeKind,
} LLVMTypeKind;
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
  LLVMArgumentValueKind,
  LLVMBasicBlockValueKind,
  LLVMMemoryUseValueKind,
  LLVMMemoryDefValueKind,
  LLVMMemoryPhiValueKind,
  LLVMFunctionValueKind,
  LLVMGlobalAliasValueKind,
  LLVMGlobalIFuncValueKind,
  LLVMGlobalVariableValueKind,
  LLVMBlockAddressValueKind,
  LLVMConstantExprValueKind,
  LLVMConstantArrayValueKind,
  LLVMConstantStructValueKind,
  LLVMConstantVectorValueKind,
  LLVMUndefValueValueKind,
  LLVMConstantAggregateZeroValueKind,
  LLVMConstantDataArrayValueKind,
  LLVMConstantDataVectorValueKind,
  LLVMConstantIntValueKind,
  LLVMConstantFPValueKind,
  LLVMConstantPointerNullValueKind,
  LLVMConstantTokenNoneValueKind,
  LLVMMetadataAsValueValueKind,
  LLVMInlineAsmValueKind,
  LLVMInstructionValueKind,
} LLVMValueKind;
typedef enum {
  LLVMIntEQ = 32,
  LLVMIntNE,
  LLVMIntUGT,
  LLVMIntUGE,
  LLVMIntULT,
  LLVMIntULE,
  LLVMIntSGT,
  LLVMIntSGE,
  LLVMIntSLT,
  LLVMIntSLE,
} LLVMIntPredicate;
typedef enum {
  LLVMRealPredicateFalse,
  LLVMRealOEQ,
  LLVMRealOGT,
  LLVMRealOGE,
  LLVMRealOLT,
  LLVMRealOLE,
  LLVMRealONE,
  LLVMRealORD,
  LLVMRealUNO,
  LLVMRealUEQ,
  LLVMRealUGT,
  LLVMRealUGE,
  LLVMRealULT,
  LLVMRealULE,
  LLVMRealUNE,
  LLVMRealPredicateTrue,
} LLVMRealPredicate;
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
  LLVMAtomicOrderingNotAtomic = 0,
  LLVMAtomicOrderingUnordered = 1,
  LLVMAtomicOrderingMonotonic = 2,
  LLVMAtomicOrderingAcquire = 4,
  LLVMAtomicOrderingRelease = 5,
  LLVMAtomicOrderingAcquireRelease = 6,
  LLVMAtomicOrderingSequentiallyConsistent = 7,
} LLVMAtomicOrdering;
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
enum {
  LLVMAttributeReturnIndex = 0U,
  LLVMAttributeFunctionIndex = (- 1),
};
typedef unsigned LLVMAttributeIndex;
void LLVMInitializeCore(LLVMPassRegistryRef R);
void LLVMShutdown(void);
char * LLVMCreateMessage(char *Message);
void LLVMDisposeMessage(char *Message);
typedef void(*LLVMDiagnosticHandler)(LLVMDiagnosticInfoRef, void *);
typedef void(*LLVMYieldCallback)(LLVMContextRef, void *);
LLVMContextRef LLVMContextCreate(void);
LLVMContextRef LLVMGetGlobalContext(void);
void LLVMContextSetDiagnosticHandler(LLVMContextRef C, LLVMDiagnosticHandler Handler, void *DiagnosticContext);
LLVMDiagnosticHandler LLVMContextGetDiagnosticHandler(LLVMContextRef C);
void * LLVMContextGetDiagnosticContext(LLVMContextRef C);
void LLVMContextSetYieldCallback(LLVMContextRef C, LLVMYieldCallback Callback, void *OpaqueHandle);
void LLVMContextDispose(LLVMContextRef C);
char * LLVMGetDiagInfoDescription(LLVMDiagnosticInfoRef DI);
LLVMDiagnosticSeverity LLVMGetDiagInfoSeverity(LLVMDiagnosticInfoRef DI);
unsigned LLVMGetMDKindIDInContext(LLVMContextRef C, char *Name, unsigned SLen);
unsigned LLVMGetMDKindID(char *Name, unsigned SLen);
unsigned LLVMGetEnumAttributeKindForName(char *Name, size_t SLen);
unsigned LLVMGetLastEnumAttributeKind(void);
LLVMAttributeRef LLVMCreateEnumAttribute(LLVMContextRef C, unsigned KindID, uint64_t Val);
unsigned LLVMGetEnumAttributeKind(LLVMAttributeRef A);
uint64_t LLVMGetEnumAttributeValue(LLVMAttributeRef A);
LLVMAttributeRef LLVMCreateStringAttribute(LLVMContextRef C, char *K, unsigned KLength, char *V, unsigned VLength);
char * LLVMGetStringAttributeKind(LLVMAttributeRef A, unsigned *Length);
char * LLVMGetStringAttributeValue(LLVMAttributeRef A, unsigned *Length);
LLVMBool LLVMIsEnumAttribute(LLVMAttributeRef A);
LLVMBool LLVMIsStringAttribute(LLVMAttributeRef A);
LLVMModuleRef LLVMModuleCreateWithName(char *ModuleID);
LLVMModuleRef LLVMModuleCreateWithNameInContext(char *ModuleID, LLVMContextRef C);
LLVMModuleRef LLVMCloneModule(LLVMModuleRef M);
void LLVMDisposeModule(LLVMModuleRef M);
char * LLVMGetModuleIdentifier(LLVMModuleRef M, size_t *Len);
void LLVMSetModuleIdentifier(LLVMModuleRef M, char *Ident, size_t Len);
char * LLVMGetDataLayoutStr(LLVMModuleRef M);
char * LLVMGetDataLayout(LLVMModuleRef M);
void LLVMSetDataLayout(LLVMModuleRef M, char *DataLayoutStr);
char * LLVMGetTarget(LLVMModuleRef M);
void LLVMSetTarget(LLVMModuleRef M, char *Triple);
void LLVMDumpModule(LLVMModuleRef M);
LLVMBool LLVMPrintModuleToFile(LLVMModuleRef M, char *Filename, char **ErrorMessage);
char * LLVMPrintModuleToString(LLVMModuleRef M);
void LLVMSetModuleInlineAsm(LLVMModuleRef M, char *Asm);
LLVMContextRef LLVMGetModuleContext(LLVMModuleRef M);
LLVMTypeRef LLVMGetTypeByName(LLVMModuleRef M, char *Name);
unsigned LLVMGetNamedMetadataNumOperands(LLVMModuleRef M, char *Name);
void LLVMGetNamedMetadataOperands(LLVMModuleRef M, char *Name, LLVMValueRef *Dest);
void LLVMAddNamedMetadataOperand(LLVMModuleRef M, char *Name, LLVMValueRef Val);
LLVMValueRef LLVMAddFunction(LLVMModuleRef M, char *Name, LLVMTypeRef FunctionTy);
LLVMValueRef LLVMGetNamedFunction(LLVMModuleRef M, char *Name);
LLVMValueRef LLVMGetFirstFunction(LLVMModuleRef M);
LLVMValueRef LLVMGetLastFunction(LLVMModuleRef M);
LLVMValueRef LLVMGetNextFunction(LLVMValueRef Fn);
LLVMValueRef LLVMGetPreviousFunction(LLVMValueRef Fn);
LLVMTypeKind LLVMGetTypeKind(LLVMTypeRef Ty);
LLVMBool LLVMTypeIsSized(LLVMTypeRef Ty);
LLVMContextRef LLVMGetTypeContext(LLVMTypeRef Ty);
void LLVMDumpType(LLVMTypeRef Val);
char * LLVMPrintTypeToString(LLVMTypeRef Val);
LLVMTypeRef LLVMInt1TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMInt8TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMInt16TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMInt32TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMInt64TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMInt128TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMIntTypeInContext(LLVMContextRef C, unsigned NumBits);
LLVMTypeRef LLVMInt1Type(void);
LLVMTypeRef LLVMInt8Type(void);
LLVMTypeRef LLVMInt16Type(void);
LLVMTypeRef LLVMInt32Type(void);
LLVMTypeRef LLVMInt64Type(void);
LLVMTypeRef LLVMInt128Type(void);
LLVMTypeRef LLVMIntType(unsigned NumBits);
unsigned LLVMGetIntTypeWidth(LLVMTypeRef IntegerTy);
LLVMTypeRef LLVMHalfTypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMFloatTypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMDoubleTypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMX86FP80TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMFP128TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMPPCFP128TypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMHalfType(void);
LLVMTypeRef LLVMFloatType(void);
LLVMTypeRef LLVMDoubleType(void);
LLVMTypeRef LLVMX86FP80Type(void);
LLVMTypeRef LLVMFP128Type(void);
LLVMTypeRef LLVMPPCFP128Type(void);
LLVMTypeRef LLVMFunctionType(LLVMTypeRef ReturnType, LLVMTypeRef *ParamTypes, unsigned ParamCount, LLVMBool IsVarArg);
LLVMBool LLVMIsFunctionVarArg(LLVMTypeRef FunctionTy);
LLVMTypeRef LLVMGetReturnType(LLVMTypeRef FunctionTy);
unsigned LLVMCountParamTypes(LLVMTypeRef FunctionTy);
void LLVMGetParamTypes(LLVMTypeRef FunctionTy, LLVMTypeRef *Dest);
LLVMTypeRef LLVMStructTypeInContext(LLVMContextRef C, LLVMTypeRef *ElementTypes, unsigned ElementCount, LLVMBool Packed);
LLVMTypeRef LLVMStructType(LLVMTypeRef *ElementTypes, unsigned ElementCount, LLVMBool Packed);
LLVMTypeRef LLVMStructCreateNamed(LLVMContextRef C, char *Name);
char * LLVMGetStructName(LLVMTypeRef Ty);
void LLVMStructSetBody(LLVMTypeRef StructTy, LLVMTypeRef *ElementTypes, unsigned ElementCount, LLVMBool Packed);
unsigned LLVMCountStructElementTypes(LLVMTypeRef StructTy);
void LLVMGetStructElementTypes(LLVMTypeRef StructTy, LLVMTypeRef *Dest);
LLVMTypeRef LLVMStructGetTypeAtIndex(LLVMTypeRef StructTy, unsigned i);
LLVMBool LLVMIsPackedStruct(LLVMTypeRef StructTy);
LLVMBool LLVMIsOpaqueStruct(LLVMTypeRef StructTy);
LLVMTypeRef LLVMGetElementType(LLVMTypeRef Ty);
LLVMTypeRef LLVMArrayType(LLVMTypeRef ElementType, unsigned ElementCount);
unsigned LLVMGetArrayLength(LLVMTypeRef ArrayTy);
LLVMTypeRef LLVMPointerType(LLVMTypeRef ElementType, unsigned AddressSpace);
unsigned LLVMGetPointerAddressSpace(LLVMTypeRef PointerTy);
LLVMTypeRef LLVMVectorType(LLVMTypeRef ElementType, unsigned ElementCount);
unsigned LLVMGetVectorSize(LLVMTypeRef VectorTy);
LLVMTypeRef LLVMVoidTypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMLabelTypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMX86MMXTypeInContext(LLVMContextRef C);
LLVMTypeRef LLVMVoidType(void);
LLVMTypeRef LLVMLabelType(void);
LLVMTypeRef LLVMX86MMXType(void);
LLVMTypeRef LLVMTypeOf(LLVMValueRef Val);
LLVMValueKind LLVMGetValueKind(LLVMValueRef Val);
char * LLVMGetValueName(LLVMValueRef Val);
void LLVMSetValueName(LLVMValueRef Val, char *Name);
void LLVMDumpValue(LLVMValueRef Val);
char * LLVMPrintValueToString(LLVMValueRef Val);
void LLVMReplaceAllUsesWith(LLVMValueRef OldVal, LLVMValueRef NewVal);
LLVMBool LLVMIsConstant(LLVMValueRef Val);
LLVMBool LLVMIsUndef(LLVMValueRef Val);
LLVMValueRef LLVMIsAArgument(LLVMValueRef Val);
LLVMValueRef LLVMIsABasicBlock(LLVMValueRef Val);
LLVMValueRef LLVMIsAInlineAsm(LLVMValueRef Val);
LLVMValueRef LLVMIsAUser(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstant(LLVMValueRef Val);
LLVMValueRef LLVMIsABlockAddress(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantAggregateZero(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantArray(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantDataSequential(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantDataArray(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantDataVector(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantExpr(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantFP(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantInt(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantPointerNull(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantStruct(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantTokenNone(LLVMValueRef Val);
LLVMValueRef LLVMIsAConstantVector(LLVMValueRef Val);
LLVMValueRef LLVMIsAGlobalValue(LLVMValueRef Val);
LLVMValueRef LLVMIsAGlobalAlias(LLVMValueRef Val);
LLVMValueRef LLVMIsAGlobalObject(LLVMValueRef Val);
LLVMValueRef LLVMIsAFunction(LLVMValueRef Val);
LLVMValueRef LLVMIsAGlobalVariable(LLVMValueRef Val);
LLVMValueRef LLVMIsAUndefValue(LLVMValueRef Val);
LLVMValueRef LLVMIsAInstruction(LLVMValueRef Val);
LLVMValueRef LLVMIsABinaryOperator(LLVMValueRef Val);
LLVMValueRef LLVMIsACallInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAIntrinsicInst(LLVMValueRef Val);
LLVMValueRef LLVMIsADbgInfoIntrinsic(LLVMValueRef Val);
LLVMValueRef LLVMIsADbgDeclareInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAMemIntrinsic(LLVMValueRef Val);
LLVMValueRef LLVMIsAMemCpyInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAMemMoveInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAMemSetInst(LLVMValueRef Val);
LLVMValueRef LLVMIsACmpInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAFCmpInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAICmpInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAExtractElementInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAGetElementPtrInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAInsertElementInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAInsertValueInst(LLVMValueRef Val);
LLVMValueRef LLVMIsALandingPadInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAPHINode(LLVMValueRef Val);
LLVMValueRef LLVMIsASelectInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAShuffleVectorInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAStoreInst(LLVMValueRef Val);
LLVMValueRef LLVMIsATerminatorInst(LLVMValueRef Val);
LLVMValueRef LLVMIsABranchInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAIndirectBrInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAInvokeInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAReturnInst(LLVMValueRef Val);
LLVMValueRef LLVMIsASwitchInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAUnreachableInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAResumeInst(LLVMValueRef Val);
LLVMValueRef LLVMIsACleanupReturnInst(LLVMValueRef Val);
LLVMValueRef LLVMIsACatchReturnInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAFuncletPadInst(LLVMValueRef Val);
LLVMValueRef LLVMIsACatchPadInst(LLVMValueRef Val);
LLVMValueRef LLVMIsACleanupPadInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAUnaryInstruction(LLVMValueRef Val);
LLVMValueRef LLVMIsAAllocaInst(LLVMValueRef Val);
LLVMValueRef LLVMIsACastInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAAddrSpaceCastInst(LLVMValueRef Val);
LLVMValueRef LLVMIsABitCastInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAFPExtInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAFPToSIInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAFPToUIInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAFPTruncInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAIntToPtrInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAPtrToIntInst(LLVMValueRef Val);
LLVMValueRef LLVMIsASExtInst(LLVMValueRef Val);
LLVMValueRef LLVMIsASIToFPInst(LLVMValueRef Val);
LLVMValueRef LLVMIsATruncInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAUIToFPInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAZExtInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAExtractValueInst(LLVMValueRef Val);
LLVMValueRef LLVMIsALoadInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAVAArgInst(LLVMValueRef Val);
LLVMValueRef LLVMIsAMDNode(LLVMValueRef Val);
LLVMValueRef LLVMIsAMDString(LLVMValueRef Val);
LLVMUseRef LLVMGetFirstUse(LLVMValueRef Val);
LLVMUseRef LLVMGetNextUse(LLVMUseRef U);
LLVMValueRef LLVMGetUser(LLVMUseRef U);
LLVMValueRef LLVMGetUsedValue(LLVMUseRef U);
LLVMValueRef LLVMGetOperand(LLVMValueRef Val, unsigned Index);
LLVMUseRef LLVMGetOperandUse(LLVMValueRef Val, unsigned Index);
void LLVMSetOperand(LLVMValueRef User, unsigned Index, LLVMValueRef Val);
int LLVMGetNumOperands(LLVMValueRef Val);
LLVMValueRef LLVMConstNull(LLVMTypeRef Ty);
LLVMValueRef LLVMConstAllOnes(LLVMTypeRef Ty);
LLVMValueRef LLVMGetUndef(LLVMTypeRef Ty);
LLVMBool LLVMIsNull(LLVMValueRef Val);
LLVMValueRef LLVMConstPointerNull(LLVMTypeRef Ty);
LLVMValueRef LLVMConstInt(LLVMTypeRef IntTy, unsigned long long N, LLVMBool SignExtend);
LLVMValueRef LLVMConstIntOfArbitraryPrecision(LLVMTypeRef IntTy, unsigned NumWords, uint64_t Words[]);
LLVMValueRef LLVMConstIntOfString(LLVMTypeRef IntTy, char *Text, uint8_t Radix);
LLVMValueRef LLVMConstIntOfStringAndSize(LLVMTypeRef IntTy, char *Text, unsigned SLen, uint8_t Radix);
LLVMValueRef LLVMConstReal(LLVMTypeRef RealTy, double N);
LLVMValueRef LLVMConstRealOfString(LLVMTypeRef RealTy, char *Text);
LLVMValueRef LLVMConstRealOfStringAndSize(LLVMTypeRef RealTy, char *Text, unsigned SLen);
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
LLVMValueRef LLVMAlignOf(LLVMTypeRef Ty);
LLVMValueRef LLVMSizeOf(LLVMTypeRef Ty);
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
LLVMValueRef LLVMBlockAddress(LLVMValueRef F, LLVMBasicBlockRef BB);
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
LLVMValueRef LLVMAddGlobal(LLVMModuleRef M, LLVMTypeRef Ty, char *Name);
LLVMValueRef LLVMAddGlobalInAddressSpace(LLVMModuleRef M, LLVMTypeRef Ty, char *Name, unsigned AddressSpace);
LLVMValueRef LLVMGetNamedGlobal(LLVMModuleRef M, char *Name);
LLVMValueRef LLVMGetFirstGlobal(LLVMModuleRef M);
LLVMValueRef LLVMGetLastGlobal(LLVMModuleRef M);
LLVMValueRef LLVMGetNextGlobal(LLVMValueRef GlobalVar);
LLVMValueRef LLVMGetPreviousGlobal(LLVMValueRef GlobalVar);
void LLVMDeleteGlobal(LLVMValueRef GlobalVar);
LLVMValueRef LLVMGetInitializer(LLVMValueRef GlobalVar);
void LLVMSetInitializer(LLVMValueRef GlobalVar, LLVMValueRef ConstantVal);
LLVMBool LLVMIsThreadLocal(LLVMValueRef GlobalVar);
void LLVMSetThreadLocal(LLVMValueRef GlobalVar, LLVMBool IsThreadLocal);
LLVMBool LLVMIsGlobalConstant(LLVMValueRef GlobalVar);
void LLVMSetGlobalConstant(LLVMValueRef GlobalVar, LLVMBool IsConstant);
LLVMThreadLocalMode LLVMGetThreadLocalMode(LLVMValueRef GlobalVar);
void LLVMSetThreadLocalMode(LLVMValueRef GlobalVar, LLVMThreadLocalMode Mode);
LLVMBool LLVMIsExternallyInitialized(LLVMValueRef GlobalVar);
void LLVMSetExternallyInitialized(LLVMValueRef GlobalVar, LLVMBool IsExtInit);
LLVMValueRef LLVMAddAlias(LLVMModuleRef M, LLVMTypeRef Ty, LLVMValueRef Aliasee, char *Name);
void LLVMDeleteFunction(LLVMValueRef Fn);
LLVMBool LLVMHasPersonalityFn(LLVMValueRef Fn);
LLVMValueRef LLVMGetPersonalityFn(LLVMValueRef Fn);
void LLVMSetPersonalityFn(LLVMValueRef Fn, LLVMValueRef PersonalityFn);
unsigned LLVMGetIntrinsicID(LLVMValueRef Fn);
unsigned LLVMGetFunctionCallConv(LLVMValueRef Fn);
void LLVMSetFunctionCallConv(LLVMValueRef Fn, unsigned CC);
char * LLVMGetGC(LLVMValueRef Fn);
void LLVMSetGC(LLVMValueRef Fn, char *Name);
void LLVMAddAttributeAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx, LLVMAttributeRef A);
unsigned LLVMGetAttributeCountAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx);
void LLVMGetAttributesAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx, LLVMAttributeRef *Attrs);
LLVMAttributeRef LLVMGetEnumAttributeAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx, unsigned KindID);
LLVMAttributeRef LLVMGetStringAttributeAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx, char *K, unsigned KLen);
void LLVMRemoveEnumAttributeAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx, unsigned KindID);
void LLVMRemoveStringAttributeAtIndex(LLVMValueRef F, LLVMAttributeIndex Idx, char *K, unsigned KLen);
void LLVMAddTargetDependentFunctionAttr(LLVMValueRef Fn, char *A, char *V);
unsigned LLVMCountParams(LLVMValueRef Fn);
void LLVMGetParams(LLVMValueRef Fn, LLVMValueRef *Params);
LLVMValueRef LLVMGetParam(LLVMValueRef Fn, unsigned Index);
LLVMValueRef LLVMGetParamParent(LLVMValueRef Inst);
LLVMValueRef LLVMGetFirstParam(LLVMValueRef Fn);
LLVMValueRef LLVMGetLastParam(LLVMValueRef Fn);
LLVMValueRef LLVMGetNextParam(LLVMValueRef Arg);
LLVMValueRef LLVMGetPreviousParam(LLVMValueRef Arg);
void LLVMSetParamAlignment(LLVMValueRef Arg, unsigned Align);
LLVMValueRef LLVMMDStringInContext(LLVMContextRef C, char *Str, unsigned SLen);
LLVMValueRef LLVMMDString(char *Str, unsigned SLen);
LLVMValueRef LLVMMDNodeInContext(LLVMContextRef C, LLVMValueRef *Vals, unsigned Count);
LLVMValueRef LLVMMDNode(LLVMValueRef *Vals, unsigned Count);
char * LLVMGetMDString(LLVMValueRef V, unsigned *Length);
unsigned LLVMGetMDNodeNumOperands(LLVMValueRef V);
void LLVMGetMDNodeOperands(LLVMValueRef V, LLVMValueRef *Dest);
LLVMValueRef LLVMBasicBlockAsValue(LLVMBasicBlockRef BB);
LLVMBool LLVMValueIsBasicBlock(LLVMValueRef Val);
LLVMBasicBlockRef LLVMValueAsBasicBlock(LLVMValueRef Val);
char * LLVMGetBasicBlockName(LLVMBasicBlockRef BB);
LLVMValueRef LLVMGetBasicBlockParent(LLVMBasicBlockRef BB);
LLVMValueRef LLVMGetBasicBlockTerminator(LLVMBasicBlockRef BB);
unsigned LLVMCountBasicBlocks(LLVMValueRef Fn);
void LLVMGetBasicBlocks(LLVMValueRef Fn, LLVMBasicBlockRef *BasicBlocks);
LLVMBasicBlockRef LLVMGetFirstBasicBlock(LLVMValueRef Fn);
LLVMBasicBlockRef LLVMGetLastBasicBlock(LLVMValueRef Fn);
LLVMBasicBlockRef LLVMGetNextBasicBlock(LLVMBasicBlockRef BB);
LLVMBasicBlockRef LLVMGetPreviousBasicBlock(LLVMBasicBlockRef BB);
LLVMBasicBlockRef LLVMGetEntryBasicBlock(LLVMValueRef Fn);
LLVMBasicBlockRef LLVMAppendBasicBlockInContext(LLVMContextRef C, LLVMValueRef Fn, char *Name);
LLVMBasicBlockRef LLVMAppendBasicBlock(LLVMValueRef Fn, char *Name);
LLVMBasicBlockRef LLVMInsertBasicBlockInContext(LLVMContextRef C, LLVMBasicBlockRef BB, char *Name);
LLVMBasicBlockRef LLVMInsertBasicBlock(LLVMBasicBlockRef InsertBeforeBB, char *Name);
void LLVMDeleteBasicBlock(LLVMBasicBlockRef BB);
void LLVMRemoveBasicBlockFromParent(LLVMBasicBlockRef BB);
void LLVMMoveBasicBlockBefore(LLVMBasicBlockRef BB, LLVMBasicBlockRef MovePos);
void LLVMMoveBasicBlockAfter(LLVMBasicBlockRef BB, LLVMBasicBlockRef MovePos);
LLVMValueRef LLVMGetFirstInstruction(LLVMBasicBlockRef BB);
LLVMValueRef LLVMGetLastInstruction(LLVMBasicBlockRef BB);
int LLVMHasMetadata(LLVMValueRef Val);
LLVMValueRef LLVMGetMetadata(LLVMValueRef Val, unsigned KindID);
void LLVMSetMetadata(LLVMValueRef Val, unsigned KindID, LLVMValueRef Node);
LLVMBasicBlockRef LLVMGetInstructionParent(LLVMValueRef Inst);
LLVMValueRef LLVMGetNextInstruction(LLVMValueRef Inst);
LLVMValueRef LLVMGetPreviousInstruction(LLVMValueRef Inst);
void LLVMInstructionRemoveFromParent(LLVMValueRef Inst);
void LLVMInstructionEraseFromParent(LLVMValueRef Inst);
LLVMOpcode LLVMGetInstructionOpcode(LLVMValueRef Inst);
LLVMIntPredicate LLVMGetICmpPredicate(LLVMValueRef Inst);
LLVMRealPredicate LLVMGetFCmpPredicate(LLVMValueRef Inst);
LLVMValueRef LLVMInstructionClone(LLVMValueRef Inst);
unsigned LLVMGetNumArgOperands(LLVMValueRef Instr);
void LLVMSetInstructionCallConv(LLVMValueRef Instr, unsigned CC);
unsigned LLVMGetInstructionCallConv(LLVMValueRef Instr);
void LLVMSetInstrParamAlignment(LLVMValueRef Instr, unsigned index, unsigned Align);
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
LLVMBuilderRef LLVMCreateBuilderInContext(LLVMContextRef C);
LLVMBuilderRef LLVMCreateBuilder(void);
void LLVMPositionBuilder(LLVMBuilderRef Builder, LLVMBasicBlockRef Block, LLVMValueRef Instr);
void LLVMPositionBuilderBefore(LLVMBuilderRef Builder, LLVMValueRef Instr);
void LLVMPositionBuilderAtEnd(LLVMBuilderRef Builder, LLVMBasicBlockRef Block);
LLVMBasicBlockRef LLVMGetInsertBlock(LLVMBuilderRef Builder);
void LLVMClearInsertionPosition(LLVMBuilderRef Builder);
void LLVMInsertIntoBuilder(LLVMBuilderRef Builder, LLVMValueRef Instr);
void LLVMInsertIntoBuilderWithName(LLVMBuilderRef Builder, LLVMValueRef Instr, char *Name);
void LLVMDisposeBuilder(LLVMBuilderRef Builder);
void LLVMSetCurrentDebugLocation(LLVMBuilderRef Builder, LLVMValueRef L);
LLVMValueRef LLVMGetCurrentDebugLocation(LLVMBuilderRef Builder);
void LLVMSetInstDebugLocation(LLVMBuilderRef Builder, LLVMValueRef Inst);
LLVMValueRef LLVMBuildRetVoid(LLVMBuilderRef);
LLVMValueRef LLVMBuildRet(LLVMBuilderRef, LLVMValueRef V);
LLVMValueRef LLVMBuildAggregateRet(LLVMBuilderRef, LLVMValueRef *RetVals, unsigned N);
LLVMValueRef LLVMBuildBr(LLVMBuilderRef, LLVMBasicBlockRef Dest);
LLVMValueRef LLVMBuildCondBr(LLVMBuilderRef, LLVMValueRef If, LLVMBasicBlockRef Then, LLVMBasicBlockRef Else);
LLVMValueRef LLVMBuildSwitch(LLVMBuilderRef, LLVMValueRef V, LLVMBasicBlockRef Else, unsigned NumCases);
LLVMValueRef LLVMBuildIndirectBr(LLVMBuilderRef B, LLVMValueRef Addr, unsigned NumDests);
LLVMValueRef LLVMBuildInvoke(LLVMBuilderRef, LLVMValueRef Fn, LLVMValueRef *Args, unsigned NumArgs, LLVMBasicBlockRef Then, LLVMBasicBlockRef Catch, char *Name);
LLVMValueRef LLVMBuildLandingPad(LLVMBuilderRef B, LLVMTypeRef Ty, LLVMValueRef PersFn, unsigned NumClauses, char *Name);
LLVMValueRef LLVMBuildResume(LLVMBuilderRef B, LLVMValueRef Exn);
LLVMValueRef LLVMBuildUnreachable(LLVMBuilderRef);
void LLVMAddCase(LLVMValueRef Switch, LLVMValueRef OnVal, LLVMBasicBlockRef Dest);
void LLVMAddDestination(LLVMValueRef IndirectBr, LLVMBasicBlockRef Dest);
unsigned LLVMGetNumClauses(LLVMValueRef LandingPad);
LLVMValueRef LLVMGetClause(LLVMValueRef LandingPad, unsigned Idx);
void LLVMAddClause(LLVMValueRef LandingPad, LLVMValueRef ClauseVal);
LLVMBool LLVMIsCleanup(LLVMValueRef LandingPad);
void LLVMSetCleanup(LLVMValueRef LandingPad, LLVMBool Val);
LLVMValueRef LLVMBuildAdd(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNSWAdd(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNUWAdd(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildFAdd(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildSub(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNSWSub(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNUWSub(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildFSub(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildMul(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNSWMul(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNUWMul(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildFMul(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildUDiv(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildExactUDiv(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildSDiv(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildExactSDiv(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildFDiv(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildURem(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildSRem(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildFRem(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildShl(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildLShr(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildAShr(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildAnd(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildOr(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildXor(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildBinOp(LLVMBuilderRef B, LLVMOpcode Op, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildNeg(LLVMBuilderRef, LLVMValueRef V, char *Name);
LLVMValueRef LLVMBuildNSWNeg(LLVMBuilderRef B, LLVMValueRef V, char *Name);
LLVMValueRef LLVMBuildNUWNeg(LLVMBuilderRef B, LLVMValueRef V, char *Name);
LLVMValueRef LLVMBuildFNeg(LLVMBuilderRef, LLVMValueRef V, char *Name);
LLVMValueRef LLVMBuildNot(LLVMBuilderRef, LLVMValueRef V, char *Name);
LLVMValueRef LLVMBuildMalloc(LLVMBuilderRef, LLVMTypeRef Ty, char *Name);
LLVMValueRef LLVMBuildArrayMalloc(LLVMBuilderRef, LLVMTypeRef Ty, LLVMValueRef Val, char *Name);
LLVMValueRef LLVMBuildAlloca(LLVMBuilderRef, LLVMTypeRef Ty, char *Name);
LLVMValueRef LLVMBuildArrayAlloca(LLVMBuilderRef, LLVMTypeRef Ty, LLVMValueRef Val, char *Name);
LLVMValueRef LLVMBuildFree(LLVMBuilderRef, LLVMValueRef PointerVal);
LLVMValueRef LLVMBuildLoad(LLVMBuilderRef, LLVMValueRef PointerVal, char *Name);
LLVMValueRef LLVMBuildStore(LLVMBuilderRef, LLVMValueRef Val, LLVMValueRef Ptr);
LLVMValueRef LLVMBuildGEP(LLVMBuilderRef B, LLVMValueRef Pointer, LLVMValueRef *Indices, unsigned NumIndices, char *Name);
LLVMValueRef LLVMBuildInBoundsGEP(LLVMBuilderRef B, LLVMValueRef Pointer, LLVMValueRef *Indices, unsigned NumIndices, char *Name);
LLVMValueRef LLVMBuildStructGEP(LLVMBuilderRef B, LLVMValueRef Pointer, unsigned Idx, char *Name);
LLVMValueRef LLVMBuildGlobalString(LLVMBuilderRef B, char *Str, char *Name);
LLVMValueRef LLVMBuildGlobalStringPtr(LLVMBuilderRef B, char *Str, char *Name);
LLVMBool LLVMGetVolatile(LLVMValueRef MemoryAccessInst);
void LLVMSetVolatile(LLVMValueRef MemoryAccessInst, LLVMBool IsVolatile);
LLVMAtomicOrdering LLVMGetOrdering(LLVMValueRef MemoryAccessInst);
void LLVMSetOrdering(LLVMValueRef MemoryAccessInst, LLVMAtomicOrdering Ordering);
LLVMValueRef LLVMBuildTrunc(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildZExt(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildSExt(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildFPToUI(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildFPToSI(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildUIToFP(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildSIToFP(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildFPTrunc(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildFPExt(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildPtrToInt(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildIntToPtr(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildBitCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildAddrSpaceCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildZExtOrBitCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildSExtOrBitCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildTruncOrBitCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildCast(LLVMBuilderRef B, LLVMOpcode Op, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildPointerCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildIntCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildFPCast(LLVMBuilderRef, LLVMValueRef Val, LLVMTypeRef DestTy, char *Name);
LLVMValueRef LLVMBuildICmp(LLVMBuilderRef, LLVMIntPredicate Op, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildFCmp(LLVMBuilderRef, LLVMRealPredicate Op, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
LLVMValueRef LLVMBuildPhi(LLVMBuilderRef, LLVMTypeRef Ty, char *Name);
LLVMValueRef LLVMBuildCall(LLVMBuilderRef, LLVMValueRef Fn, LLVMValueRef *Args, unsigned NumArgs, char *Name);
LLVMValueRef LLVMBuildSelect(LLVMBuilderRef, LLVMValueRef If, LLVMValueRef Then, LLVMValueRef Else, char *Name);
LLVMValueRef LLVMBuildVAArg(LLVMBuilderRef, LLVMValueRef List, LLVMTypeRef Ty, char *Name);
LLVMValueRef LLVMBuildExtractElement(LLVMBuilderRef, LLVMValueRef VecVal, LLVMValueRef Index, char *Name);
LLVMValueRef LLVMBuildInsertElement(LLVMBuilderRef, LLVMValueRef VecVal, LLVMValueRef EltVal, LLVMValueRef Index, char *Name);
LLVMValueRef LLVMBuildShuffleVector(LLVMBuilderRef, LLVMValueRef V1, LLVMValueRef V2, LLVMValueRef Mask, char *Name);
LLVMValueRef LLVMBuildExtractValue(LLVMBuilderRef, LLVMValueRef AggVal, unsigned Index, char *Name);
LLVMValueRef LLVMBuildInsertValue(LLVMBuilderRef, LLVMValueRef AggVal, LLVMValueRef EltVal, unsigned Index, char *Name);
LLVMValueRef LLVMBuildIsNull(LLVMBuilderRef, LLVMValueRef Val, char *Name);
LLVMValueRef LLVMBuildIsNotNull(LLVMBuilderRef, LLVMValueRef Val, char *Name);
LLVMValueRef LLVMBuildPtrDiff(LLVMBuilderRef, LLVMValueRef LHS, LLVMValueRef RHS, char *Name);
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
LLVMBool LLVMCreateMemoryBufferWithContentsOfFile(char *Path, LLVMMemoryBufferRef *OutMemBuf, char **OutMessage);
LLVMBool LLVMCreateMemoryBufferWithSTDIN(LLVMMemoryBufferRef *OutMemBuf, char **OutMessage);
LLVMMemoryBufferRef LLVMCreateMemoryBufferWithMemoryRange(char *InputData, size_t InputDataLength, char *BufferName, LLVMBool RequiresNullTerminator);
LLVMMemoryBufferRef LLVMCreateMemoryBufferWithMemoryRangeCopy(char *InputData, size_t InputDataLength, char *BufferName);
char * LLVMGetBufferStart(LLVMMemoryBufferRef MemBuf);
size_t LLVMGetBufferSize(LLVMMemoryBufferRef MemBuf);
void LLVMDisposeMemoryBuffer(LLVMMemoryBufferRef MemBuf);
LLVMPassRegistryRef LLVMGetGlobalPassRegistry(void);
LLVMPassManagerRef LLVMCreatePassManager(void);
LLVMPassManagerRef LLVMCreateFunctionPassManagerForModule(LLVMModuleRef M);
LLVMPassManagerRef LLVMCreateFunctionPassManager(LLVMModuleProviderRef MP);
LLVMBool LLVMRunPassManager(LLVMPassManagerRef PM, LLVMModuleRef M);
LLVMBool LLVMInitializeFunctionPassManager(LLVMPassManagerRef FPM);
LLVMBool LLVMRunFunctionPassManager(LLVMPassManagerRef FPM, LLVMValueRef F);
LLVMBool LLVMFinalizeFunctionPassManager(LLVMPassManagerRef FPM);
void LLVMDisposePassManager(LLVMPassManagerRef PM);
LLVMBool LLVMStartMultithreaded(void);
void LLVMStopMultithreaded(void);
LLVMBool LLVMIsMultithreaded(void);
enum LLVMByteOrdering {
  LLVMBigEndian,
  LLVMLittleEndian,
};
typedef struct LLVMOpaqueTargetData * LLVMTargetDataRef;
typedef struct LLVMOpaqueTargetLibraryInfotData * LLVMTargetLibraryInfoRef;
void LLVMInitializeAArch64TargetInfo(void);
void LLVMInitializeAMDGPUTargetInfo(void);
void LLVMInitializeARMTargetInfo(void);
void LLVMInitializeBPFTargetInfo(void);
void LLVMInitializeHexagonTargetInfo(void);
void LLVMInitializeLanaiTargetInfo(void);
void LLVMInitializeMipsTargetInfo(void);
void LLVMInitializeMSP430TargetInfo(void);
void LLVMInitializeNVPTXTargetInfo(void);
void LLVMInitializePowerPCTargetInfo(void);
void LLVMInitializeRISCVTargetInfo(void);
void LLVMInitializeSparcTargetInfo(void);
void LLVMInitializeSystemZTargetInfo(void);
void LLVMInitializeX86TargetInfo(void);
void LLVMInitializeXCoreTargetInfo(void);
void LLVMInitializeAArch64Target(void);
void LLVMInitializeAMDGPUTarget(void);
void LLVMInitializeARMTarget(void);
void LLVMInitializeBPFTarget(void);
void LLVMInitializeHexagonTarget(void);
void LLVMInitializeLanaiTarget(void);
void LLVMInitializeMipsTarget(void);
void LLVMInitializeMSP430Target(void);
void LLVMInitializeNVPTXTarget(void);
void LLVMInitializePowerPCTarget(void);
void LLVMInitializeRISCVTarget(void);
void LLVMInitializeSparcTarget(void);
void LLVMInitializeSystemZTarget(void);
void LLVMInitializeX86Target(void);
void LLVMInitializeXCoreTarget(void);
void LLVMInitializeAArch64TargetMC(void);
void LLVMInitializeAMDGPUTargetMC(void);
void LLVMInitializeARMTargetMC(void);
void LLVMInitializeBPFTargetMC(void);
void LLVMInitializeHexagonTargetMC(void);
void LLVMInitializeLanaiTargetMC(void);
void LLVMInitializeMipsTargetMC(void);
void LLVMInitializeMSP430TargetMC(void);
void LLVMInitializeNVPTXTargetMC(void);
void LLVMInitializePowerPCTargetMC(void);
void LLVMInitializeRISCVTargetMC(void);
void LLVMInitializeSparcTargetMC(void);
void LLVMInitializeSystemZTargetMC(void);
void LLVMInitializeX86TargetMC(void);
void LLVMInitializeXCoreTargetMC(void);
void LLVMInitializeAArch64AsmPrinter(void);
void LLVMInitializeAMDGPUAsmPrinter(void);
void LLVMInitializeARMAsmPrinter(void);
void LLVMInitializeBPFAsmPrinter(void);
void LLVMInitializeHexagonAsmPrinter(void);
void LLVMInitializeLanaiAsmPrinter(void);
void LLVMInitializeMipsAsmPrinter(void);
void LLVMInitializeMSP430AsmPrinter(void);
void LLVMInitializeNVPTXAsmPrinter(void);
void LLVMInitializePowerPCAsmPrinter(void);
void LLVMInitializeSparcAsmPrinter(void);
void LLVMInitializeSystemZAsmPrinter(void);
void LLVMInitializeX86AsmPrinter(void);
void LLVMInitializeXCoreAsmPrinter(void);
void LLVMInitializeAArch64AsmParser(void);
void LLVMInitializeAMDGPUAsmParser(void);
void LLVMInitializeARMAsmParser(void);
void LLVMInitializeHexagonAsmParser(void);
void LLVMInitializeLanaiAsmParser(void);
void LLVMInitializeMipsAsmParser(void);
void LLVMInitializePowerPCAsmParser(void);
void LLVMInitializeSparcAsmParser(void);
void LLVMInitializeSystemZAsmParser(void);
void LLVMInitializeX86AsmParser(void);
void LLVMInitializeAArch64Disassembler(void);
void LLVMInitializeAMDGPUDisassembler(void);
void LLVMInitializeARMDisassembler(void);
void LLVMInitializeBPFDisassembler(void);
void LLVMInitializeHexagonDisassembler(void);
void LLVMInitializeLanaiDisassembler(void);
void LLVMInitializeMipsDisassembler(void);
void LLVMInitializePowerPCDisassembler(void);
void LLVMInitializeSparcDisassembler(void);
void LLVMInitializeSystemZDisassembler(void);
void LLVMInitializeX86Disassembler(void);
void LLVMInitializeXCoreDisassembler(void);
LLVMTargetDataRef LLVMGetModuleDataLayout(LLVMModuleRef M);
void LLVMSetModuleDataLayout(LLVMModuleRef M, LLVMTargetDataRef DL);
LLVMTargetDataRef LLVMCreateTargetData(char *StringRep);
void LLVMDisposeTargetData(LLVMTargetDataRef TD);
void LLVMAddTargetLibraryInfo(LLVMTargetLibraryInfoRef TLI, LLVMPassManagerRef PM);
char * LLVMCopyStringRepOfTargetData(LLVMTargetDataRef TD);
enum LLVMByteOrdering LLVMByteOrder(LLVMTargetDataRef TD);
unsigned LLVMPointerSize(LLVMTargetDataRef TD);
unsigned LLVMPointerSizeForAS(LLVMTargetDataRef TD, unsigned AS);
LLVMTypeRef LLVMIntPtrType(LLVMTargetDataRef TD);
LLVMTypeRef LLVMIntPtrTypeForAS(LLVMTargetDataRef TD, unsigned AS);
LLVMTypeRef LLVMIntPtrTypeInContext(LLVMContextRef C, LLVMTargetDataRef TD);
LLVMTypeRef LLVMIntPtrTypeForASInContext(LLVMContextRef C, LLVMTargetDataRef TD, unsigned AS);
unsigned long long LLVMSizeOfTypeInBits(LLVMTargetDataRef TD, LLVMTypeRef Ty);
unsigned long long LLVMStoreSizeOfType(LLVMTargetDataRef TD, LLVMTypeRef Ty);
unsigned long long LLVMABISizeOfType(LLVMTargetDataRef TD, LLVMTypeRef Ty);
unsigned LLVMABIAlignmentOfType(LLVMTargetDataRef TD, LLVMTypeRef Ty);
unsigned LLVMCallFrameAlignmentOfType(LLVMTargetDataRef TD, LLVMTypeRef Ty);
unsigned LLVMPreferredAlignmentOfType(LLVMTargetDataRef TD, LLVMTypeRef Ty);
unsigned LLVMPreferredAlignmentOfGlobal(LLVMTargetDataRef TD, LLVMValueRef GlobalVar);
unsigned LLVMElementAtOffset(LLVMTargetDataRef TD, LLVMTypeRef StructTy, unsigned long long Offset);
unsigned long long LLVMOffsetOfElement(LLVMTargetDataRef TD, LLVMTypeRef StructTy, unsigned Element);
typedef struct LLVMOpaqueTargetMachine * LLVMTargetMachineRef;
typedef struct LLVMTarget * LLVMTargetRef;
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
typedef enum {
  LLVMAssemblyFile,
  LLVMObjectFile,
} LLVMCodeGenFileType;
LLVMTargetRef LLVMGetFirstTarget(void);
LLVMTargetRef LLVMGetNextTarget(LLVMTargetRef T);
LLVMTargetRef LLVMGetTargetFromName(char *Name);
LLVMBool LLVMGetTargetFromTriple(char *Triple, LLVMTargetRef *T, char **ErrorMessage);
char * LLVMGetTargetName(LLVMTargetRef T);
char * LLVMGetTargetDescription(LLVMTargetRef T);
LLVMBool LLVMTargetHasJIT(LLVMTargetRef T);
LLVMBool LLVMTargetHasTargetMachine(LLVMTargetRef T);
LLVMBool LLVMTargetHasAsmBackend(LLVMTargetRef T);
LLVMTargetMachineRef LLVMCreateTargetMachine(LLVMTargetRef T, char *Triple, char *CPU, char *Features, LLVMCodeGenOptLevel Level, LLVMRelocMode Reloc, LLVMCodeModel CodeModel);
void LLVMDisposeTargetMachine(LLVMTargetMachineRef T);
LLVMTargetRef LLVMGetTargetMachineTarget(LLVMTargetMachineRef T);
char * LLVMGetTargetMachineTriple(LLVMTargetMachineRef T);
char * LLVMGetTargetMachineCPU(LLVMTargetMachineRef T);
char * LLVMGetTargetMachineFeatureString(LLVMTargetMachineRef T);
LLVMTargetDataRef LLVMCreateTargetDataLayout(LLVMTargetMachineRef T);
void LLVMSetTargetMachineAsmVerbosity(LLVMTargetMachineRef T, LLVMBool VerboseAsm);
LLVMBool LLVMTargetMachineEmitToFile(LLVMTargetMachineRef T, LLVMModuleRef M, char *Filename, LLVMCodeGenFileType codegen, char **ErrorMessage);
LLVMBool LLVMTargetMachineEmitToMemoryBuffer(LLVMTargetMachineRef T, LLVMModuleRef M, LLVMCodeGenFileType codegen, char **ErrorMessage, LLVMMemoryBufferRef *OutMemBuf);
char * LLVMGetDefaultTargetTriple(void);
void LLVMAddAnalysisPasses(LLVMTargetMachineRef T, LLVMPassManagerRef PM);
void LLVMLinkInMCJIT(void);
void LLVMLinkInInterpreter(void);
typedef struct LLVMOpaqueGenericValue * LLVMGenericValueRef;
typedef struct LLVMOpaqueExecutionEngine * LLVMExecutionEngineRef;
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
LLVMBool LLVMCreateExecutionEngineForModule(LLVMExecutionEngineRef *OutEE, LLVMModuleRef M, char **OutError);
LLVMBool LLVMCreateInterpreterForModule(LLVMExecutionEngineRef *OutInterp, LLVMModuleRef M, char **OutError);
LLVMBool LLVMCreateJITCompilerForModule(LLVMExecutionEngineRef *OutJIT, LLVMModuleRef M, unsigned OptLevel, char **OutError);
void LLVMInitializeMCJITCompilerOptions(struct LLVMMCJITCompilerOptions *Options, size_t SizeOfOptions);
LLVMBool LLVMCreateMCJITCompilerForModule(LLVMExecutionEngineRef *OutJIT, LLVMModuleRef M, struct LLVMMCJITCompilerOptions *Options, size_t SizeOfOptions, char **OutError);
void LLVMDisposeExecutionEngine(LLVMExecutionEngineRef EE);
void LLVMRunStaticConstructors(LLVMExecutionEngineRef EE);
void LLVMRunStaticDestructors(LLVMExecutionEngineRef EE);
int LLVMRunFunctionAsMain(LLVMExecutionEngineRef EE, LLVMValueRef F, unsigned ArgC, char **ArgV, char **EnvP);
LLVMGenericValueRef LLVMRunFunction(LLVMExecutionEngineRef EE, LLVMValueRef F, unsigned NumArgs, LLVMGenericValueRef *Args);
void LLVMFreeMachineCodeForFunction(LLVMExecutionEngineRef EE, LLVMValueRef F);
void LLVMAddModule(LLVMExecutionEngineRef EE, LLVMModuleRef M);
LLVMBool LLVMRemoveModule(LLVMExecutionEngineRef EE, LLVMModuleRef M, LLVMModuleRef *OutMod, char **OutError);
LLVMBool LLVMFindFunction(LLVMExecutionEngineRef EE, char *Name, LLVMValueRef *OutFn);
void * LLVMRecompileAndRelinkFunction(LLVMExecutionEngineRef EE, LLVMValueRef Fn);
LLVMTargetDataRef LLVMGetExecutionEngineTargetData(LLVMExecutionEngineRef EE);
LLVMTargetMachineRef LLVMGetExecutionEngineTargetMachine(LLVMExecutionEngineRef EE);
void LLVMAddGlobalMapping(LLVMExecutionEngineRef EE, LLVMValueRef Global, void *Addr);
void * LLVMGetPointerToGlobal(LLVMExecutionEngineRef EE, LLVMValueRef Global);
uint64_t LLVMGetGlobalValueAddress(LLVMExecutionEngineRef EE, char *Name);
uint64_t LLVMGetFunctionAddress(LLVMExecutionEngineRef EE, char *Name);
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
LLVMBool LLVMVerifyModule(LLVMModuleRef M, LLVMVerifierFailureAction Action, char **OutMessage);
LLVMBool LLVMVerifyFunction(LLVMValueRef Fn, LLVMVerifierFailureAction Action);
void LLVMViewFunctionCFG(LLVMValueRef Fn);
void LLVMViewFunctionCFGOnly(LLVMValueRef Fn);
LLVMBool LLVMParseBitcode(LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutModule, char **OutMessage);
LLVMBool LLVMParseBitcode2(LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutModule);
LLVMBool LLVMParseBitcodeInContext(LLVMContextRef ContextRef, LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutModule, char **OutMessage);
LLVMBool LLVMParseBitcodeInContext2(LLVMContextRef ContextRef, LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutModule);
LLVMBool LLVMGetBitcodeModuleInContext(LLVMContextRef ContextRef, LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutM, char **OutMessage);
LLVMBool LLVMGetBitcodeModuleInContext2(LLVMContextRef ContextRef, LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutM);
LLVMBool LLVMGetBitcodeModule(LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutM, char **OutMessage);
LLVMBool LLVMGetBitcodeModule2(LLVMMemoryBufferRef MemBuf, LLVMModuleRef *OutM);
int LLVMWriteBitcodeToFile(LLVMModuleRef M, char *Path);
int LLVMWriteBitcodeToFD(LLVMModuleRef M, int FD, int ShouldClose, int Unbuffered);
int LLVMWriteBitcodeToFileHandle(LLVMModuleRef M, int Handle);
LLVMMemoryBufferRef LLVMWriteBitcodeToMemoryBuffer(LLVMModuleRef M);
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
typedef struct LLVMOpaquePassManagerBuilder * LLVMPassManagerBuilderRef;
LLVMPassManagerBuilderRef LLVMPassManagerBuilderCreate(void);
void LLVMPassManagerBuilderDispose(LLVMPassManagerBuilderRef PMB);
void LLVMPassManagerBuilderSetOptLevel(LLVMPassManagerBuilderRef PMB, unsigned OptLevel);
void LLVMPassManagerBuilderSetSizeLevel(LLVMPassManagerBuilderRef PMB, unsigned SizeLevel);
void LLVMPassManagerBuilderSetDisableUnitAtATime(LLVMPassManagerBuilderRef PMB, LLVMBool Value);
void LLVMPassManagerBuilderSetDisableUnrollLoops(LLVMPassManagerBuilderRef PMB, LLVMBool Value);
void LLVMPassManagerBuilderSetDisableSimplifyLibCalls(LLVMPassManagerBuilderRef PMB, LLVMBool Value);
void LLVMPassManagerBuilderUseInlinerWithThreshold(LLVMPassManagerBuilderRef PMB, unsigned Threshold);
void LLVMPassManagerBuilderPopulateFunctionPassManager(LLVMPassManagerBuilderRef PMB, LLVMPassManagerRef PM);
void LLVMPassManagerBuilderPopulateModulePassManager(LLVMPassManagerBuilderRef PMB, LLVMPassManagerRef PM);
void LLVMPassManagerBuilderPopulateLTOPassManager(LLVMPassManagerBuilderRef PMB, LLVMPassManagerRef PM, LLVMBool Internalize, LLVMBool RunInliner);
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
';
    private FFI $ffi;
    const HAVE_INTTYPES_H = 1;
    const HAVE_STDINT_H = 1;
    const HAVE_UINT64_T = 1;
    const HAVE_U_INT64_T = 1;
    const _MATH_H = 1;
    const _FEATURES_H = 1;
    const _DEFAULT_SOURCE = 1;
    const __USE_POSIX_IMPLICITLY = 1;
    const _POSIX_SOURCE = 1;
    const _POSIX_C_SOURCE = 200809;
    const __USE_POSIX = 1;
    const __USE_POSIX2 = 1;
    const __USE_POSIX199309 = 1;
    const __USE_POSIX199506 = 1;
    const __USE_XOPEN2K = 1;
    const __USE_ISOC95 = 1;
    const __USE_ISOC99 = 1;
    const __USE_XOPEN2K8 = 1;
    const _ATFILE_SOURCE = 1;
    const __USE_MISC = 1;
    const __USE_ATFILE = 1;
    const __USE_FORTIFY_LEVEL = 0;
    const _STDC_PREDEF_H = 1;
    const __STDC_IEC_559__ = 1;
    const __STDC_IEC_559_COMPLEX__ = 1;
    const __STDC_ISO_10646__ = 201605;
    const __STDC_NO_THREADS__ = 1;
    const __GNU_LIBRARY__ = 6;
    const __GLIBC__ = 2;
    const __GLIBC_MINOR__ = 24;
    const _SYS_CDEFS_H = 1;
    const __WORDSIZE = 64;
    const __WORDSIZE_TIME64_COMPAT32 = 1;
    const __SYSCALL_WORDSIZE = 64;
    const _BITS_LIBM_SIMD_DECL_STUBS_H = 1;
    const _MATH_H_MATHDEF = 1;
    const __MATH_DECLARE_LDOUBLE = 1;
    const FP_NAN = 0;
    const FP_INFINITE = 1;
    const FP_ZERO = 2;
    const FP_SUBNORMAL = 3;
    const FP_NORMAL = 4;
    const MATH_ERRNO = 1;
    const MATH_ERREXCEPT = 2;
    const X_TLOSS = 1.41484755040568800000e+16;
    const DOMAIN = 1;
    const SING = 2;
    const OVERFLOW = 3;
    const UNDERFLOW = 4;
    const TLOSS = 5;
    const PLOSS = 6;
    const HUGE = 3.40282347e+38;
    const M_E = 2.7182818284590452354;
    const M_LOG2E = 1.4426950408889634074;
    const M_LOG10E = 0.43429448190325182765;
    const M_LN2 = 0.69314718055994530942;
    const M_LN10 = 2.30258509299404568402;
    const M_PI = 3.14159265358979323846;
    const M_PI_2 = 1.57079632679489661923;
    const M_PI_4 = 0.78539816339744830962;
    const M_1_PI = 0.31830988618379067154;
    const M_2_PI = 0.63661977236758134308;
    const M_2_SQRTPI = 1.12837916709551257390;
    const M_SQRT2 = 1.41421356237309504880;
    const M_SQRT1_2 = 0.70710678118654752440;
    const _INTTYPES_H = 1;
    const _STDINT_H = 1;
    const _BITS_WCHAR_H = 1;
    const ____gwchar_t_defined = 1;
    const _SYS_TYPES_H = 1;
    const _BITS_TYPES_H = 1;
    const _BITS_TYPESIZES_H = 1;
    const __OFF_T_MATCHES_OFF64_T = 1;
    const __INO_T_MATCHES_INO64_T = 1;
    const __FD_SETSIZE = 1024;
    const _SYS_TIME_H = 1;
    const _STRUCT_TIMEVAL = 1;
    const _SYS_SELECT_H = 1;
    const _SIGSET_H_types = 1;
    const __BIT_TYPES_DEFINED__ = 1;
    const _ENDIAN_H = 1;
    const __LITTLE_ENDIAN = 1234;
    const __BIG_ENDIAN = 4321;
    const __PDP_ENDIAN = 3412;
    const _BITS_BYTESWAP_H = 1;
    const _SYS_SYSMACROS_H = 1;
    const _BITS_PTHREADTYPES_H = 1;
    const __SIZEOF_PTHREAD_ATTR_T = 56;
    const __SIZEOF_PTHREAD_MUTEX_T = 40;
    const __SIZEOF_PTHREAD_MUTEXATTR_T = 4;
    const __SIZEOF_PTHREAD_COND_T = 48;
    const __SIZEOF_PTHREAD_CONDATTR_T = 4;
    const __SIZEOF_PTHREAD_RWLOCK_T = 56;
    const __SIZEOF_PTHREAD_RWLOCKATTR_T = 8;
    const __SIZEOF_PTHREAD_BARRIER_T = 32;
    const __SIZEOF_PTHREAD_BARRIERATTR_T = 4;
    const __have_pthread_attr_t = 1;
    const __PTHREAD_MUTEX_HAVE_PREV = 1;
    const __PTHREAD_RWLOCK_INT_FLAGS_SHARED = 1;
    const LLVM_ENABLE_THREADS = 1;
    const LLVM_HAS_ATOMICS = 1;
    const LLVM_ON_UNIX = 1;
    const LLVM_USE_INTEL_JITEVENTS = 0;
    const LLVM_USE_OPROFILE = 0;
    const LLVM_VERSION_MAJOR = 4;
    const LLVM_VERSION_MINOR = 0;
    const LLVM_VERSION_PATCH = 0;
    const LLVMDisassembler_VariantKind_None = 0;
    const LLVMDisassembler_VariantKind_ARM_HI16 = 1;
    const LLVMDisassembler_VariantKind_ARM_LO16 = 2;
    const LLVMDisassembler_VariantKind_ARM64_PAGE = 1;
    const LLVMDisassembler_VariantKind_ARM64_PAGEOFF = 2;
    const LLVMDisassembler_VariantKind_ARM64_GOTPAGE = 3;
    const LLVMDisassembler_VariantKind_ARM64_GOTPAGEOFF = 4;
    const LLVMDisassembler_VariantKind_ARM64_TLVP = 5;
    const LLVMDisassembler_VariantKind_ARM64_TLVOFF = 6;
    const LLVMDisassembler_ReferenceType_InOut_None = 0;
    const LLVMDisassembler_ReferenceType_In_Branch = 1;
    const LLVMDisassembler_ReferenceType_In_PCrel_Load = 2;
    const LLVMDisassembler_ReferenceType_In_ARM64_ADRP = 0x100000001;
    const LLVMDisassembler_ReferenceType_In_ARM64_ADDXri = 0x100000002;
    const LLVMDisassembler_ReferenceType_In_ARM64_LDRXui = 0x100000003;
    const LLVMDisassembler_ReferenceType_In_ARM64_LDRXl = 0x100000004;
    const LLVMDisassembler_ReferenceType_In_ARM64_ADR = 0x100000005;
    const LLVMDisassembler_ReferenceType_Out_SymbolStub = 1;
    const LLVMDisassembler_ReferenceType_Out_LitPool_SymAddr = 2;
    const LLVMDisassembler_ReferenceType_Out_LitPool_CstrAddr = 3;
    const LLVMDisassembler_ReferenceType_Out_Objc_CFString_Ref = 4;
    const LLVMDisassembler_ReferenceType_Out_Objc_Message = 5;
    const LLVMDisassembler_ReferenceType_Out_Objc_Message_Ref = 6;
    const LLVMDisassembler_ReferenceType_Out_Objc_Selector_Ref = 7;
    const LLVMDisassembler_ReferenceType_Out_Objc_Class_Ref = 8;
    const LLVMDisassembler_ReferenceType_DeMangled_Name = 9;
    const LLVMDisassembler_Option_UseMarkup = 1;
    const LLVMDisassembler_Option_PrintImmHex = 2;
    const LLVMDisassembler_Option_AsmPrinterVariant = 4;
    const LLVMDisassembler_Option_SetInstrComments = 8;
    const LLVMDisassembler_Option_PrintLatency = 16;
    public function __construct(string $pathToSoFile = self::SOFILE) {
        $this->ffi = FFI::cdef(self::HEADER_DEF, $pathToSoFile);
    }
    
    public function cast(illvm $from, string $to): illvm {
        if (!is_a($to, illvm::class)) {
            throw new \LogicException("Cannot cast to a non-wrapper type");
        }
        return new $to($this->ffi->cast($to::getType(), $from->getData()));
    }

    public function makeArray(string $class, array $elements) {
        $type = $class::getType();
        if (substr($type, -1) !== "*") {
            throw new \LogicException("Attempting to make a non-pointer element into an array");
        }
        $cdata = $this->ffi->new(substr($type, 0, -1) . "[" . count($elements) . "]");
        foreach ($elements as $key => $raw) {
            $cdata[$key] = $raw === null ? null : $raw->getData();
        }
        return new $class($cdata);
    }

    public function sizeof($classOrObject): int {
        if (is_object($classOrObject) && $classOrObject instanceof illvm) {
            return $this->ffi->sizeof($classOrObject->getData());
        } elseif (is_a($classOrObject, illvm::class)) {
            return $this->ffi->sizeof($this->ffi->type($classOrObject::getType()));
        } else {
            throw new \LogicException("Unknown class/object passed to sizeof()");
        }
    }

    public function getFFI(): FFI {
        return $this->ffi;
    }

    
    public function __get(string $name) {
        switch($name) {
            case 'signgam': return $this->ffi->signgam;
            case '_LIB_VERSION': return $this->ffi->_LIB_VERSION;
            default: return $this->ffi->$name;
        }
    }
    public function LLVMInstallFatalErrorHandler(?LLVMFatalErrorHandler $p0): void {
        $this->ffi->LLVMInstallFatalErrorHandler($p0 === null ? null : $p0->getData());
    }
    public function LLVMResetFatalErrorHandler(): void {
        $this->ffi->LLVMResetFatalErrorHandler();
    }
    public function LLVMEnablePrettyStackTrace(): void {
        $this->ffi->LLVMEnablePrettyStackTrace();
    }
    public function acos(?float $p0): ?float {
        $result = $this->ffi->acos($p0);
        return $result;
    }
    public function asin(?float $p0): ?float {
        $result = $this->ffi->asin($p0);
        return $result;
    }
    public function atan(?float $p0): ?float {
        $result = $this->ffi->atan($p0);
        return $result;
    }
    public function atan2(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->atan2($p0, $p1);
        return $result;
    }
    public function cos(?float $p0): ?float {
        $result = $this->ffi->cos($p0);
        return $result;
    }
    public function sin(?float $p0): ?float {
        $result = $this->ffi->sin($p0);
        return $result;
    }
    public function tan(?float $p0): ?float {
        $result = $this->ffi->tan($p0);
        return $result;
    }
    public function cosh(?float $p0): ?float {
        $result = $this->ffi->cosh($p0);
        return $result;
    }
    public function sinh(?float $p0): ?float {
        $result = $this->ffi->sinh($p0);
        return $result;
    }
    public function tanh(?float $p0): ?float {
        $result = $this->ffi->tanh($p0);
        return $result;
    }
    public function acosh(?float $p0): ?float {
        $result = $this->ffi->acosh($p0);
        return $result;
    }
    public function asinh(?float $p0): ?float {
        $result = $this->ffi->asinh($p0);
        return $result;
    }
    public function atanh(?float $p0): ?float {
        $result = $this->ffi->atanh($p0);
        return $result;
    }
    public function exp(?float $p0): ?float {
        $result = $this->ffi->exp($p0);
        return $result;
    }
    public function frexp(?float $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->frexp($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function ldexp(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->ldexp($p0, $p1);
        return $result;
    }
    public function log(?float $p0): ?float {
        $result = $this->ffi->log($p0);
        return $result;
    }
    public function log10(?float $p0): ?float {
        $result = $this->ffi->log10($p0);
        return $result;
    }
    public function modf(?float $p0, ?float_ptr $p1): ?float {
        $result = $this->ffi->modf($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function expm1(?float $p0): ?float {
        $result = $this->ffi->expm1($p0);
        return $result;
    }
    public function log1p(?float $p0): ?float {
        $result = $this->ffi->log1p($p0);
        return $result;
    }
    public function logb(?float $p0): ?float {
        $result = $this->ffi->logb($p0);
        return $result;
    }
    public function exp2(?float $p0): ?float {
        $result = $this->ffi->exp2($p0);
        return $result;
    }
    public function log2(?float $p0): ?float {
        $result = $this->ffi->log2($p0);
        return $result;
    }
    public function pow(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->pow($p0, $p1);
        return $result;
    }
    public function sqrt(?float $p0): ?float {
        $result = $this->ffi->sqrt($p0);
        return $result;
    }
    public function hypot(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->hypot($p0, $p1);
        return $result;
    }
    public function cbrt(?float $p0): ?float {
        $result = $this->ffi->cbrt($p0);
        return $result;
    }
    public function ceil(?float $p0): ?float {
        $result = $this->ffi->ceil($p0);
        return $result;
    }
    public function fabs(?float $p0): ?float {
        $result = $this->ffi->fabs($p0);
        return $result;
    }
    public function floor(?float $p0): ?float {
        $result = $this->ffi->floor($p0);
        return $result;
    }
    public function fmod(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmod($p0, $p1);
        return $result;
    }
    public function isinf(?float $p0): ?int {
        $result = $this->ffi->isinf($p0);
        return $result;
    }
    public function finite(?float $p0): ?int {
        $result = $this->ffi->finite($p0);
        return $result;
    }
    public function drem(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->drem($p0, $p1);
        return $result;
    }
    public function significand(?float $p0): ?float {
        $result = $this->ffi->significand($p0);
        return $result;
    }
    public function copysign(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->copysign($p0, $p1);
        return $result;
    }
    public function nan(?string $p0): ?float {
        $result = $this->ffi->nan($p0);
        return $result;
    }
    public function isnan(?float $p0): ?int {
        $result = $this->ffi->isnan($p0);
        return $result;
    }
    public function j0(?float $p0): ?float {
        $result = $this->ffi->j0($p0);
        return $result;
    }
    public function j1(?float $p0): ?float {
        $result = $this->ffi->j1($p0);
        return $result;
    }
    public function jn(?int $p0, ?float $p1): ?float {
        $result = $this->ffi->jn($p0, $p1);
        return $result;
    }
    public function y0(?float $p0): ?float {
        $result = $this->ffi->y0($p0);
        return $result;
    }
    public function y1(?float $p0): ?float {
        $result = $this->ffi->y1($p0);
        return $result;
    }
    public function yn(?int $p0, ?float $p1): ?float {
        $result = $this->ffi->yn($p0, $p1);
        return $result;
    }
    public function erf(?float $p0): ?float {
        $result = $this->ffi->erf($p0);
        return $result;
    }
    public function erfc(?float $p0): ?float {
        $result = $this->ffi->erfc($p0);
        return $result;
    }
    public function lgamma(?float $p0): ?float {
        $result = $this->ffi->lgamma($p0);
        return $result;
    }
    public function tgamma(?float $p0): ?float {
        $result = $this->ffi->tgamma($p0);
        return $result;
    }
    public function gamma(?float $p0): ?float {
        $result = $this->ffi->gamma($p0);
        return $result;
    }
    public function lgamma_r(?float $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->lgamma_r($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function rint(?float $p0): ?float {
        $result = $this->ffi->rint($p0);
        return $result;
    }
    public function nextafter(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->nextafter($p0, $p1);
        return $result;
    }
    public function nexttoward(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->nexttoward($p0, $p1);
        return $result;
    }
    public function remainder(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->remainder($p0, $p1);
        return $result;
    }
    public function scalbn(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->scalbn($p0, $p1);
        return $result;
    }
    public function ilogb(?float $p0): ?int {
        $result = $this->ffi->ilogb($p0);
        return $result;
    }
    public function scalbln(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->scalbln($p0, $p1);
        return $result;
    }
    public function nearbyint(?float $p0): ?float {
        $result = $this->ffi->nearbyint($p0);
        return $result;
    }
    public function round(?float $p0): ?float {
        $result = $this->ffi->round($p0);
        return $result;
    }
    public function trunc(?float $p0): ?float {
        $result = $this->ffi->trunc($p0);
        return $result;
    }
    public function remquo(?float $p0, ?float $p1, ?int_ptr $p2): ?float {
        $result = $this->ffi->remquo($p0, $p1, $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function lrint(?float $p0): ?int {
        $result = $this->ffi->lrint($p0);
        return $result;
    }
    public function llrint(?float $p0): ?int {
        $result = $this->ffi->llrint($p0);
        return $result;
    }
    public function lround(?float $p0): ?int {
        $result = $this->ffi->lround($p0);
        return $result;
    }
    public function llround(?float $p0): ?int {
        $result = $this->ffi->llround($p0);
        return $result;
    }
    public function fdim(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fdim($p0, $p1);
        return $result;
    }
    public function fmax(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmax($p0, $p1);
        return $result;
    }
    public function fmin(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmin($p0, $p1);
        return $result;
    }
    public function fma(?float $p0, ?float $p1, ?float $p2): ?float {
        $result = $this->ffi->fma($p0, $p1, $p2);
        return $result;
    }
    public function scalb(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->scalb($p0, $p1);
        return $result;
    }
    public function acosf(?float $p0): ?float {
        $result = $this->ffi->acosf($p0);
        return $result;
    }
    public function asinf(?float $p0): ?float {
        $result = $this->ffi->asinf($p0);
        return $result;
    }
    public function atanf(?float $p0): ?float {
        $result = $this->ffi->atanf($p0);
        return $result;
    }
    public function atan2f(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->atan2f($p0, $p1);
        return $result;
    }
    public function cosf(?float $p0): ?float {
        $result = $this->ffi->cosf($p0);
        return $result;
    }
    public function sinf(?float $p0): ?float {
        $result = $this->ffi->sinf($p0);
        return $result;
    }
    public function tanf(?float $p0): ?float {
        $result = $this->ffi->tanf($p0);
        return $result;
    }
    public function coshf(?float $p0): ?float {
        $result = $this->ffi->coshf($p0);
        return $result;
    }
    public function sinhf(?float $p0): ?float {
        $result = $this->ffi->sinhf($p0);
        return $result;
    }
    public function tanhf(?float $p0): ?float {
        $result = $this->ffi->tanhf($p0);
        return $result;
    }
    public function acoshf(?float $p0): ?float {
        $result = $this->ffi->acoshf($p0);
        return $result;
    }
    public function asinhf(?float $p0): ?float {
        $result = $this->ffi->asinhf($p0);
        return $result;
    }
    public function atanhf(?float $p0): ?float {
        $result = $this->ffi->atanhf($p0);
        return $result;
    }
    public function expf(?float $p0): ?float {
        $result = $this->ffi->expf($p0);
        return $result;
    }
    public function frexpf(?float $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->frexpf($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function ldexpf(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->ldexpf($p0, $p1);
        return $result;
    }
    public function logf(?float $p0): ?float {
        $result = $this->ffi->logf($p0);
        return $result;
    }
    public function log10f(?float $p0): ?float {
        $result = $this->ffi->log10f($p0);
        return $result;
    }
    public function modff(?float $p0, ?float_ptr $p1): ?float {
        $result = $this->ffi->modff($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function expm1f(?float $p0): ?float {
        $result = $this->ffi->expm1f($p0);
        return $result;
    }
    public function log1pf(?float $p0): ?float {
        $result = $this->ffi->log1pf($p0);
        return $result;
    }
    public function logbf(?float $p0): ?float {
        $result = $this->ffi->logbf($p0);
        return $result;
    }
    public function exp2f(?float $p0): ?float {
        $result = $this->ffi->exp2f($p0);
        return $result;
    }
    public function log2f(?float $p0): ?float {
        $result = $this->ffi->log2f($p0);
        return $result;
    }
    public function powf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->powf($p0, $p1);
        return $result;
    }
    public function sqrtf(?float $p0): ?float {
        $result = $this->ffi->sqrtf($p0);
        return $result;
    }
    public function hypotf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->hypotf($p0, $p1);
        return $result;
    }
    public function cbrtf(?float $p0): ?float {
        $result = $this->ffi->cbrtf($p0);
        return $result;
    }
    public function ceilf(?float $p0): ?float {
        $result = $this->ffi->ceilf($p0);
        return $result;
    }
    public function fabsf(?float $p0): ?float {
        $result = $this->ffi->fabsf($p0);
        return $result;
    }
    public function floorf(?float $p0): ?float {
        $result = $this->ffi->floorf($p0);
        return $result;
    }
    public function fmodf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmodf($p0, $p1);
        return $result;
    }
    public function isinff(?float $p0): ?int {
        $result = $this->ffi->isinff($p0);
        return $result;
    }
    public function finitef(?float $p0): ?int {
        $result = $this->ffi->finitef($p0);
        return $result;
    }
    public function dremf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->dremf($p0, $p1);
        return $result;
    }
    public function significandf(?float $p0): ?float {
        $result = $this->ffi->significandf($p0);
        return $result;
    }
    public function copysignf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->copysignf($p0, $p1);
        return $result;
    }
    public function nanf(?string $p0): ?float {
        $result = $this->ffi->nanf($p0);
        return $result;
    }
    public function isnanf(?float $p0): ?int {
        $result = $this->ffi->isnanf($p0);
        return $result;
    }
    public function j0f(?float $p0): ?float {
        $result = $this->ffi->j0f($p0);
        return $result;
    }
    public function j1f(?float $p0): ?float {
        $result = $this->ffi->j1f($p0);
        return $result;
    }
    public function jnf(?int $p0, ?float $p1): ?float {
        $result = $this->ffi->jnf($p0, $p1);
        return $result;
    }
    public function y0f(?float $p0): ?float {
        $result = $this->ffi->y0f($p0);
        return $result;
    }
    public function y1f(?float $p0): ?float {
        $result = $this->ffi->y1f($p0);
        return $result;
    }
    public function ynf(?int $p0, ?float $p1): ?float {
        $result = $this->ffi->ynf($p0, $p1);
        return $result;
    }
    public function erff(?float $p0): ?float {
        $result = $this->ffi->erff($p0);
        return $result;
    }
    public function erfcf(?float $p0): ?float {
        $result = $this->ffi->erfcf($p0);
        return $result;
    }
    public function lgammaf(?float $p0): ?float {
        $result = $this->ffi->lgammaf($p0);
        return $result;
    }
    public function tgammaf(?float $p0): ?float {
        $result = $this->ffi->tgammaf($p0);
        return $result;
    }
    public function gammaf(?float $p0): ?float {
        $result = $this->ffi->gammaf($p0);
        return $result;
    }
    public function lgammaf_r(?float $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->lgammaf_r($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function rintf(?float $p0): ?float {
        $result = $this->ffi->rintf($p0);
        return $result;
    }
    public function nextafterf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->nextafterf($p0, $p1);
        return $result;
    }
    public function nexttowardf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->nexttowardf($p0, $p1);
        return $result;
    }
    public function remainderf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->remainderf($p0, $p1);
        return $result;
    }
    public function scalbnf(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->scalbnf($p0, $p1);
        return $result;
    }
    public function ilogbf(?float $p0): ?int {
        $result = $this->ffi->ilogbf($p0);
        return $result;
    }
    public function scalblnf(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->scalblnf($p0, $p1);
        return $result;
    }
    public function nearbyintf(?float $p0): ?float {
        $result = $this->ffi->nearbyintf($p0);
        return $result;
    }
    public function roundf(?float $p0): ?float {
        $result = $this->ffi->roundf($p0);
        return $result;
    }
    public function truncf(?float $p0): ?float {
        $result = $this->ffi->truncf($p0);
        return $result;
    }
    public function remquof(?float $p0, ?float $p1, ?int_ptr $p2): ?float {
        $result = $this->ffi->remquof($p0, $p1, $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function lrintf(?float $p0): ?int {
        $result = $this->ffi->lrintf($p0);
        return $result;
    }
    public function llrintf(?float $p0): ?int {
        $result = $this->ffi->llrintf($p0);
        return $result;
    }
    public function lroundf(?float $p0): ?int {
        $result = $this->ffi->lroundf($p0);
        return $result;
    }
    public function llroundf(?float $p0): ?int {
        $result = $this->ffi->llroundf($p0);
        return $result;
    }
    public function fdimf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fdimf($p0, $p1);
        return $result;
    }
    public function fmaxf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmaxf($p0, $p1);
        return $result;
    }
    public function fminf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fminf($p0, $p1);
        return $result;
    }
    public function fmaf(?float $p0, ?float $p1, ?float $p2): ?float {
        $result = $this->ffi->fmaf($p0, $p1, $p2);
        return $result;
    }
    public function scalbf(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->scalbf($p0, $p1);
        return $result;
    }
    public function acosl(?float $p0): ?float {
        $result = $this->ffi->acosl($p0);
        return $result;
    }
    public function asinl(?float $p0): ?float {
        $result = $this->ffi->asinl($p0);
        return $result;
    }
    public function atanl(?float $p0): ?float {
        $result = $this->ffi->atanl($p0);
        return $result;
    }
    public function atan2l(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->atan2l($p0, $p1);
        return $result;
    }
    public function cosl(?float $p0): ?float {
        $result = $this->ffi->cosl($p0);
        return $result;
    }
    public function sinl(?float $p0): ?float {
        $result = $this->ffi->sinl($p0);
        return $result;
    }
    public function tanl(?float $p0): ?float {
        $result = $this->ffi->tanl($p0);
        return $result;
    }
    public function coshl(?float $p0): ?float {
        $result = $this->ffi->coshl($p0);
        return $result;
    }
    public function sinhl(?float $p0): ?float {
        $result = $this->ffi->sinhl($p0);
        return $result;
    }
    public function tanhl(?float $p0): ?float {
        $result = $this->ffi->tanhl($p0);
        return $result;
    }
    public function acoshl(?float $p0): ?float {
        $result = $this->ffi->acoshl($p0);
        return $result;
    }
    public function asinhl(?float $p0): ?float {
        $result = $this->ffi->asinhl($p0);
        return $result;
    }
    public function atanhl(?float $p0): ?float {
        $result = $this->ffi->atanhl($p0);
        return $result;
    }
    public function expl(?float $p0): ?float {
        $result = $this->ffi->expl($p0);
        return $result;
    }
    public function frexpl(?float $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->frexpl($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function ldexpl(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->ldexpl($p0, $p1);
        return $result;
    }
    public function logl(?float $p0): ?float {
        $result = $this->ffi->logl($p0);
        return $result;
    }
    public function log10l(?float $p0): ?float {
        $result = $this->ffi->log10l($p0);
        return $result;
    }
    public function modfl(?float $p0, ?float_ptr $p1): ?float {
        $result = $this->ffi->modfl($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function expm1l(?float $p0): ?float {
        $result = $this->ffi->expm1l($p0);
        return $result;
    }
    public function log1pl(?float $p0): ?float {
        $result = $this->ffi->log1pl($p0);
        return $result;
    }
    public function logbl(?float $p0): ?float {
        $result = $this->ffi->logbl($p0);
        return $result;
    }
    public function exp2l(?float $p0): ?float {
        $result = $this->ffi->exp2l($p0);
        return $result;
    }
    public function log2l(?float $p0): ?float {
        $result = $this->ffi->log2l($p0);
        return $result;
    }
    public function powl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->powl($p0, $p1);
        return $result;
    }
    public function sqrtl(?float $p0): ?float {
        $result = $this->ffi->sqrtl($p0);
        return $result;
    }
    public function hypotl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->hypotl($p0, $p1);
        return $result;
    }
    public function cbrtl(?float $p0): ?float {
        $result = $this->ffi->cbrtl($p0);
        return $result;
    }
    public function ceill(?float $p0): ?float {
        $result = $this->ffi->ceill($p0);
        return $result;
    }
    public function fabsl(?float $p0): ?float {
        $result = $this->ffi->fabsl($p0);
        return $result;
    }
    public function floorl(?float $p0): ?float {
        $result = $this->ffi->floorl($p0);
        return $result;
    }
    public function fmodl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmodl($p0, $p1);
        return $result;
    }
    public function isinfl(?float $p0): ?int {
        $result = $this->ffi->isinfl($p0);
        return $result;
    }
    public function finitel(?float $p0): ?int {
        $result = $this->ffi->finitel($p0);
        return $result;
    }
    public function dreml(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->dreml($p0, $p1);
        return $result;
    }
    public function significandl(?float $p0): ?float {
        $result = $this->ffi->significandl($p0);
        return $result;
    }
    public function copysignl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->copysignl($p0, $p1);
        return $result;
    }
    public function nanl(?string $p0): ?float {
        $result = $this->ffi->nanl($p0);
        return $result;
    }
    public function isnanl(?float $p0): ?int {
        $result = $this->ffi->isnanl($p0);
        return $result;
    }
    public function j0l(?float $p0): ?float {
        $result = $this->ffi->j0l($p0);
        return $result;
    }
    public function j1l(?float $p0): ?float {
        $result = $this->ffi->j1l($p0);
        return $result;
    }
    public function jnl(?int $p0, ?float $p1): ?float {
        $result = $this->ffi->jnl($p0, $p1);
        return $result;
    }
    public function y0l(?float $p0): ?float {
        $result = $this->ffi->y0l($p0);
        return $result;
    }
    public function y1l(?float $p0): ?float {
        $result = $this->ffi->y1l($p0);
        return $result;
    }
    public function ynl(?int $p0, ?float $p1): ?float {
        $result = $this->ffi->ynl($p0, $p1);
        return $result;
    }
    public function erfl(?float $p0): ?float {
        $result = $this->ffi->erfl($p0);
        return $result;
    }
    public function erfcl(?float $p0): ?float {
        $result = $this->ffi->erfcl($p0);
        return $result;
    }
    public function lgammal(?float $p0): ?float {
        $result = $this->ffi->lgammal($p0);
        return $result;
    }
    public function tgammal(?float $p0): ?float {
        $result = $this->ffi->tgammal($p0);
        return $result;
    }
    public function gammal(?float $p0): ?float {
        $result = $this->ffi->gammal($p0);
        return $result;
    }
    public function lgammal_r(?float $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->lgammal_r($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function rintl(?float $p0): ?float {
        $result = $this->ffi->rintl($p0);
        return $result;
    }
    public function nextafterl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->nextafterl($p0, $p1);
        return $result;
    }
    public function nexttowardl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->nexttowardl($p0, $p1);
        return $result;
    }
    public function remainderl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->remainderl($p0, $p1);
        return $result;
    }
    public function scalbnl(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->scalbnl($p0, $p1);
        return $result;
    }
    public function ilogbl(?float $p0): ?int {
        $result = $this->ffi->ilogbl($p0);
        return $result;
    }
    public function scalblnl(?float $p0, ?int $p1): ?float {
        $result = $this->ffi->scalblnl($p0, $p1);
        return $result;
    }
    public function nearbyintl(?float $p0): ?float {
        $result = $this->ffi->nearbyintl($p0);
        return $result;
    }
    public function roundl(?float $p0): ?float {
        $result = $this->ffi->roundl($p0);
        return $result;
    }
    public function truncl(?float $p0): ?float {
        $result = $this->ffi->truncl($p0);
        return $result;
    }
    public function remquol(?float $p0, ?float $p1, ?int_ptr $p2): ?float {
        $result = $this->ffi->remquol($p0, $p1, $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function lrintl(?float $p0): ?int {
        $result = $this->ffi->lrintl($p0);
        return $result;
    }
    public function llrintl(?float $p0): ?int {
        $result = $this->ffi->llrintl($p0);
        return $result;
    }
    public function lroundl(?float $p0): ?int {
        $result = $this->ffi->lroundl($p0);
        return $result;
    }
    public function llroundl(?float $p0): ?int {
        $result = $this->ffi->llroundl($p0);
        return $result;
    }
    public function fdiml(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fdiml($p0, $p1);
        return $result;
    }
    public function fmaxl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fmaxl($p0, $p1);
        return $result;
    }
    public function fminl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->fminl($p0, $p1);
        return $result;
    }
    public function fmal(?float $p0, ?float $p1, ?float $p2): ?float {
        $result = $this->ffi->fmal($p0, $p1, $p2);
        return $result;
    }
    public function scalbl(?float $p0, ?float $p1): ?float {
        $result = $this->ffi->scalbl($p0, $p1);
        return $result;
    }
    // typedefenum _LIB_VERSION_TYPE
    const _IEEE_ = ((-1)) + 0;
    const _SVID_ = ((-1)) + 1;
    const _XOPEN_ = ((-1)) + 2;
    const _POSIX_ = ((-1)) + 3;
    const _ISOC_ = ((-1)) + 4;
    public function matherr(?exception_ptr $p0): ?int {
        $result = $this->ffi->matherr($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function imaxabs(?int $p0): ?int {
        $result = $this->ffi->imaxabs($p0);
        return $result;
    }
    public function imaxdiv(?int $p0, ?int $p1): ?imaxdiv_t {
        $result = $this->ffi->imaxdiv($p0, $p1);
        return $result === null ? null : new imaxdiv_t($result);
    }
    public function strtoimax(?string $p0, ?string_ptr $p1, ?int $p2): ?int {
        $result = $this->ffi->strtoimax($p0, $p1 === null ? null : $p1->getData(), $p2);
        return $result;
    }
    public function strtoumax(?string $p0, ?string_ptr $p1, ?int $p2): ?int {
        $result = $this->ffi->strtoumax($p0, $p1 === null ? null : $p1->getData(), $p2);
        return $result;
    }
    public function wcstoimax(?int_ptr $p0, ?int_ptr_ptr $p1, ?int $p2): ?int {
        $result = $this->ffi->wcstoimax($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result;
    }
    public function wcstoumax(?int_ptr $p0, ?int_ptr_ptr $p1, ?int $p2): ?int {
        $result = $this->ffi->wcstoumax($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result;
    }
    public function select(?int $p0, ?fd_set_ptr $p1, ?fd_set_ptr $p2, ?fd_set_ptr $p3, ?timeval_ptr $p4): ?int {
        $result = $this->ffi->select($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4 === null ? null : $p4->getData());
        return $result;
    }
    public function pselect(?int $p0, ?fd_set_ptr $p1, ?fd_set_ptr $p2, ?fd_set_ptr $p3, ?timespec_ptr $p4, ?__sigset_t_ptr $p5): ?int {
        $result = $this->ffi->pselect($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4 === null ? null : $p4->getData(), $p5 === null ? null : $p5->getData());
        return $result;
    }
    public function gettimeofday(?timeval_ptr $p0, ?__timezone_ptr_t $p1): ?int {
        $result = $this->ffi->gettimeofday($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function settimeofday(?timeval_ptr $p0, ?timezone_ptr $p1): ?int {
        $result = $this->ffi->settimeofday($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function adjtime(?timeval_ptr $p0, ?timeval_ptr $p1): ?int {
        $result = $this->ffi->adjtime($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    // enum __itimer_which
    const ITIMER_REAL = (0) + 0;
    const ITIMER_VIRTUAL = (1) + 0;
    const ITIMER_PROF = (2) + 0;
    public function getitimer(?int $p0, ?itimerval_ptr $p1): ?int {
        $result = $this->ffi->getitimer($p0, $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function setitimer(?int $p0, ?itimerval_ptr $p1, ?itimerval_ptr $p2): ?int {
        $result = $this->ffi->setitimer($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function utimes(?string $p0, ?array $p1): ?int {
        $result = $this->ffi->utimes($p0, $p1);
        return $result;
    }
    public function lutimes(?string $p0, ?array $p1): ?int {
        $result = $this->ffi->lutimes($p0, $p1);
        return $result;
    }
    public function futimes(?int $p0, ?array $p1): ?int {
        $result = $this->ffi->futimes($p0, $p1);
        return $result;
    }
    public function gnu_dev_major(?int $p0): ?int {
        $result = $this->ffi->gnu_dev_major($p0);
        return $result;
    }
    public function gnu_dev_minor(?int $p0): ?int {
        $result = $this->ffi->gnu_dev_minor($p0);
        return $result;
    }
    public function gnu_dev_makedev(?int $p0, ?int $p1): ?int {
        $result = $this->ffi->gnu_dev_makedev($p0, $p1);
        return $result;
    }
    // typedefenum LLVMOpcode
    const LLVMRet = (1) + 0;
    const LLVMBr = (2) + 0;
    const LLVMSwitch = (3) + 0;
    const LLVMIndirectBr = (4) + 0;
    const LLVMInvoke = (5) + 0;
    const LLVMUnreachable = (7) + 0;
    const LLVMAdd = (8) + 0;
    const LLVMFAdd = (9) + 0;
    const LLVMSub = (10) + 0;
    const LLVMFSub = (11) + 0;
    const LLVMMul = (12) + 0;
    const LLVMFMul = (13) + 0;
    const LLVMUDiv = (14) + 0;
    const LLVMSDiv = (15) + 0;
    const LLVMFDiv = (16) + 0;
    const LLVMURem = (17) + 0;
    const LLVMSRem = (18) + 0;
    const LLVMFRem = (19) + 0;
    const LLVMShl = (20) + 0;
    const LLVMLShr = (21) + 0;
    const LLVMAShr = (22) + 0;
    const LLVMAnd = (23) + 0;
    const LLVMOr = (24) + 0;
    const LLVMXor = (25) + 0;
    const LLVMAlloca = (26) + 0;
    const LLVMLoad = (27) + 0;
    const LLVMStore = (28) + 0;
    const LLVMGetElementPtr = (29) + 0;
    const LLVMTrunc = (30) + 0;
    const LLVMZExt = (31) + 0;
    const LLVMSExt = (32) + 0;
    const LLVMFPToUI = (33) + 0;
    const LLVMFPToSI = (34) + 0;
    const LLVMUIToFP = (35) + 0;
    const LLVMSIToFP = (36) + 0;
    const LLVMFPTrunc = (37) + 0;
    const LLVMFPExt = (38) + 0;
    const LLVMPtrToInt = (39) + 0;
    const LLVMIntToPtr = (40) + 0;
    const LLVMBitCast = (41) + 0;
    const LLVMAddrSpaceCast = (60) + 0;
    const LLVMICmp = (42) + 0;
    const LLVMFCmp = (43) + 0;
    const LLVMPHI = (44) + 0;
    const LLVMCall = (45) + 0;
    const LLVMSelect = (46) + 0;
    const LLVMUserOp1 = (47) + 0;
    const LLVMUserOp2 = (48) + 0;
    const LLVMVAArg = (49) + 0;
    const LLVMExtractElement = (50) + 0;
    const LLVMInsertElement = (51) + 0;
    const LLVMShuffleVector = (52) + 0;
    const LLVMExtractValue = (53) + 0;
    const LLVMInsertValue = (54) + 0;
    const LLVMFence = (55) + 0;
    const LLVMAtomicCmpXchg = (56) + 0;
    const LLVMAtomicRMW = (57) + 0;
    const LLVMResume = (58) + 0;
    const LLVMLandingPad = (59) + 0;
    const LLVMCleanupRet = (61) + 0;
    const LLVMCatchRet = (62) + 0;
    const LLVMCatchPad = (63) + 0;
    const LLVMCleanupPad = (64) + 0;
    const LLVMCatchSwitch = (65) + 0;
    // typedefenum LLVMTypeKind
    const LLVMVoidTypeKind = (0) + 0;
    const LLVMHalfTypeKind = (0) + 1;
    const LLVMFloatTypeKind = (0) + 2;
    const LLVMDoubleTypeKind = (0) + 3;
    const LLVMX86_FP80TypeKind = (0) + 4;
    const LLVMFP128TypeKind = (0) + 5;
    const LLVMPPC_FP128TypeKind = (0) + 6;
    const LLVMLabelTypeKind = (0) + 7;
    const LLVMIntegerTypeKind = (0) + 8;
    const LLVMFunctionTypeKind = (0) + 9;
    const LLVMStructTypeKind = (0) + 10;
    const LLVMArrayTypeKind = (0) + 11;
    const LLVMPointerTypeKind = (0) + 12;
    const LLVMVectorTypeKind = (0) + 13;
    const LLVMMetadataTypeKind = (0) + 14;
    const LLVMX86_MMXTypeKind = (0) + 15;
    const LLVMTokenTypeKind = (0) + 16;
    // typedefenum LLVMLinkage
    const LLVMExternalLinkage = (0) + 0;
    const LLVMAvailableExternallyLinkage = (0) + 1;
    const LLVMLinkOnceAnyLinkage = (0) + 2;
    const LLVMLinkOnceODRLinkage = (0) + 3;
    const LLVMLinkOnceODRAutoHideLinkage = (0) + 4;
    const LLVMWeakAnyLinkage = (0) + 5;
    const LLVMWeakODRLinkage = (0) + 6;
    const LLVMAppendingLinkage = (0) + 7;
    const LLVMInternalLinkage = (0) + 8;
    const LLVMPrivateLinkage = (0) + 9;
    const LLVMDLLImportLinkage = (0) + 10;
    const LLVMDLLExportLinkage = (0) + 11;
    const LLVMExternalWeakLinkage = (0) + 12;
    const LLVMGhostLinkage = (0) + 13;
    const LLVMCommonLinkage = (0) + 14;
    const LLVMLinkerPrivateLinkage = (0) + 15;
    const LLVMLinkerPrivateWeakLinkage = (0) + 16;
    // typedefenum LLVMVisibility
    const LLVMDefaultVisibility = (0) + 0;
    const LLVMHiddenVisibility = (0) + 1;
    const LLVMProtectedVisibility = (0) + 2;
    // typedefenum LLVMDLLStorageClass
    const LLVMDefaultStorageClass = (0) + 0;
    const LLVMDLLImportStorageClass = (1) + 0;
    const LLVMDLLExportStorageClass = (2) + 0;
    // typedefenum LLVMCallConv
    const LLVMCCallConv = (0) + 0;
    const LLVMFastCallConv = (8) + 0;
    const LLVMColdCallConv = (9) + 0;
    const LLVMWebKitJSCallConv = (12) + 0;
    const LLVMAnyRegCallConv = (13) + 0;
    const LLVMX86StdcallCallConv = (64) + 0;
    const LLVMX86FastcallCallConv = (65) + 0;
    // typedefenum LLVMValueKind
    const LLVMArgumentValueKind = (0) + 0;
    const LLVMBasicBlockValueKind = (0) + 1;
    const LLVMMemoryUseValueKind = (0) + 2;
    const LLVMMemoryDefValueKind = (0) + 3;
    const LLVMMemoryPhiValueKind = (0) + 4;
    const LLVMFunctionValueKind = (0) + 5;
    const LLVMGlobalAliasValueKind = (0) + 6;
    const LLVMGlobalIFuncValueKind = (0) + 7;
    const LLVMGlobalVariableValueKind = (0) + 8;
    const LLVMBlockAddressValueKind = (0) + 9;
    const LLVMConstantExprValueKind = (0) + 10;
    const LLVMConstantArrayValueKind = (0) + 11;
    const LLVMConstantStructValueKind = (0) + 12;
    const LLVMConstantVectorValueKind = (0) + 13;
    const LLVMUndefValueValueKind = (0) + 14;
    const LLVMConstantAggregateZeroValueKind = (0) + 15;
    const LLVMConstantDataArrayValueKind = (0) + 16;
    const LLVMConstantDataVectorValueKind = (0) + 17;
    const LLVMConstantIntValueKind = (0) + 18;
    const LLVMConstantFPValueKind = (0) + 19;
    const LLVMConstantPointerNullValueKind = (0) + 20;
    const LLVMConstantTokenNoneValueKind = (0) + 21;
    const LLVMMetadataAsValueValueKind = (0) + 22;
    const LLVMInlineAsmValueKind = (0) + 23;
    const LLVMInstructionValueKind = (0) + 24;
    // typedefenum LLVMIntPredicate
    const LLVMIntEQ = (32) + 0;
    const LLVMIntNE = (32) + 1;
    const LLVMIntUGT = (32) + 2;
    const LLVMIntUGE = (32) + 3;
    const LLVMIntULT = (32) + 4;
    const LLVMIntULE = (32) + 5;
    const LLVMIntSGT = (32) + 6;
    const LLVMIntSGE = (32) + 7;
    const LLVMIntSLT = (32) + 8;
    const LLVMIntSLE = (32) + 9;
    // typedefenum LLVMRealPredicate
    const LLVMRealPredicateFalse = (0) + 0;
    const LLVMRealOEQ = (0) + 1;
    const LLVMRealOGT = (0) + 2;
    const LLVMRealOGE = (0) + 3;
    const LLVMRealOLT = (0) + 4;
    const LLVMRealOLE = (0) + 5;
    const LLVMRealONE = (0) + 6;
    const LLVMRealORD = (0) + 7;
    const LLVMRealUNO = (0) + 8;
    const LLVMRealUEQ = (0) + 9;
    const LLVMRealUGT = (0) + 10;
    const LLVMRealUGE = (0) + 11;
    const LLVMRealULT = (0) + 12;
    const LLVMRealULE = (0) + 13;
    const LLVMRealUNE = (0) + 14;
    const LLVMRealPredicateTrue = (0) + 15;
    // typedefenum LLVMLandingPadClauseTy
    const LLVMLandingPadCatch = (0) + 0;
    const LLVMLandingPadFilter = (0) + 1;
    // typedefenum LLVMThreadLocalMode
    const LLVMNotThreadLocal = (0) + 0;
    const LLVMGeneralDynamicTLSModel = (0) + 1;
    const LLVMLocalDynamicTLSModel = (0) + 2;
    const LLVMInitialExecTLSModel = (0) + 3;
    const LLVMLocalExecTLSModel = (0) + 4;
    // typedefenum LLVMAtomicOrdering
    const LLVMAtomicOrderingNotAtomic = (0) + 0;
    const LLVMAtomicOrderingUnordered = (1) + 0;
    const LLVMAtomicOrderingMonotonic = (2) + 0;
    const LLVMAtomicOrderingAcquire = (4) + 0;
    const LLVMAtomicOrderingRelease = (5) + 0;
    const LLVMAtomicOrderingAcquireRelease = (6) + 0;
    const LLVMAtomicOrderingSequentiallyConsistent = (7) + 0;
    // typedefenum LLVMAtomicRMWBinOp
    const LLVMAtomicRMWBinOpXchg = (0) + 0;
    const LLVMAtomicRMWBinOpAdd = (0) + 1;
    const LLVMAtomicRMWBinOpSub = (0) + 2;
    const LLVMAtomicRMWBinOpAnd = (0) + 3;
    const LLVMAtomicRMWBinOpNand = (0) + 4;
    const LLVMAtomicRMWBinOpOr = (0) + 5;
    const LLVMAtomicRMWBinOpXor = (0) + 6;
    const LLVMAtomicRMWBinOpMax = (0) + 7;
    const LLVMAtomicRMWBinOpMin = (0) + 8;
    const LLVMAtomicRMWBinOpUMax = (0) + 9;
    const LLVMAtomicRMWBinOpUMin = (0) + 10;
    // typedefenum LLVMDiagnosticSeverity
    const LLVMDSError = (0) + 0;
    const LLVMDSWarning = (0) + 1;
    const LLVMDSRemark = (0) + 2;
    const LLVMDSNote = (0) + 3;
    const LLVMAttributeReturnIndex = (0) + 0;
    const LLVMAttributeFunctionIndex = ((-1)) + 0;
    public function LLVMInitializeCore(?LLVMPassRegistryRef $p0): void {
        $this->ffi->LLVMInitializeCore($p0 === null ? null : $p0->getData());
    }
    public function LLVMShutdown(): void {
        $this->ffi->LLVMShutdown();
    }
    public function LLVMCreateMessage(?string $p0): ?string_ {
        $result = $this->ffi->LLVMCreateMessage($p0);
        return $result === null ? null : new string_($result);
    }
    public function LLVMDisposeMessage(?string $p0): void {
        $this->ffi->LLVMDisposeMessage($p0);
    }
    public function LLVMContextCreate(): ?LLVMContextRef {
        $result = $this->ffi->LLVMContextCreate();
        return $result === null ? null : new LLVMContextRef($result);
    }
    public function LLVMGetGlobalContext(): ?LLVMContextRef {
        $result = $this->ffi->LLVMGetGlobalContext();
        return $result === null ? null : new LLVMContextRef($result);
    }
    public function LLVMContextSetDiagnosticHandler(?LLVMContextRef $p0, ?LLVMDiagnosticHandler $p1, ?void_ptr $p2): void {
        $this->ffi->LLVMContextSetDiagnosticHandler($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
    }
    public function LLVMContextGetDiagnosticHandler(?LLVMContextRef $p0): ?LLVMDiagnosticHandler {
        $result = $this->ffi->LLVMContextGetDiagnosticHandler($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMDiagnosticHandler($result);
    }
    public function LLVMContextGetDiagnosticContext(?LLVMContextRef $p0): ?void_ptr {
        $result = $this->ffi->LLVMContextGetDiagnosticContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new void_ptr($result);
    }
    public function LLVMContextSetYieldCallback(?LLVMContextRef $p0, ?LLVMYieldCallback $p1, ?void_ptr $p2): void {
        $this->ffi->LLVMContextSetYieldCallback($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
    }
    public function LLVMContextDispose(?LLVMContextRef $p0): void {
        $this->ffi->LLVMContextDispose($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetDiagInfoDescription(?LLVMDiagnosticInfoRef $p0): ?string_ {
        $result = $this->ffi->LLVMGetDiagInfoDescription($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMGetDiagInfoSeverity(?LLVMDiagnosticInfoRef $p0): ?int {
        $result = $this->ffi->LLVMGetDiagInfoSeverity($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetMDKindIDInContext(?LLVMContextRef $p0, ?string $p1, ?int $p2): ?int {
        $result = $this->ffi->LLVMGetMDKindIDInContext($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result;
    }
    public function LLVMGetMDKindID(?string $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMGetMDKindID($p0, $p1);
        return $result;
    }
    public function LLVMGetEnumAttributeKindForName(?string $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMGetEnumAttributeKindForName($p0, $p1);
        return $result;
    }
    public function LLVMGetLastEnumAttributeKind(): ?int {
        $result = $this->ffi->LLVMGetLastEnumAttributeKind();
        return $result;
    }
    public function LLVMCreateEnumAttribute(?LLVMContextRef $p0, ?int $p1, ?int $p2): ?LLVMAttributeRef {
        $result = $this->ffi->LLVMCreateEnumAttribute($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMAttributeRef($result);
    }
    public function LLVMGetEnumAttributeKind(?LLVMAttributeRef $p0): ?int {
        $result = $this->ffi->LLVMGetEnumAttributeKind($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetEnumAttributeValue(?LLVMAttributeRef $p0): ?int {
        $result = $this->ffi->LLVMGetEnumAttributeValue($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMCreateStringAttribute(?LLVMContextRef $p0, ?string $p1, ?int $p2, ?string $p3, ?int $p4): ?LLVMAttributeRef {
        $result = $this->ffi->LLVMCreateStringAttribute($p0 === null ? null : $p0->getData(), $p1, $p2, $p3, $p4);
        return $result === null ? null : new LLVMAttributeRef($result);
    }
    public function LLVMGetStringAttributeKind(?LLVMAttributeRef $p0, ?int_ptr $p1): ?int_ptr {
        $result = $this->ffi->LLVMGetStringAttributeKind($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetStringAttributeValue(?LLVMAttributeRef $p0, ?int_ptr $p1): ?int_ptr {
        $result = $this->ffi->LLVMGetStringAttributeValue($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMIsEnumAttribute(?LLVMAttributeRef $p0): ?int {
        $result = $this->ffi->LLVMIsEnumAttribute($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMIsStringAttribute(?LLVMAttributeRef $p0): ?int {
        $result = $this->ffi->LLVMIsStringAttribute($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMModuleCreateWithName(?string $p0): ?LLVMModuleRef {
        $result = $this->ffi->LLVMModuleCreateWithName($p0);
        return $result === null ? null : new LLVMModuleRef($result);
    }
    public function LLVMModuleCreateWithNameInContext(?string $p0, ?LLVMContextRef $p1): ?LLVMModuleRef {
        $result = $this->ffi->LLVMModuleCreateWithNameInContext($p0, $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMModuleRef($result);
    }
    public function LLVMCloneModule(?LLVMModuleRef $p0): ?LLVMModuleRef {
        $result = $this->ffi->LLVMCloneModule($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMModuleRef($result);
    }
    public function LLVMDisposeModule(?LLVMModuleRef $p0): void {
        $this->ffi->LLVMDisposeModule($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetModuleIdentifier(?LLVMModuleRef $p0, ?int_ptr $p1): ?int_ptr {
        $result = $this->ffi->LLVMGetModuleIdentifier($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMSetModuleIdentifier(?LLVMModuleRef $p0, ?string $p1, ?int $p2): void {
        $this->ffi->LLVMSetModuleIdentifier($p0 === null ? null : $p0->getData(), $p1, $p2);
    }
    public function LLVMGetDataLayoutStr(?LLVMModuleRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetDataLayoutStr($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetDataLayout(?LLVMModuleRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetDataLayout($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMSetDataLayout(?LLVMModuleRef $p0, ?string $p1): void {
        $this->ffi->LLVMSetDataLayout($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetTarget(?LLVMModuleRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetTarget($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMSetTarget(?LLVMModuleRef $p0, ?string $p1): void {
        $this->ffi->LLVMSetTarget($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMDumpModule(?LLVMModuleRef $p0): void {
        $this->ffi->LLVMDumpModule($p0 === null ? null : $p0->getData());
    }
    public function LLVMPrintModuleToFile(?LLVMModuleRef $p0, ?string $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMPrintModuleToFile($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMPrintModuleToString(?LLVMModuleRef $p0): ?string_ {
        $result = $this->ffi->LLVMPrintModuleToString($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMSetModuleInlineAsm(?LLVMModuleRef $p0, ?string $p1): void {
        $this->ffi->LLVMSetModuleInlineAsm($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetModuleContext(?LLVMModuleRef $p0): ?LLVMContextRef {
        $result = $this->ffi->LLVMGetModuleContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMContextRef($result);
    }
    public function LLVMGetTypeByName(?LLVMModuleRef $p0, ?string $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMGetTypeByName($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetNamedMetadataNumOperands(?LLVMModuleRef $p0, ?string $p1): ?int {
        $result = $this->ffi->LLVMGetNamedMetadataNumOperands($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMGetNamedMetadataOperands(?LLVMModuleRef $p0, ?string $p1, ?LLVMValueRef_ptr $p2): void {
        $this->ffi->LLVMGetNamedMetadataOperands($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMAddNamedMetadataOperand(?LLVMModuleRef $p0, ?string $p1, ?LLVMValueRef $p2): void {
        $this->ffi->LLVMAddNamedMetadataOperand($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMAddFunction(?LLVMModuleRef $p0, ?string $p1, ?LLVMTypeRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMAddFunction($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetNamedFunction(?LLVMModuleRef $p0, ?string $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetNamedFunction($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetFirstFunction(?LLVMModuleRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetFirstFunction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetLastFunction(?LLVMModuleRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetLastFunction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetNextFunction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetNextFunction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetPreviousFunction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetPreviousFunction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetTypeKind(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMGetTypeKind($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMTypeIsSized(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMTypeIsSized($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetTypeContext(?LLVMTypeRef $p0): ?LLVMContextRef {
        $result = $this->ffi->LLVMGetTypeContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMContextRef($result);
    }
    public function LLVMDumpType(?LLVMTypeRef $p0): void {
        $this->ffi->LLVMDumpType($p0 === null ? null : $p0->getData());
    }
    public function LLVMPrintTypeToString(?LLVMTypeRef $p0): ?string_ {
        $result = $this->ffi->LLVMPrintTypeToString($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMInt1TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt1TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt8TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt8TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt16TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt16TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt32TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt32TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt64TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt64TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt128TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt128TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIntTypeInContext(?LLVMContextRef $p0, ?int $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMIntTypeInContext($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt1Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt1Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt8Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt8Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt16Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt16Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt32Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt32Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt64Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt64Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMInt128Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMInt128Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIntType(?int $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMIntType($p0);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetIntTypeWidth(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMGetIntTypeWidth($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMHalfTypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMHalfTypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMFloatTypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMFloatTypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMDoubleTypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMDoubleTypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMX86FP80TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMX86FP80TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMFP128TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMFP128TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMPPCFP128TypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMPPCFP128TypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMHalfType(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMHalfType();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMFloatType(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMFloatType();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMDoubleType(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMDoubleType();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMX86FP80Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMX86FP80Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMFP128Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMFP128Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMPPCFP128Type(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMPPCFP128Type();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMFunctionType(?LLVMTypeRef $p0, ?LLVMTypeRef_ptr $p1, ?int $p2, ?int $p3): ?LLVMTypeRef {
        $result = $this->ffi->LLVMFunctionType($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIsFunctionVarArg(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMIsFunctionVarArg($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetReturnType(?LLVMTypeRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMGetReturnType($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMCountParamTypes(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMCountParamTypes($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetParamTypes(?LLVMTypeRef $p0, ?LLVMTypeRef_ptr $p1): void {
        $this->ffi->LLVMGetParamTypes($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMStructTypeInContext(?LLVMContextRef $p0, ?LLVMTypeRef_ptr $p1, ?int $p2, ?int $p3): ?LLVMTypeRef {
        $result = $this->ffi->LLVMStructTypeInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMStructType(?LLVMTypeRef_ptr $p0, ?int $p1, ?int $p2): ?LLVMTypeRef {
        $result = $this->ffi->LLVMStructType($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMStructCreateNamed(?LLVMContextRef $p0, ?string $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMStructCreateNamed($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetStructName(?LLVMTypeRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetStructName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMStructSetBody(?LLVMTypeRef $p0, ?LLVMTypeRef_ptr $p1, ?int $p2, ?int $p3): void {
        $this->ffi->LLVMStructSetBody($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
    }
    public function LLVMCountStructElementTypes(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMCountStructElementTypes($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetStructElementTypes(?LLVMTypeRef $p0, ?LLVMTypeRef_ptr $p1): void {
        $this->ffi->LLVMGetStructElementTypes($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMStructGetTypeAtIndex(?LLVMTypeRef $p0, ?int $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMStructGetTypeAtIndex($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIsPackedStruct(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMIsPackedStruct($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMIsOpaqueStruct(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMIsOpaqueStruct($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetElementType(?LLVMTypeRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMGetElementType($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMArrayType(?LLVMTypeRef $p0, ?int $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMArrayType($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetArrayLength(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMGetArrayLength($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMPointerType(?LLVMTypeRef $p0, ?int $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMPointerType($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetPointerAddressSpace(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMGetPointerAddressSpace($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMVectorType(?LLVMTypeRef $p0, ?int $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMVectorType($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetVectorSize(?LLVMTypeRef $p0): ?int {
        $result = $this->ffi->LLVMGetVectorSize($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMVoidTypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMVoidTypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMLabelTypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMLabelTypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMX86MMXTypeInContext(?LLVMContextRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMX86MMXTypeInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMVoidType(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMVoidType();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMLabelType(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMLabelType();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMX86MMXType(): ?LLVMTypeRef {
        $result = $this->ffi->LLVMX86MMXType();
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMTypeOf(?LLVMValueRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMTypeOf($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMGetValueKind(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetValueKind($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetValueName(?LLVMValueRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetValueName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMSetValueName(?LLVMValueRef $p0, ?string $p1): void {
        $this->ffi->LLVMSetValueName($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMDumpValue(?LLVMValueRef $p0): void {
        $this->ffi->LLVMDumpValue($p0 === null ? null : $p0->getData());
    }
    public function LLVMPrintValueToString(?LLVMValueRef $p0): ?string_ {
        $result = $this->ffi->LLVMPrintValueToString($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMReplaceAllUsesWith(?LLVMValueRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMReplaceAllUsesWith($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMIsConstant(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsConstant($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMIsUndef(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsUndef($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMIsAArgument(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAArgument($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsABasicBlock(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsABasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAInlineAsm(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAInlineAsm($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAUser(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAUser($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstant(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstant($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsABlockAddress(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsABlockAddress($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantAggregateZero(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantAggregateZero($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantArray(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantArray($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantDataSequential(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantDataSequential($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantDataArray(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantDataArray($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantDataVector(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantDataVector($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantExpr(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantExpr($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantFP(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantFP($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantInt(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantInt($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantPointerNull(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantPointerNull($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantStruct(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantStruct($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantTokenNone(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantTokenNone($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAConstantVector(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAConstantVector($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAGlobalValue(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAGlobalValue($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAGlobalAlias(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAGlobalAlias($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAGlobalObject(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAGlobalObject($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFunction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFunction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAGlobalVariable(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAGlobalVariable($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAUndefValue(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAUndefValue($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAInstruction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAInstruction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsABinaryOperator(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsABinaryOperator($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACallInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACallInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAIntrinsicInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAIntrinsicInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsADbgInfoIntrinsic(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsADbgInfoIntrinsic($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsADbgDeclareInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsADbgDeclareInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAMemIntrinsic(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAMemIntrinsic($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAMemCpyInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAMemCpyInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAMemMoveInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAMemMoveInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAMemSetInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAMemSetInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACmpInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACmpInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFCmpInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFCmpInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAICmpInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAICmpInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAExtractElementInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAExtractElementInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAGetElementPtrInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAGetElementPtrInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAInsertElementInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAInsertElementInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAInsertValueInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAInsertValueInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsALandingPadInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsALandingPadInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAPHINode(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAPHINode($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsASelectInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsASelectInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAShuffleVectorInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAShuffleVectorInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAStoreInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAStoreInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsATerminatorInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsATerminatorInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsABranchInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsABranchInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAIndirectBrInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAIndirectBrInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAInvokeInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAInvokeInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAReturnInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAReturnInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsASwitchInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsASwitchInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAUnreachableInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAUnreachableInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAResumeInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAResumeInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACleanupReturnInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACleanupReturnInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACatchReturnInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACatchReturnInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFuncletPadInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFuncletPadInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACatchPadInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACatchPadInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACleanupPadInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACleanupPadInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAUnaryInstruction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAUnaryInstruction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAAllocaInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAAllocaInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsACastInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsACastInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAAddrSpaceCastInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAAddrSpaceCastInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsABitCastInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsABitCastInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFPExtInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFPExtInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFPToSIInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFPToSIInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFPToUIInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFPToUIInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAFPTruncInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAFPTruncInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAIntToPtrInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAIntToPtrInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAPtrToIntInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAPtrToIntInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsASExtInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsASExtInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsASIToFPInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsASIToFPInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsATruncInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsATruncInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAUIToFPInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAUIToFPInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAZExtInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAZExtInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAExtractValueInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAExtractValueInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsALoadInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsALoadInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAVAArgInst(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAVAArgInst($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAMDNode(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAMDNode($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAMDString(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMIsAMDString($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetFirstUse(?LLVMValueRef $p0): ?LLVMUseRef {
        $result = $this->ffi->LLVMGetFirstUse($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMUseRef($result);
    }
    public function LLVMGetNextUse(?LLVMUseRef $p0): ?LLVMUseRef {
        $result = $this->ffi->LLVMGetNextUse($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMUseRef($result);
    }
    public function LLVMGetUser(?LLVMUseRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetUser($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetUsedValue(?LLVMUseRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetUsedValue($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetOperand(?LLVMValueRef $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetOperand($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetOperandUse(?LLVMValueRef $p0, ?int $p1): ?LLVMUseRef {
        $result = $this->ffi->LLVMGetOperandUse($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMUseRef($result);
    }
    public function LLVMSetOperand(?LLVMValueRef $p0, ?int $p1, ?LLVMValueRef $p2): void {
        $this->ffi->LLVMSetOperand($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetNumOperands(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetNumOperands($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMConstNull(?LLVMTypeRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNull($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstAllOnes(?LLVMTypeRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstAllOnes($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetUndef(?LLVMTypeRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetUndef($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsNull(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsNull($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMConstPointerNull(?LLVMTypeRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstPointerNull($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstInt(?LLVMTypeRef $p0, ?int $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstInt($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstIntOfArbitraryPrecision(?LLVMTypeRef $p0, ?int $p1, ?array $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstIntOfArbitraryPrecision($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstIntOfString(?LLVMTypeRef $p0, ?string $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstIntOfString($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstIntOfStringAndSize(?LLVMTypeRef $p0, ?string $p1, ?int $p2, ?int $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstIntOfStringAndSize($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstReal(?LLVMTypeRef $p0, ?float $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstReal($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstRealOfString(?LLVMTypeRef $p0, ?string $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstRealOfString($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstRealOfStringAndSize(?LLVMTypeRef $p0, ?string $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstRealOfStringAndSize($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstIntGetZExtValue(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMConstIntGetZExtValue($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMConstIntGetSExtValue(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMConstIntGetSExtValue($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMConstRealGetDouble(?LLVMValueRef $p0, ?int_ptr $p1): ?float {
        $result = $this->ffi->LLVMConstRealGetDouble($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMConstStringInContext(?LLVMContextRef $p0, ?string $p1, ?int $p2, ?int $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstStringInContext($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstString(?string $p0, ?int $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstString($p0, $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsConstantString(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsConstantString($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetAsString(?LLVMValueRef $p0, ?int_ptr $p1): ?int_ptr {
        $result = $this->ffi->LLVMGetAsString($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMConstStructInContext(?LLVMContextRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2, ?int $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstStructInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstStruct(?LLVMValueRef_ptr $p0, ?int $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstStruct($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstArray(?LLVMTypeRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstArray($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNamedStruct(?LLVMTypeRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNamedStruct($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetElementAsConstant(?LLVMValueRef $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetElementAsConstant($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstVector(?LLVMValueRef_ptr $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstVector($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetConstOpcode(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetConstOpcode($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMAlignOf(?LLVMTypeRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMAlignOf($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSizeOf(?LLVMTypeRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMSizeOf($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNeg(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNeg($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNSWNeg(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNSWNeg($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNUWNeg(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNUWNeg($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFNeg(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFNeg($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNot(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNot($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstAdd(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNSWAdd(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNSWAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNUWAdd(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNUWAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFAdd(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSub(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNSWSub(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNSWSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNUWSub(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNUWSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFSub(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstMul(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNSWMul(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNSWMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstNUWMul(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstNUWMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFMul(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstUDiv(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstUDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstExactUDiv(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstExactUDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSDiv(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstExactSDiv(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstExactSDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFDiv(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstURem(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstURem($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSRem(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSRem($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFRem(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFRem($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstAnd(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstAnd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstOr(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstOr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstXor(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstXor($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstICmp(?int $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstICmp($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFCmp(?int $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFCmp($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstShl(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstShl($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstLShr(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstLShr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstAShr(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstAShr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstGEP(?LLVMValueRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstGEP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstInBoundsGEP(?LLVMValueRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstInBoundsGEP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstTrunc(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstTrunc($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSExt(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSExt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstZExt(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstZExt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFPTrunc(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFPTrunc($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFPExt(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFPExt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstUIToFP(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstUIToFP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSIToFP(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSIToFP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFPToUI(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFPToUI($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFPToSI(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFPToSI($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstPtrToInt(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstPtrToInt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstIntToPtr(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstIntToPtr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstBitCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstAddrSpaceCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstAddrSpaceCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstZExtOrBitCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstZExtOrBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSExtOrBitCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSExtOrBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstTruncOrBitCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstTruncOrBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstPointerCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstPointerCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstIntCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstIntCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstFPCast(?LLVMValueRef $p0, ?LLVMTypeRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstFPCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstSelect(?LLVMValueRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstSelect($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstExtractElement(?LLVMValueRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstExtractElement($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstInsertElement(?LLVMValueRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstInsertElement($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstShuffleVector(?LLVMValueRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstShuffleVector($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstExtractValue(?LLVMValueRef $p0, ?int_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstExtractValue($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstInsertValue(?LLVMValueRef $p0, ?LLVMValueRef $p1, ?int_ptr $p2, ?int $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstInsertValue($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMConstInlineAsm(?LLVMTypeRef $p0, ?string $p1, ?string $p2, ?int $p3, ?int $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMConstInlineAsm($p0 === null ? null : $p0->getData(), $p1, $p2, $p3, $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBlockAddress(?LLVMValueRef $p0, ?LLVMBasicBlockRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMBlockAddress($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetGlobalParent(?LLVMValueRef $p0): ?LLVMModuleRef {
        $result = $this->ffi->LLVMGetGlobalParent($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMModuleRef($result);
    }
    public function LLVMIsDeclaration(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsDeclaration($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetLinkage(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetLinkage($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetLinkage(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetLinkage($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetSection(?LLVMValueRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetSection($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMSetSection(?LLVMValueRef $p0, ?string $p1): void {
        $this->ffi->LLVMSetSection($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetVisibility(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetVisibility($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetVisibility(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetVisibility($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetDLLStorageClass(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetDLLStorageClass($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetDLLStorageClass(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetDLLStorageClass($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMHasUnnamedAddr(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMHasUnnamedAddr($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetUnnamedAddr(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetUnnamedAddr($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetAlignment(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetAlignment($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetAlignment(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetAlignment($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMAddGlobal(?LLVMModuleRef $p0, ?LLVMTypeRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMAddGlobal($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMAddGlobalInAddressSpace(?LLVMModuleRef $p0, ?LLVMTypeRef $p1, ?string $p2, ?int $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMAddGlobalInAddressSpace($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetNamedGlobal(?LLVMModuleRef $p0, ?string $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetNamedGlobal($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetFirstGlobal(?LLVMModuleRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetFirstGlobal($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetLastGlobal(?LLVMModuleRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetLastGlobal($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetNextGlobal(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetNextGlobal($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetPreviousGlobal(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetPreviousGlobal($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMDeleteGlobal(?LLVMValueRef $p0): void {
        $this->ffi->LLVMDeleteGlobal($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetInitializer(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetInitializer($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSetInitializer(?LLVMValueRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMSetInitializer($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMIsThreadLocal(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsThreadLocal($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetThreadLocal(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetThreadLocal($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMIsGlobalConstant(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsGlobalConstant($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetGlobalConstant(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetGlobalConstant($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetThreadLocalMode(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetThreadLocalMode($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetThreadLocalMode(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetThreadLocalMode($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMIsExternallyInitialized(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsExternallyInitialized($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetExternallyInitialized(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetExternallyInitialized($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMAddAlias(?LLVMModuleRef $p0, ?LLVMTypeRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMAddAlias($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMDeleteFunction(?LLVMValueRef $p0): void {
        $this->ffi->LLVMDeleteFunction($p0 === null ? null : $p0->getData());
    }
    public function LLVMHasPersonalityFn(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMHasPersonalityFn($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetPersonalityFn(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetPersonalityFn($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSetPersonalityFn(?LLVMValueRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMSetPersonalityFn($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetIntrinsicID(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetIntrinsicID($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetFunctionCallConv(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetFunctionCallConv($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetFunctionCallConv(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetFunctionCallConv($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetGC(?LLVMValueRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetGC($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMSetGC(?LLVMValueRef $p0, ?string $p1): void {
        $this->ffi->LLVMSetGC($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMAddAttributeAtIndex(?LLVMValueRef $p0, ?int $p1, ?LLVMAttributeRef $p2): void {
        $this->ffi->LLVMAddAttributeAtIndex($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetAttributeCountAtIndex(?LLVMValueRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMGetAttributeCountAtIndex($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMGetAttributesAtIndex(?LLVMValueRef $p0, ?int $p1, ?LLVMAttributeRef_ptr $p2): void {
        $this->ffi->LLVMGetAttributesAtIndex($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetEnumAttributeAtIndex(?LLVMValueRef $p0, ?int $p1, ?int $p2): ?LLVMAttributeRef {
        $result = $this->ffi->LLVMGetEnumAttributeAtIndex($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMAttributeRef($result);
    }
    public function LLVMGetStringAttributeAtIndex(?LLVMValueRef $p0, ?int $p1, ?string $p2, ?int $p3): ?LLVMAttributeRef {
        $result = $this->ffi->LLVMGetStringAttributeAtIndex($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
        return $result === null ? null : new LLVMAttributeRef($result);
    }
    public function LLVMRemoveEnumAttributeAtIndex(?LLVMValueRef $p0, ?int $p1, ?int $p2): void {
        $this->ffi->LLVMRemoveEnumAttributeAtIndex($p0 === null ? null : $p0->getData(), $p1, $p2);
    }
    public function LLVMRemoveStringAttributeAtIndex(?LLVMValueRef $p0, ?int $p1, ?string $p2, ?int $p3): void {
        $this->ffi->LLVMRemoveStringAttributeAtIndex($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
    }
    public function LLVMAddTargetDependentFunctionAttr(?LLVMValueRef $p0, ?string $p1, ?string $p2): void {
        $this->ffi->LLVMAddTargetDependentFunctionAttr($p0 === null ? null : $p0->getData(), $p1, $p2);
    }
    public function LLVMCountParams(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMCountParams($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetParams(?LLVMValueRef $p0, ?LLVMValueRef_ptr $p1): void {
        $this->ffi->LLVMGetParams($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetParam(?LLVMValueRef $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetParam($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetParamParent(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetParamParent($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetFirstParam(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetFirstParam($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetLastParam(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetLastParam($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetNextParam(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetNextParam($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetPreviousParam(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetPreviousParam($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSetParamAlignment(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetParamAlignment($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMMDStringInContext(?LLVMContextRef $p0, ?string $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMMDStringInContext($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMMDString(?string $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMMDString($p0, $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMMDNodeInContext(?LLVMContextRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMMDNodeInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMMDNode(?LLVMValueRef_ptr $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMMDNode($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetMDString(?LLVMValueRef $p0, ?int_ptr $p1): ?int_ptr {
        $result = $this->ffi->LLVMGetMDString($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetMDNodeNumOperands(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetMDNodeNumOperands($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetMDNodeOperands(?LLVMValueRef $p0, ?LLVMValueRef_ptr $p1): void {
        $this->ffi->LLVMGetMDNodeOperands($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMBasicBlockAsValue(?LLVMBasicBlockRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMBasicBlockAsValue($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMValueIsBasicBlock(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMValueIsBasicBlock($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMValueAsBasicBlock(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMValueAsBasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetBasicBlockName(?LLVMBasicBlockRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetBasicBlockName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetBasicBlockParent(?LLVMBasicBlockRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetBasicBlockParent($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetBasicBlockTerminator(?LLVMBasicBlockRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetBasicBlockTerminator($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMCountBasicBlocks(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMCountBasicBlocks($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetBasicBlocks(?LLVMValueRef $p0, ?LLVMBasicBlockRef_ptr $p1): void {
        $this->ffi->LLVMGetBasicBlocks($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetFirstBasicBlock(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetFirstBasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetLastBasicBlock(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetLastBasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetNextBasicBlock(?LLVMBasicBlockRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetNextBasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetPreviousBasicBlock(?LLVMBasicBlockRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetPreviousBasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetEntryBasicBlock(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetEntryBasicBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMAppendBasicBlockInContext(?LLVMContextRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMAppendBasicBlockInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMAppendBasicBlock(?LLVMValueRef $p0, ?string $p1): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMAppendBasicBlock($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMInsertBasicBlockInContext(?LLVMContextRef $p0, ?LLVMBasicBlockRef $p1, ?string $p2): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMInsertBasicBlockInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMInsertBasicBlock(?LLVMBasicBlockRef $p0, ?string $p1): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMInsertBasicBlock($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMDeleteBasicBlock(?LLVMBasicBlockRef $p0): void {
        $this->ffi->LLVMDeleteBasicBlock($p0 === null ? null : $p0->getData());
    }
    public function LLVMRemoveBasicBlockFromParent(?LLVMBasicBlockRef $p0): void {
        $this->ffi->LLVMRemoveBasicBlockFromParent($p0 === null ? null : $p0->getData());
    }
    public function LLVMMoveBasicBlockBefore(?LLVMBasicBlockRef $p0, ?LLVMBasicBlockRef $p1): void {
        $this->ffi->LLVMMoveBasicBlockBefore($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMMoveBasicBlockAfter(?LLVMBasicBlockRef $p0, ?LLVMBasicBlockRef $p1): void {
        $this->ffi->LLVMMoveBasicBlockAfter($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetFirstInstruction(?LLVMBasicBlockRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetFirstInstruction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetLastInstruction(?LLVMBasicBlockRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetLastInstruction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMHasMetadata(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMHasMetadata($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetMetadata(?LLVMValueRef $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetMetadata($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSetMetadata(?LLVMValueRef $p0, ?int $p1, ?LLVMValueRef $p2): void {
        $this->ffi->LLVMSetMetadata($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetInstructionParent(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetInstructionParent($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetNextInstruction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetNextInstruction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetPreviousInstruction(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetPreviousInstruction($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMInstructionRemoveFromParent(?LLVMValueRef $p0): void {
        $this->ffi->LLVMInstructionRemoveFromParent($p0 === null ? null : $p0->getData());
    }
    public function LLVMInstructionEraseFromParent(?LLVMValueRef $p0): void {
        $this->ffi->LLVMInstructionEraseFromParent($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetInstructionOpcode(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetInstructionOpcode($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetICmpPredicate(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetICmpPredicate($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetFCmpPredicate(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetFCmpPredicate($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMInstructionClone(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMInstructionClone($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetNumArgOperands(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetNumArgOperands($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetInstructionCallConv(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetInstructionCallConv($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetInstructionCallConv(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetInstructionCallConv($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetInstrParamAlignment(?LLVMValueRef $p0, ?int $p1, ?int $p2): void {
        $this->ffi->LLVMSetInstrParamAlignment($p0 === null ? null : $p0->getData(), $p1, $p2);
    }
    public function LLVMAddCallSiteAttribute(?LLVMValueRef $p0, ?int $p1, ?LLVMAttributeRef $p2): void {
        $this->ffi->LLVMAddCallSiteAttribute($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetCallSiteAttributeCount(?LLVMValueRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMGetCallSiteAttributeCount($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMGetCallSiteAttributes(?LLVMValueRef $p0, ?int $p1, ?LLVMAttributeRef_ptr $p2): void {
        $this->ffi->LLVMGetCallSiteAttributes($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetCallSiteEnumAttribute(?LLVMValueRef $p0, ?int $p1, ?int $p2): ?LLVMAttributeRef {
        $result = $this->ffi->LLVMGetCallSiteEnumAttribute($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMAttributeRef($result);
    }
    public function LLVMGetCallSiteStringAttribute(?LLVMValueRef $p0, ?int $p1, ?string $p2, ?int $p3): ?LLVMAttributeRef {
        $result = $this->ffi->LLVMGetCallSiteStringAttribute($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
        return $result === null ? null : new LLVMAttributeRef($result);
    }
    public function LLVMRemoveCallSiteEnumAttribute(?LLVMValueRef $p0, ?int $p1, ?int $p2): void {
        $this->ffi->LLVMRemoveCallSiteEnumAttribute($p0 === null ? null : $p0->getData(), $p1, $p2);
    }
    public function LLVMRemoveCallSiteStringAttribute(?LLVMValueRef $p0, ?int $p1, ?string $p2, ?int $p3): void {
        $this->ffi->LLVMRemoveCallSiteStringAttribute($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
    }
    public function LLVMGetCalledValue(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetCalledValue($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsTailCall(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsTailCall($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetTailCall(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetTailCall($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetNormalDest(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetNormalDest($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetUnwindDest(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetUnwindDest($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMSetNormalDest(?LLVMValueRef $p0, ?LLVMBasicBlockRef $p1): void {
        $this->ffi->LLVMSetNormalDest($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMSetUnwindDest(?LLVMValueRef $p0, ?LLVMBasicBlockRef $p1): void {
        $this->ffi->LLVMSetUnwindDest($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetNumSuccessors(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetNumSuccessors($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetSuccessor(?LLVMValueRef $p0, ?int $p1): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetSuccessor($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMSetSuccessor(?LLVMValueRef $p0, ?int $p1, ?LLVMBasicBlockRef $p2): void {
        $this->ffi->LLVMSetSuccessor($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
    }
    public function LLVMIsConditional(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsConditional($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetCondition(?LLVMValueRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetCondition($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSetCondition(?LLVMValueRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMSetCondition($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetSwitchDefaultDest(?LLVMValueRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetSwitchDefaultDest($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetAllocatedType(?LLVMValueRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMGetAllocatedType($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIsInBounds(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsInBounds($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetIsInBounds(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetIsInBounds($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMAddIncoming(?LLVMValueRef $p0, ?LLVMValueRef_ptr $p1, ?LLVMBasicBlockRef_ptr $p2, ?int $p3): void {
        $this->ffi->LLVMAddIncoming($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
    }
    public function LLVMCountIncoming(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMCountIncoming($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetIncomingValue(?LLVMValueRef $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetIncomingValue($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetIncomingBlock(?LLVMValueRef $p0, ?int $p1): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetIncomingBlock($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMGetNumIndices(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetNumIndices($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetIndices(?LLVMValueRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetIndices($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMCreateBuilderInContext(?LLVMContextRef $p0): ?LLVMBuilderRef {
        $result = $this->ffi->LLVMCreateBuilderInContext($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBuilderRef($result);
    }
    public function LLVMCreateBuilder(): ?LLVMBuilderRef {
        $result = $this->ffi->LLVMCreateBuilder();
        return $result === null ? null : new LLVMBuilderRef($result);
    }
    public function LLVMPositionBuilder(?LLVMBuilderRef $p0, ?LLVMBasicBlockRef $p1, ?LLVMValueRef $p2): void {
        $this->ffi->LLVMPositionBuilder($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
    }
    public function LLVMPositionBuilderBefore(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMPositionBuilderBefore($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMPositionBuilderAtEnd(?LLVMBuilderRef $p0, ?LLVMBasicBlockRef $p1): void {
        $this->ffi->LLVMPositionBuilderAtEnd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetInsertBlock(?LLVMBuilderRef $p0): ?LLVMBasicBlockRef {
        $result = $this->ffi->LLVMGetInsertBlock($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMBasicBlockRef($result);
    }
    public function LLVMClearInsertionPosition(?LLVMBuilderRef $p0): void {
        $this->ffi->LLVMClearInsertionPosition($p0 === null ? null : $p0->getData());
    }
    public function LLVMInsertIntoBuilder(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMInsertIntoBuilder($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMInsertIntoBuilderWithName(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): void {
        $this->ffi->LLVMInsertIntoBuilderWithName($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
    }
    public function LLVMDisposeBuilder(?LLVMBuilderRef $p0): void {
        $this->ffi->LLVMDisposeBuilder($p0 === null ? null : $p0->getData());
    }
    public function LLVMSetCurrentDebugLocation(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMSetCurrentDebugLocation($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetCurrentDebugLocation(?LLVMBuilderRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetCurrentDebugLocation($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMSetInstDebugLocation(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMSetInstDebugLocation($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMBuildRetVoid(?LLVMBuilderRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildRetVoid($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildRet(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildRet($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAggregateRet(?LLVMBuilderRef $p0, ?LLVMValueRef_ptr $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAggregateRet($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildBr(?LLVMBuilderRef $p0, ?LLVMBasicBlockRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildBr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildCondBr(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMBasicBlockRef $p2, ?LLVMBasicBlockRef $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildCondBr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSwitch(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMBasicBlockRef $p2, ?int $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSwitch($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildIndirectBr(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?int $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildIndirectBr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildInvoke(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef_ptr $p2, ?int $p3, ?LLVMBasicBlockRef $p4, ?LLVMBasicBlockRef $p5, ?string $p6): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildInvoke($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4 === null ? null : $p4->getData(), $p5 === null ? null : $p5->getData(), $p6);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildLandingPad(?LLVMBuilderRef $p0, ?LLVMTypeRef $p1, ?LLVMValueRef $p2, ?int $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildLandingPad($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildResume(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildResume($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildUnreachable(?LLVMBuilderRef $p0): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildUnreachable($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMAddCase(?LLVMValueRef $p0, ?LLVMValueRef $p1, ?LLVMBasicBlockRef $p2): void {
        $this->ffi->LLVMAddCase($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
    }
    public function LLVMAddDestination(?LLVMValueRef $p0, ?LLVMBasicBlockRef $p1): void {
        $this->ffi->LLVMAddDestination($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetNumClauses(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetNumClauses($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetClause(?LLVMValueRef $p0, ?int $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMGetClause($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMAddClause(?LLVMValueRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMAddClause($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMIsCleanup(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsCleanup($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetCleanup(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetCleanup($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMBuildAdd(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNSWAdd(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNSWAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNUWAdd(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNUWAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFAdd(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFAdd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSub(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNSWSub(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNSWSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNUWSub(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNUWSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFSub(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFSub($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildMul(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNSWMul(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNSWMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNUWMul(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNUWMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFMul(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFMul($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildUDiv(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildUDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildExactUDiv(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildExactUDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSDiv(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildExactSDiv(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildExactSDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFDiv(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFDiv($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildURem(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildURem($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSRem(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSRem($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFRem(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFRem($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildShl(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildShl($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildLShr(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildLShr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAShr(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAShr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAnd(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAnd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildOr(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildOr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildXor(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildXor($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildBinOp(?LLVMBuilderRef $p0, ?int $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildBinOp($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNeg(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNeg($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNSWNeg(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNSWNeg($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNUWNeg(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNUWNeg($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFNeg(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFNeg($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildNot(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildNot($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildMalloc(?LLVMBuilderRef $p0, ?LLVMTypeRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildMalloc($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildArrayMalloc(?LLVMBuilderRef $p0, ?LLVMTypeRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildArrayMalloc($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAlloca(?LLVMBuilderRef $p0, ?LLVMTypeRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAlloca($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildArrayAlloca(?LLVMBuilderRef $p0, ?LLVMTypeRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildArrayAlloca($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFree(?LLVMBuilderRef $p0, ?LLVMValueRef $p1): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFree($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildLoad(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildLoad($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildStore(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildStore($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildGEP(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef_ptr $p2, ?int $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildGEP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildInBoundsGEP(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef_ptr $p2, ?int $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildInBoundsGEP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildStructGEP(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?int $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildStructGEP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildGlobalString(?LLVMBuilderRef $p0, ?string $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildGlobalString($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildGlobalStringPtr(?LLVMBuilderRef $p0, ?string $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildGlobalStringPtr($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMGetVolatile(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetVolatile($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetVolatile(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetVolatile($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetOrdering(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetOrdering($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetOrdering(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetOrdering($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMBuildTrunc(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildTrunc($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildZExt(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildZExt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSExt(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSExt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFPToUI(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFPToUI($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFPToSI(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFPToSI($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildUIToFP(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildUIToFP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSIToFP(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSIToFP($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFPTrunc(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFPTrunc($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFPExt(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFPExt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildPtrToInt(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildPtrToInt($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildIntToPtr(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildIntToPtr($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildBitCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAddrSpaceCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAddrSpaceCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildZExtOrBitCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildZExtOrBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSExtOrBitCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSExtOrBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildTruncOrBitCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildTruncOrBitCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildCast(?LLVMBuilderRef $p0, ?int $p1, ?LLVMValueRef $p2, ?LLVMTypeRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildCast($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildPointerCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildPointerCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildIntCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildIntCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFPCast(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFPCast($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildICmp(?LLVMBuilderRef $p0, ?int $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildICmp($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFCmp(?LLVMBuilderRef $p0, ?int $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFCmp($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildPhi(?LLVMBuilderRef $p0, ?LLVMTypeRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildPhi($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildCall(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef_ptr $p2, ?int $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildCall($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildSelect(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildSelect($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildVAArg(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMTypeRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildVAArg($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildExtractElement(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildExtractElement($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildInsertElement(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildInsertElement($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildShuffleVector(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildShuffleVector($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildExtractValue(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?int $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildExtractValue($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildInsertValue(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?int $p3, ?string $p4): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildInsertValue($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildIsNull(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildIsNull($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildIsNotNull(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?string $p2): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildIsNotNull($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildPtrDiff(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildPtrDiff($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildFence(?LLVMBuilderRef $p0, ?int $p1, ?int $p2, ?string $p3): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildFence($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAtomicRMW(?LLVMBuilderRef $p0, ?int $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?int $p4, ?int $p5): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAtomicRMW($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4, $p5);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMBuildAtomicCmpXchg(?LLVMBuilderRef $p0, ?LLVMValueRef $p1, ?LLVMValueRef $p2, ?LLVMValueRef $p3, ?int $p4, ?int $p5, ?int $p6): ?LLVMValueRef {
        $result = $this->ffi->LLVMBuildAtomicCmpXchg($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4, $p5, $p6);
        return $result === null ? null : new LLVMValueRef($result);
    }
    public function LLVMIsAtomicSingleThread(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMIsAtomicSingleThread($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetAtomicSingleThread(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetAtomicSingleThread($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetCmpXchgSuccessOrdering(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetCmpXchgSuccessOrdering($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetCmpXchgSuccessOrdering(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetCmpXchgSuccessOrdering($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMGetCmpXchgFailureOrdering(?LLVMValueRef $p0): ?int {
        $result = $this->ffi->LLVMGetCmpXchgFailureOrdering($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMSetCmpXchgFailureOrdering(?LLVMValueRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetCmpXchgFailureOrdering($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMCreateModuleProviderForExistingModule(?LLVMModuleRef $p0): ?LLVMModuleProviderRef {
        $result = $this->ffi->LLVMCreateModuleProviderForExistingModule($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMModuleProviderRef($result);
    }
    public function LLVMDisposeModuleProvider(?LLVMModuleProviderRef $p0): void {
        $this->ffi->LLVMDisposeModuleProvider($p0 === null ? null : $p0->getData());
    }
    public function LLVMCreateMemoryBufferWithContentsOfFile(?string $p0, ?LLVMMemoryBufferRef_ptr $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMCreateMemoryBufferWithContentsOfFile($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMCreateMemoryBufferWithSTDIN(?LLVMMemoryBufferRef_ptr $p0, ?string_ptr $p1): ?int {
        $result = $this->ffi->LLVMCreateMemoryBufferWithSTDIN($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMCreateMemoryBufferWithMemoryRange(?string $p0, ?int $p1, ?string $p2, ?int $p3): ?LLVMMemoryBufferRef {
        $result = $this->ffi->LLVMCreateMemoryBufferWithMemoryRange($p0, $p1, $p2, $p3);
        return $result === null ? null : new LLVMMemoryBufferRef($result);
    }
    public function LLVMCreateMemoryBufferWithMemoryRangeCopy(?string $p0, ?int $p1, ?string $p2): ?LLVMMemoryBufferRef {
        $result = $this->ffi->LLVMCreateMemoryBufferWithMemoryRangeCopy($p0, $p1, $p2);
        return $result === null ? null : new LLVMMemoryBufferRef($result);
    }
    public function LLVMGetBufferStart(?LLVMMemoryBufferRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetBufferStart($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetBufferSize(?LLVMMemoryBufferRef $p0): ?int {
        $result = $this->ffi->LLVMGetBufferSize($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMDisposeMemoryBuffer(?LLVMMemoryBufferRef $p0): void {
        $this->ffi->LLVMDisposeMemoryBuffer($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetGlobalPassRegistry(): ?LLVMPassRegistryRef {
        $result = $this->ffi->LLVMGetGlobalPassRegistry();
        return $result === null ? null : new LLVMPassRegistryRef($result);
    }
    public function LLVMCreatePassManager(): ?LLVMPassManagerRef {
        $result = $this->ffi->LLVMCreatePassManager();
        return $result === null ? null : new LLVMPassManagerRef($result);
    }
    public function LLVMCreateFunctionPassManagerForModule(?LLVMModuleRef $p0): ?LLVMPassManagerRef {
        $result = $this->ffi->LLVMCreateFunctionPassManagerForModule($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMPassManagerRef($result);
    }
    public function LLVMCreateFunctionPassManager(?LLVMModuleProviderRef $p0): ?LLVMPassManagerRef {
        $result = $this->ffi->LLVMCreateFunctionPassManager($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMPassManagerRef($result);
    }
    public function LLVMRunPassManager(?LLVMPassManagerRef $p0, ?LLVMModuleRef $p1): ?int {
        $result = $this->ffi->LLVMRunPassManager($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMInitializeFunctionPassManager(?LLVMPassManagerRef $p0): ?int {
        $result = $this->ffi->LLVMInitializeFunctionPassManager($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMRunFunctionPassManager(?LLVMPassManagerRef $p0, ?LLVMValueRef $p1): ?int {
        $result = $this->ffi->LLVMRunFunctionPassManager($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMFinalizeFunctionPassManager(?LLVMPassManagerRef $p0): ?int {
        $result = $this->ffi->LLVMFinalizeFunctionPassManager($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMDisposePassManager(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMDisposePassManager($p0 === null ? null : $p0->getData());
    }
    public function LLVMStartMultithreaded(): ?int {
        $result = $this->ffi->LLVMStartMultithreaded();
        return $result;
    }
    public function LLVMStopMultithreaded(): void {
        $this->ffi->LLVMStopMultithreaded();
    }
    public function LLVMIsMultithreaded(): ?int {
        $result = $this->ffi->LLVMIsMultithreaded();
        return $result;
    }
    // enum LLVMByteOrdering
    const LLVMBigEndian = (0) + 0;
    const LLVMLittleEndian = (0) + 1;
    public function LLVMInitializeAArch64TargetInfo(): void {
        $this->ffi->LLVMInitializeAArch64TargetInfo();
    }
    public function LLVMInitializeAMDGPUTargetInfo(): void {
        $this->ffi->LLVMInitializeAMDGPUTargetInfo();
    }
    public function LLVMInitializeARMTargetInfo(): void {
        $this->ffi->LLVMInitializeARMTargetInfo();
    }
    public function LLVMInitializeBPFTargetInfo(): void {
        $this->ffi->LLVMInitializeBPFTargetInfo();
    }
    public function LLVMInitializeHexagonTargetInfo(): void {
        $this->ffi->LLVMInitializeHexagonTargetInfo();
    }
    public function LLVMInitializeLanaiTargetInfo(): void {
        $this->ffi->LLVMInitializeLanaiTargetInfo();
    }
    public function LLVMInitializeMipsTargetInfo(): void {
        $this->ffi->LLVMInitializeMipsTargetInfo();
    }
    public function LLVMInitializeMSP430TargetInfo(): void {
        $this->ffi->LLVMInitializeMSP430TargetInfo();
    }
    public function LLVMInitializeNVPTXTargetInfo(): void {
        $this->ffi->LLVMInitializeNVPTXTargetInfo();
    }
    public function LLVMInitializePowerPCTargetInfo(): void {
        $this->ffi->LLVMInitializePowerPCTargetInfo();
    }
    public function LLVMInitializeRISCVTargetInfo(): void {
        $this->ffi->LLVMInitializeRISCVTargetInfo();
    }
    public function LLVMInitializeSparcTargetInfo(): void {
        $this->ffi->LLVMInitializeSparcTargetInfo();
    }
    public function LLVMInitializeSystemZTargetInfo(): void {
        $this->ffi->LLVMInitializeSystemZTargetInfo();
    }
    public function LLVMInitializeX86TargetInfo(): void {
        $this->ffi->LLVMInitializeX86TargetInfo();
    }
    public function LLVMInitializeXCoreTargetInfo(): void {
        $this->ffi->LLVMInitializeXCoreTargetInfo();
    }
    public function LLVMInitializeAArch64Target(): void {
        $this->ffi->LLVMInitializeAArch64Target();
    }
    public function LLVMInitializeAMDGPUTarget(): void {
        $this->ffi->LLVMInitializeAMDGPUTarget();
    }
    public function LLVMInitializeARMTarget(): void {
        $this->ffi->LLVMInitializeARMTarget();
    }
    public function LLVMInitializeBPFTarget(): void {
        $this->ffi->LLVMInitializeBPFTarget();
    }
    public function LLVMInitializeHexagonTarget(): void {
        $this->ffi->LLVMInitializeHexagonTarget();
    }
    public function LLVMInitializeLanaiTarget(): void {
        $this->ffi->LLVMInitializeLanaiTarget();
    }
    public function LLVMInitializeMipsTarget(): void {
        $this->ffi->LLVMInitializeMipsTarget();
    }
    public function LLVMInitializeMSP430Target(): void {
        $this->ffi->LLVMInitializeMSP430Target();
    }
    public function LLVMInitializeNVPTXTarget(): void {
        $this->ffi->LLVMInitializeNVPTXTarget();
    }
    public function LLVMInitializePowerPCTarget(): void {
        $this->ffi->LLVMInitializePowerPCTarget();
    }
    public function LLVMInitializeRISCVTarget(): void {
        $this->ffi->LLVMInitializeRISCVTarget();
    }
    public function LLVMInitializeSparcTarget(): void {
        $this->ffi->LLVMInitializeSparcTarget();
    }
    public function LLVMInitializeSystemZTarget(): void {
        $this->ffi->LLVMInitializeSystemZTarget();
    }
    public function LLVMInitializeX86Target(): void {
        $this->ffi->LLVMInitializeX86Target();
    }
    public function LLVMInitializeXCoreTarget(): void {
        $this->ffi->LLVMInitializeXCoreTarget();
    }
    public function LLVMInitializeAArch64TargetMC(): void {
        $this->ffi->LLVMInitializeAArch64TargetMC();
    }
    public function LLVMInitializeAMDGPUTargetMC(): void {
        $this->ffi->LLVMInitializeAMDGPUTargetMC();
    }
    public function LLVMInitializeARMTargetMC(): void {
        $this->ffi->LLVMInitializeARMTargetMC();
    }
    public function LLVMInitializeBPFTargetMC(): void {
        $this->ffi->LLVMInitializeBPFTargetMC();
    }
    public function LLVMInitializeHexagonTargetMC(): void {
        $this->ffi->LLVMInitializeHexagonTargetMC();
    }
    public function LLVMInitializeLanaiTargetMC(): void {
        $this->ffi->LLVMInitializeLanaiTargetMC();
    }
    public function LLVMInitializeMipsTargetMC(): void {
        $this->ffi->LLVMInitializeMipsTargetMC();
    }
    public function LLVMInitializeMSP430TargetMC(): void {
        $this->ffi->LLVMInitializeMSP430TargetMC();
    }
    public function LLVMInitializeNVPTXTargetMC(): void {
        $this->ffi->LLVMInitializeNVPTXTargetMC();
    }
    public function LLVMInitializePowerPCTargetMC(): void {
        $this->ffi->LLVMInitializePowerPCTargetMC();
    }
    public function LLVMInitializeRISCVTargetMC(): void {
        $this->ffi->LLVMInitializeRISCVTargetMC();
    }
    public function LLVMInitializeSparcTargetMC(): void {
        $this->ffi->LLVMInitializeSparcTargetMC();
    }
    public function LLVMInitializeSystemZTargetMC(): void {
        $this->ffi->LLVMInitializeSystemZTargetMC();
    }
    public function LLVMInitializeX86TargetMC(): void {
        $this->ffi->LLVMInitializeX86TargetMC();
    }
    public function LLVMInitializeXCoreTargetMC(): void {
        $this->ffi->LLVMInitializeXCoreTargetMC();
    }
    public function LLVMInitializeAArch64AsmPrinter(): void {
        $this->ffi->LLVMInitializeAArch64AsmPrinter();
    }
    public function LLVMInitializeAMDGPUAsmPrinter(): void {
        $this->ffi->LLVMInitializeAMDGPUAsmPrinter();
    }
    public function LLVMInitializeARMAsmPrinter(): void {
        $this->ffi->LLVMInitializeARMAsmPrinter();
    }
    public function LLVMInitializeBPFAsmPrinter(): void {
        $this->ffi->LLVMInitializeBPFAsmPrinter();
    }
    public function LLVMInitializeHexagonAsmPrinter(): void {
        $this->ffi->LLVMInitializeHexagonAsmPrinter();
    }
    public function LLVMInitializeLanaiAsmPrinter(): void {
        $this->ffi->LLVMInitializeLanaiAsmPrinter();
    }
    public function LLVMInitializeMipsAsmPrinter(): void {
        $this->ffi->LLVMInitializeMipsAsmPrinter();
    }
    public function LLVMInitializeMSP430AsmPrinter(): void {
        $this->ffi->LLVMInitializeMSP430AsmPrinter();
    }
    public function LLVMInitializeNVPTXAsmPrinter(): void {
        $this->ffi->LLVMInitializeNVPTXAsmPrinter();
    }
    public function LLVMInitializePowerPCAsmPrinter(): void {
        $this->ffi->LLVMInitializePowerPCAsmPrinter();
    }
    public function LLVMInitializeSparcAsmPrinter(): void {
        $this->ffi->LLVMInitializeSparcAsmPrinter();
    }
    public function LLVMInitializeSystemZAsmPrinter(): void {
        $this->ffi->LLVMInitializeSystemZAsmPrinter();
    }
    public function LLVMInitializeX86AsmPrinter(): void {
        $this->ffi->LLVMInitializeX86AsmPrinter();
    }
    public function LLVMInitializeXCoreAsmPrinter(): void {
        $this->ffi->LLVMInitializeXCoreAsmPrinter();
    }
    public function LLVMInitializeAArch64AsmParser(): void {
        $this->ffi->LLVMInitializeAArch64AsmParser();
    }
    public function LLVMInitializeAMDGPUAsmParser(): void {
        $this->ffi->LLVMInitializeAMDGPUAsmParser();
    }
    public function LLVMInitializeARMAsmParser(): void {
        $this->ffi->LLVMInitializeARMAsmParser();
    }
    public function LLVMInitializeHexagonAsmParser(): void {
        $this->ffi->LLVMInitializeHexagonAsmParser();
    }
    public function LLVMInitializeLanaiAsmParser(): void {
        $this->ffi->LLVMInitializeLanaiAsmParser();
    }
    public function LLVMInitializeMipsAsmParser(): void {
        $this->ffi->LLVMInitializeMipsAsmParser();
    }
    public function LLVMInitializePowerPCAsmParser(): void {
        $this->ffi->LLVMInitializePowerPCAsmParser();
    }
    public function LLVMInitializeSparcAsmParser(): void {
        $this->ffi->LLVMInitializeSparcAsmParser();
    }
    public function LLVMInitializeSystemZAsmParser(): void {
        $this->ffi->LLVMInitializeSystemZAsmParser();
    }
    public function LLVMInitializeX86AsmParser(): void {
        $this->ffi->LLVMInitializeX86AsmParser();
    }
    public function LLVMInitializeAArch64Disassembler(): void {
        $this->ffi->LLVMInitializeAArch64Disassembler();
    }
    public function LLVMInitializeAMDGPUDisassembler(): void {
        $this->ffi->LLVMInitializeAMDGPUDisassembler();
    }
    public function LLVMInitializeARMDisassembler(): void {
        $this->ffi->LLVMInitializeARMDisassembler();
    }
    public function LLVMInitializeBPFDisassembler(): void {
        $this->ffi->LLVMInitializeBPFDisassembler();
    }
    public function LLVMInitializeHexagonDisassembler(): void {
        $this->ffi->LLVMInitializeHexagonDisassembler();
    }
    public function LLVMInitializeLanaiDisassembler(): void {
        $this->ffi->LLVMInitializeLanaiDisassembler();
    }
    public function LLVMInitializeMipsDisassembler(): void {
        $this->ffi->LLVMInitializeMipsDisassembler();
    }
    public function LLVMInitializePowerPCDisassembler(): void {
        $this->ffi->LLVMInitializePowerPCDisassembler();
    }
    public function LLVMInitializeSparcDisassembler(): void {
        $this->ffi->LLVMInitializeSparcDisassembler();
    }
    public function LLVMInitializeSystemZDisassembler(): void {
        $this->ffi->LLVMInitializeSystemZDisassembler();
    }
    public function LLVMInitializeX86Disassembler(): void {
        $this->ffi->LLVMInitializeX86Disassembler();
    }
    public function LLVMInitializeXCoreDisassembler(): void {
        $this->ffi->LLVMInitializeXCoreDisassembler();
    }
    public function LLVMGetModuleDataLayout(?LLVMModuleRef $p0): ?LLVMTargetDataRef {
        $result = $this->ffi->LLVMGetModuleDataLayout($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTargetDataRef($result);
    }
    public function LLVMSetModuleDataLayout(?LLVMModuleRef $p0, ?LLVMTargetDataRef $p1): void {
        $this->ffi->LLVMSetModuleDataLayout($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMCreateTargetData(?string $p0): ?LLVMTargetDataRef {
        $result = $this->ffi->LLVMCreateTargetData($p0);
        return $result === null ? null : new LLVMTargetDataRef($result);
    }
    public function LLVMDisposeTargetData(?LLVMTargetDataRef $p0): void {
        $this->ffi->LLVMDisposeTargetData($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddTargetLibraryInfo(?LLVMTargetLibraryInfoRef $p0, ?LLVMPassManagerRef $p1): void {
        $this->ffi->LLVMAddTargetLibraryInfo($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMCopyStringRepOfTargetData(?LLVMTargetDataRef $p0): ?string_ {
        $result = $this->ffi->LLVMCopyStringRepOfTargetData($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMByteOrder(?LLVMTargetDataRef $p0): ?int {
        $result = $this->ffi->LLVMByteOrder($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMPointerSize(?LLVMTargetDataRef $p0): ?int {
        $result = $this->ffi->LLVMPointerSize($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMPointerSizeForAS(?LLVMTargetDataRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMPointerSizeForAS($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMIntPtrType(?LLVMTargetDataRef $p0): ?LLVMTypeRef {
        $result = $this->ffi->LLVMIntPtrType($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIntPtrTypeForAS(?LLVMTargetDataRef $p0, ?int $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMIntPtrTypeForAS($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIntPtrTypeInContext(?LLVMContextRef $p0, ?LLVMTargetDataRef $p1): ?LLVMTypeRef {
        $result = $this->ffi->LLVMIntPtrTypeInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMIntPtrTypeForASInContext(?LLVMContextRef $p0, ?LLVMTargetDataRef $p1, ?int $p2): ?LLVMTypeRef {
        $result = $this->ffi->LLVMIntPtrTypeForASInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result === null ? null : new LLVMTypeRef($result);
    }
    public function LLVMSizeOfTypeInBits(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1): ?int {
        $result = $this->ffi->LLVMSizeOfTypeInBits($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMStoreSizeOfType(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1): ?int {
        $result = $this->ffi->LLVMStoreSizeOfType($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMABISizeOfType(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1): ?int {
        $result = $this->ffi->LLVMABISizeOfType($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMABIAlignmentOfType(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1): ?int {
        $result = $this->ffi->LLVMABIAlignmentOfType($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMCallFrameAlignmentOfType(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1): ?int {
        $result = $this->ffi->LLVMCallFrameAlignmentOfType($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMPreferredAlignmentOfType(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1): ?int {
        $result = $this->ffi->LLVMPreferredAlignmentOfType($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMPreferredAlignmentOfGlobal(?LLVMTargetDataRef $p0, ?LLVMValueRef $p1): ?int {
        $result = $this->ffi->LLVMPreferredAlignmentOfGlobal($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMElementAtOffset(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1, ?int $p2): ?int {
        $result = $this->ffi->LLVMElementAtOffset($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result;
    }
    public function LLVMOffsetOfElement(?LLVMTargetDataRef $p0, ?LLVMTypeRef $p1, ?int $p2): ?int {
        $result = $this->ffi->LLVMOffsetOfElement($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2);
        return $result;
    }
    // typedefenum LLVMCodeGenOptLevel
    const LLVMCodeGenLevelNone = (0) + 0;
    const LLVMCodeGenLevelLess = (0) + 1;
    const LLVMCodeGenLevelDefault = (0) + 2;
    const LLVMCodeGenLevelAggressive = (0) + 3;
    // typedefenum LLVMRelocMode
    const LLVMRelocDefault = (0) + 0;
    const LLVMRelocStatic = (0) + 1;
    const LLVMRelocPIC = (0) + 2;
    const LLVMRelocDynamicNoPic = (0) + 3;
    // typedefenum LLVMCodeModel
    const LLVMCodeModelDefault = (0) + 0;
    const LLVMCodeModelJITDefault = (0) + 1;
    const LLVMCodeModelSmall = (0) + 2;
    const LLVMCodeModelKernel = (0) + 3;
    const LLVMCodeModelMedium = (0) + 4;
    const LLVMCodeModelLarge = (0) + 5;
    // typedefenum LLVMCodeGenFileType
    const LLVMAssemblyFile = (0) + 0;
    const LLVMObjectFile = (0) + 1;
    public function LLVMGetFirstTarget(): ?LLVMTargetRef {
        $result = $this->ffi->LLVMGetFirstTarget();
        return $result === null ? null : new LLVMTargetRef($result);
    }
    public function LLVMGetNextTarget(?LLVMTargetRef $p0): ?LLVMTargetRef {
        $result = $this->ffi->LLVMGetNextTarget($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTargetRef($result);
    }
    public function LLVMGetTargetFromName(?string $p0): ?LLVMTargetRef {
        $result = $this->ffi->LLVMGetTargetFromName($p0);
        return $result === null ? null : new LLVMTargetRef($result);
    }
    public function LLVMGetTargetFromTriple(?string $p0, ?LLVMTargetRef_ptr $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMGetTargetFromTriple($p0, $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMGetTargetName(?LLVMTargetRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetTargetName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetTargetDescription(?LLVMTargetRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetTargetDescription($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMTargetHasJIT(?LLVMTargetRef $p0): ?int {
        $result = $this->ffi->LLVMTargetHasJIT($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMTargetHasTargetMachine(?LLVMTargetRef $p0): ?int {
        $result = $this->ffi->LLVMTargetHasTargetMachine($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMTargetHasAsmBackend(?LLVMTargetRef $p0): ?int {
        $result = $this->ffi->LLVMTargetHasAsmBackend($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMCreateTargetMachine(?LLVMTargetRef $p0, ?string $p1, ?string $p2, ?string $p3, ?int $p4, ?int $p5, ?int $p6): ?LLVMTargetMachineRef {
        $result = $this->ffi->LLVMCreateTargetMachine($p0 === null ? null : $p0->getData(), $p1, $p2, $p3, $p4, $p5, $p6);
        return $result === null ? null : new LLVMTargetMachineRef($result);
    }
    public function LLVMDisposeTargetMachine(?LLVMTargetMachineRef $p0): void {
        $this->ffi->LLVMDisposeTargetMachine($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetTargetMachineTarget(?LLVMTargetMachineRef $p0): ?LLVMTargetRef {
        $result = $this->ffi->LLVMGetTargetMachineTarget($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTargetRef($result);
    }
    public function LLVMGetTargetMachineTriple(?LLVMTargetMachineRef $p0): ?string_ {
        $result = $this->ffi->LLVMGetTargetMachineTriple($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMGetTargetMachineCPU(?LLVMTargetMachineRef $p0): ?string_ {
        $result = $this->ffi->LLVMGetTargetMachineCPU($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMGetTargetMachineFeatureString(?LLVMTargetMachineRef $p0): ?string_ {
        $result = $this->ffi->LLVMGetTargetMachineFeatureString($p0 === null ? null : $p0->getData());
        return $result === null ? null : new string_($result);
    }
    public function LLVMCreateTargetDataLayout(?LLVMTargetMachineRef $p0): ?LLVMTargetDataRef {
        $result = $this->ffi->LLVMCreateTargetDataLayout($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTargetDataRef($result);
    }
    public function LLVMSetTargetMachineAsmVerbosity(?LLVMTargetMachineRef $p0, ?int $p1): void {
        $this->ffi->LLVMSetTargetMachineAsmVerbosity($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMTargetMachineEmitToFile(?LLVMTargetMachineRef $p0, ?LLVMModuleRef $p1, ?string $p2, ?int $p3, ?string_ptr $p4): ?int {
        $result = $this->ffi->LLVMTargetMachineEmitToFile($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3, $p4 === null ? null : $p4->getData());
        return $result;
    }
    public function LLVMTargetMachineEmitToMemoryBuffer(?LLVMTargetMachineRef $p0, ?LLVMModuleRef $p1, ?int $p2, ?string_ptr $p3, ?LLVMMemoryBufferRef_ptr $p4): ?int {
        $result = $this->ffi->LLVMTargetMachineEmitToMemoryBuffer($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3 === null ? null : $p3->getData(), $p4 === null ? null : $p4->getData());
        return $result;
    }
    public function LLVMGetDefaultTargetTriple(): ?string_ {
        $result = $this->ffi->LLVMGetDefaultTargetTriple();
        return $result === null ? null : new string_($result);
    }
    public function LLVMAddAnalysisPasses(?LLVMTargetMachineRef $p0, ?LLVMPassManagerRef $p1): void {
        $this->ffi->LLVMAddAnalysisPasses($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMLinkInMCJIT(): void {
        $this->ffi->LLVMLinkInMCJIT();
    }
    public function LLVMLinkInInterpreter(): void {
        $this->ffi->LLVMLinkInInterpreter();
    }
    public function LLVMCreateGenericValueOfInt(?LLVMTypeRef $p0, ?int $p1, ?int $p2): ?LLVMGenericValueRef {
        $result = $this->ffi->LLVMCreateGenericValueOfInt($p0 === null ? null : $p0->getData(), $p1, $p2);
        return $result === null ? null : new LLVMGenericValueRef($result);
    }
    public function LLVMCreateGenericValueOfPointer(?void_ptr $p0): ?LLVMGenericValueRef {
        $result = $this->ffi->LLVMCreateGenericValueOfPointer($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMGenericValueRef($result);
    }
    public function LLVMCreateGenericValueOfFloat(?LLVMTypeRef $p0, ?float $p1): ?LLVMGenericValueRef {
        $result = $this->ffi->LLVMCreateGenericValueOfFloat($p0 === null ? null : $p0->getData(), $p1);
        return $result === null ? null : new LLVMGenericValueRef($result);
    }
    public function LLVMGenericValueIntWidth(?LLVMGenericValueRef $p0): ?int {
        $result = $this->ffi->LLVMGenericValueIntWidth($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGenericValueToInt(?LLVMGenericValueRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMGenericValueToInt($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMGenericValueToPointer(?LLVMGenericValueRef $p0): ?void_ptr {
        $result = $this->ffi->LLVMGenericValueToPointer($p0 === null ? null : $p0->getData());
        return $result === null ? null : new void_ptr($result);
    }
    public function LLVMGenericValueToFloat(?LLVMTypeRef $p0, ?LLVMGenericValueRef $p1): ?float {
        $result = $this->ffi->LLVMGenericValueToFloat($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMDisposeGenericValue(?LLVMGenericValueRef $p0): void {
        $this->ffi->LLVMDisposeGenericValue($p0 === null ? null : $p0->getData());
    }
    public function LLVMCreateExecutionEngineForModule(?LLVMExecutionEngineRef_ptr $p0, ?LLVMModuleRef $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMCreateExecutionEngineForModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMCreateInterpreterForModule(?LLVMExecutionEngineRef_ptr $p0, ?LLVMModuleRef $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMCreateInterpreterForModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMCreateJITCompilerForModule(?LLVMExecutionEngineRef_ptr $p0, ?LLVMModuleRef $p1, ?int $p2, ?string_ptr $p3): ?int {
        $result = $this->ffi->LLVMCreateJITCompilerForModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3 === null ? null : $p3->getData());
        return $result;
    }
    public function LLVMInitializeMCJITCompilerOptions(?LLVMMCJITCompilerOptions_ptr $p0, ?int $p1): void {
        $this->ffi->LLVMInitializeMCJITCompilerOptions($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMCreateMCJITCompilerForModule(?LLVMExecutionEngineRef_ptr $p0, ?LLVMModuleRef $p1, ?LLVMMCJITCompilerOptions_ptr $p2, ?int $p3, ?string_ptr $p4): ?int {
        $result = $this->ffi->LLVMCreateMCJITCompilerForModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3, $p4 === null ? null : $p4->getData());
        return $result;
    }
    public function LLVMDisposeExecutionEngine(?LLVMExecutionEngineRef $p0): void {
        $this->ffi->LLVMDisposeExecutionEngine($p0 === null ? null : $p0->getData());
    }
    public function LLVMRunStaticConstructors(?LLVMExecutionEngineRef $p0): void {
        $this->ffi->LLVMRunStaticConstructors($p0 === null ? null : $p0->getData());
    }
    public function LLVMRunStaticDestructors(?LLVMExecutionEngineRef $p0): void {
        $this->ffi->LLVMRunStaticDestructors($p0 === null ? null : $p0->getData());
    }
    public function LLVMRunFunctionAsMain(?LLVMExecutionEngineRef $p0, ?LLVMValueRef $p1, ?int $p2, ?string_ptr $p3, ?string_ptr $p4): ?int {
        $result = $this->ffi->LLVMRunFunctionAsMain($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3 === null ? null : $p3->getData(), $p4 === null ? null : $p4->getData());
        return $result;
    }
    public function LLVMRunFunction(?LLVMExecutionEngineRef $p0, ?LLVMValueRef $p1, ?int $p2, ?LLVMGenericValueRef_ptr $p3): ?LLVMGenericValueRef {
        $result = $this->ffi->LLVMRunFunction($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3 === null ? null : $p3->getData());
        return $result === null ? null : new LLVMGenericValueRef($result);
    }
    public function LLVMFreeMachineCodeForFunction(?LLVMExecutionEngineRef $p0, ?LLVMValueRef $p1): void {
        $this->ffi->LLVMFreeMachineCodeForFunction($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMAddModule(?LLVMExecutionEngineRef $p0, ?LLVMModuleRef $p1): void {
        $this->ffi->LLVMAddModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMRemoveModule(?LLVMExecutionEngineRef $p0, ?LLVMModuleRef $p1, ?LLVMModuleRef_ptr $p2, ?string_ptr $p3): ?int {
        $result = $this->ffi->LLVMRemoveModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData());
        return $result;
    }
    public function LLVMFindFunction(?LLVMExecutionEngineRef $p0, ?string $p1, ?LLVMValueRef_ptr $p2): ?int {
        $result = $this->ffi->LLVMFindFunction($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMRecompileAndRelinkFunction(?LLVMExecutionEngineRef $p0, ?LLVMValueRef $p1): ?void_ptr {
        $result = $this->ffi->LLVMRecompileAndRelinkFunction($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new void_ptr($result);
    }
    public function LLVMGetExecutionEngineTargetData(?LLVMExecutionEngineRef $p0): ?LLVMTargetDataRef {
        $result = $this->ffi->LLVMGetExecutionEngineTargetData($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTargetDataRef($result);
    }
    public function LLVMGetExecutionEngineTargetMachine(?LLVMExecutionEngineRef $p0): ?LLVMTargetMachineRef {
        $result = $this->ffi->LLVMGetExecutionEngineTargetMachine($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMTargetMachineRef($result);
    }
    public function LLVMAddGlobalMapping(?LLVMExecutionEngineRef $p0, ?LLVMValueRef $p1, ?void_ptr $p2): void {
        $this->ffi->LLVMAddGlobalMapping($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
    }
    public function LLVMGetPointerToGlobal(?LLVMExecutionEngineRef $p0, ?LLVMValueRef $p1): ?void_ptr {
        $result = $this->ffi->LLVMGetPointerToGlobal($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result === null ? null : new void_ptr($result);
    }
    public function LLVMGetGlobalValueAddress(?LLVMExecutionEngineRef $p0, ?string $p1): ?int {
        $result = $this->ffi->LLVMGetGlobalValueAddress($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMGetFunctionAddress(?LLVMExecutionEngineRef $p0, ?string $p1): ?int {
        $result = $this->ffi->LLVMGetFunctionAddress($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMCreateSimpleMCJITMemoryManager(?void_ptr $p0, ?LLVMMemoryManagerAllocateCodeSectionCallback $p1, ?LLVMMemoryManagerAllocateDataSectionCallback $p2, ?LLVMMemoryManagerFinalizeMemoryCallback $p3, ?LLVMMemoryManagerDestroyCallback $p4): ?LLVMMCJITMemoryManagerRef {
        $result = $this->ffi->LLVMCreateSimpleMCJITMemoryManager($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData(), $p4 === null ? null : $p4->getData());
        return $result === null ? null : new LLVMMCJITMemoryManagerRef($result);
    }
    public function LLVMDisposeMCJITMemoryManager(?LLVMMCJITMemoryManagerRef $p0): void {
        $this->ffi->LLVMDisposeMCJITMemoryManager($p0 === null ? null : $p0->getData());
    }
    // typedefenum LLVMVerifierFailureAction
    const LLVMAbortProcessAction = (0) + 0;
    const LLVMPrintMessageAction = (0) + 1;
    const LLVMReturnStatusAction = (0) + 2;
    public function LLVMVerifyModule(?LLVMModuleRef $p0, ?int $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMVerifyModule($p0 === null ? null : $p0->getData(), $p1, $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMVerifyFunction(?LLVMValueRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMVerifyFunction($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMViewFunctionCFG(?LLVMValueRef $p0): void {
        $this->ffi->LLVMViewFunctionCFG($p0 === null ? null : $p0->getData());
    }
    public function LLVMViewFunctionCFGOnly(?LLVMValueRef $p0): void {
        $this->ffi->LLVMViewFunctionCFGOnly($p0 === null ? null : $p0->getData());
    }
    public function LLVMParseBitcode(?LLVMMemoryBufferRef $p0, ?LLVMModuleRef_ptr $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMParseBitcode($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMParseBitcode2(?LLVMMemoryBufferRef $p0, ?LLVMModuleRef_ptr $p1): ?int {
        $result = $this->ffi->LLVMParseBitcode2($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMParseBitcodeInContext(?LLVMContextRef $p0, ?LLVMMemoryBufferRef $p1, ?LLVMModuleRef_ptr $p2, ?string_ptr $p3): ?int {
        $result = $this->ffi->LLVMParseBitcodeInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData());
        return $result;
    }
    public function LLVMParseBitcodeInContext2(?LLVMContextRef $p0, ?LLVMMemoryBufferRef $p1, ?LLVMModuleRef_ptr $p2): ?int {
        $result = $this->ffi->LLVMParseBitcodeInContext2($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMGetBitcodeModuleInContext(?LLVMContextRef $p0, ?LLVMMemoryBufferRef $p1, ?LLVMModuleRef_ptr $p2, ?string_ptr $p3): ?int {
        $result = $this->ffi->LLVMGetBitcodeModuleInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData());
        return $result;
    }
    public function LLVMGetBitcodeModuleInContext2(?LLVMContextRef $p0, ?LLVMMemoryBufferRef $p1, ?LLVMModuleRef_ptr $p2): ?int {
        $result = $this->ffi->LLVMGetBitcodeModuleInContext2($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMGetBitcodeModule(?LLVMMemoryBufferRef $p0, ?LLVMModuleRef_ptr $p1, ?string_ptr $p2): ?int {
        $result = $this->ffi->LLVMGetBitcodeModule($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData());
        return $result;
    }
    public function LLVMGetBitcodeModule2(?LLVMMemoryBufferRef $p0, ?LLVMModuleRef_ptr $p1): ?int {
        $result = $this->ffi->LLVMGetBitcodeModule2($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMWriteBitcodeToFile(?LLVMModuleRef $p0, ?string $p1): ?int {
        $result = $this->ffi->LLVMWriteBitcodeToFile($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMWriteBitcodeToFD(?LLVMModuleRef $p0, ?int $p1, ?int $p2, ?int $p3): ?int {
        $result = $this->ffi->LLVMWriteBitcodeToFD($p0 === null ? null : $p0->getData(), $p1, $p2, $p3);
        return $result;
    }
    public function LLVMWriteBitcodeToFileHandle(?LLVMModuleRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMWriteBitcodeToFileHandle($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMWriteBitcodeToMemoryBuffer(?LLVMModuleRef $p0): ?LLVMMemoryBufferRef {
        $result = $this->ffi->LLVMWriteBitcodeToMemoryBuffer($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMMemoryBufferRef($result);
    }
    public function LLVMCreateDisasm(?string $p0, ?void_ptr $p1, ?int $p2, ?LLVMOpInfoCallback $p3, ?LLVMSymbolLookupCallback $p4): ?LLVMDisasmContextRef {
        $result = $this->ffi->LLVMCreateDisasm($p0, $p1 === null ? null : $p1->getData(), $p2, $p3 === null ? null : $p3->getData(), $p4 === null ? null : $p4->getData());
        return $result === null ? null : new LLVMDisasmContextRef($result);
    }
    public function LLVMCreateDisasmCPU(?string $p0, ?string $p1, ?void_ptr $p2, ?int $p3, ?LLVMOpInfoCallback $p4, ?LLVMSymbolLookupCallback $p5): ?LLVMDisasmContextRef {
        $result = $this->ffi->LLVMCreateDisasmCPU($p0, $p1, $p2 === null ? null : $p2->getData(), $p3, $p4 === null ? null : $p4->getData(), $p5 === null ? null : $p5->getData());
        return $result === null ? null : new LLVMDisasmContextRef($result);
    }
    public function LLVMCreateDisasmCPUFeatures(?string $p0, ?string $p1, ?string $p2, ?void_ptr $p3, ?int $p4, ?LLVMOpInfoCallback $p5, ?LLVMSymbolLookupCallback $p6): ?LLVMDisasmContextRef {
        $result = $this->ffi->LLVMCreateDisasmCPUFeatures($p0, $p1, $p2, $p3 === null ? null : $p3->getData(), $p4, $p5 === null ? null : $p5->getData(), $p6 === null ? null : $p6->getData());
        return $result === null ? null : new LLVMDisasmContextRef($result);
    }
    public function LLVMSetDisasmOptions(?LLVMDisasmContextRef $p0, ?int $p1): ?int {
        $result = $this->ffi->LLVMSetDisasmOptions($p0 === null ? null : $p0->getData(), $p1);
        return $result;
    }
    public function LLVMDisasmDispose(?LLVMDisasmContextRef $p0): void {
        $this->ffi->LLVMDisasmDispose($p0 === null ? null : $p0->getData());
    }
    public function LLVMDisasmInstruction(?LLVMDisasmContextRef $p0, ?int_ptr $p1, ?int $p2, ?int $p3, ?string $p4, ?int $p5): ?int {
        $result = $this->ffi->LLVMDisasmInstruction($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3, $p4, $p5);
        return $result;
    }
    public function LLVMParseIRInContext(?LLVMContextRef $p0, ?LLVMMemoryBufferRef $p1, ?LLVMModuleRef_ptr $p2, ?string_ptr $p3): ?int {
        $result = $this->ffi->LLVMParseIRInContext($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2 === null ? null : $p2->getData(), $p3 === null ? null : $p3->getData());
        return $result;
    }
    // typedefenum LLVMLinkerMode
    const LLVMLinkerDestroySource = (0) + 0;
    const LLVMLinkerPreserveSource_Removed = (1) + 0;
    public function LLVMLinkModules2(?LLVMModuleRef $p0, ?LLVMModuleRef $p1): ?int {
        $result = $this->ffi->LLVMLinkModules2($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMCreateObjectFile(?LLVMMemoryBufferRef $p0): ?LLVMObjectFileRef {
        $result = $this->ffi->LLVMCreateObjectFile($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMObjectFileRef($result);
    }
    public function LLVMDisposeObjectFile(?LLVMObjectFileRef $p0): void {
        $this->ffi->LLVMDisposeObjectFile($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetSections(?LLVMObjectFileRef $p0): ?LLVMSectionIteratorRef {
        $result = $this->ffi->LLVMGetSections($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMSectionIteratorRef($result);
    }
    public function LLVMDisposeSectionIterator(?LLVMSectionIteratorRef $p0): void {
        $this->ffi->LLVMDisposeSectionIterator($p0 === null ? null : $p0->getData());
    }
    public function LLVMIsSectionIteratorAtEnd(?LLVMObjectFileRef $p0, ?LLVMSectionIteratorRef $p1): ?int {
        $result = $this->ffi->LLVMIsSectionIteratorAtEnd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMMoveToNextSection(?LLVMSectionIteratorRef $p0): void {
        $this->ffi->LLVMMoveToNextSection($p0 === null ? null : $p0->getData());
    }
    public function LLVMMoveToContainingSection(?LLVMSectionIteratorRef $p0, ?LLVMSymbolIteratorRef $p1): void {
        $this->ffi->LLVMMoveToContainingSection($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMGetSymbols(?LLVMObjectFileRef $p0): ?LLVMSymbolIteratorRef {
        $result = $this->ffi->LLVMGetSymbols($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMSymbolIteratorRef($result);
    }
    public function LLVMDisposeSymbolIterator(?LLVMSymbolIteratorRef $p0): void {
        $this->ffi->LLVMDisposeSymbolIterator($p0 === null ? null : $p0->getData());
    }
    public function LLVMIsSymbolIteratorAtEnd(?LLVMObjectFileRef $p0, ?LLVMSymbolIteratorRef $p1): ?int {
        $result = $this->ffi->LLVMIsSymbolIteratorAtEnd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMMoveToNextSymbol(?LLVMSymbolIteratorRef $p0): void {
        $this->ffi->LLVMMoveToNextSymbol($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetSectionName(?LLVMSectionIteratorRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetSectionName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetSectionSize(?LLVMSectionIteratorRef $p0): ?int {
        $result = $this->ffi->LLVMGetSectionSize($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetSectionContents(?LLVMSectionIteratorRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetSectionContents($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetSectionAddress(?LLVMSectionIteratorRef $p0): ?int {
        $result = $this->ffi->LLVMGetSectionAddress($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetSectionContainsSymbol(?LLVMSectionIteratorRef $p0, ?LLVMSymbolIteratorRef $p1): ?int {
        $result = $this->ffi->LLVMGetSectionContainsSymbol($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMGetRelocations(?LLVMSectionIteratorRef $p0): ?LLVMRelocationIteratorRef {
        $result = $this->ffi->LLVMGetRelocations($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMRelocationIteratorRef($result);
    }
    public function LLVMDisposeRelocationIterator(?LLVMRelocationIteratorRef $p0): void {
        $this->ffi->LLVMDisposeRelocationIterator($p0 === null ? null : $p0->getData());
    }
    public function LLVMIsRelocationIteratorAtEnd(?LLVMSectionIteratorRef $p0, ?LLVMRelocationIteratorRef $p1): ?int {
        $result = $this->ffi->LLVMIsRelocationIteratorAtEnd($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
        return $result;
    }
    public function LLVMMoveToNextRelocation(?LLVMRelocationIteratorRef $p0): void {
        $this->ffi->LLVMMoveToNextRelocation($p0 === null ? null : $p0->getData());
    }
    public function LLVMGetSymbolName(?LLVMSymbolIteratorRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetSymbolName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetSymbolAddress(?LLVMSymbolIteratorRef $p0): ?int {
        $result = $this->ffi->LLVMGetSymbolAddress($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetSymbolSize(?LLVMSymbolIteratorRef $p0): ?int {
        $result = $this->ffi->LLVMGetSymbolSize($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetRelocationOffset(?LLVMRelocationIteratorRef $p0): ?int {
        $result = $this->ffi->LLVMGetRelocationOffset($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetRelocationSymbol(?LLVMRelocationIteratorRef $p0): ?LLVMSymbolIteratorRef {
        $result = $this->ffi->LLVMGetRelocationSymbol($p0 === null ? null : $p0->getData());
        return $result === null ? null : new LLVMSymbolIteratorRef($result);
    }
    public function LLVMGetRelocationType(?LLVMRelocationIteratorRef $p0): ?int {
        $result = $this->ffi->LLVMGetRelocationType($p0 === null ? null : $p0->getData());
        return $result;
    }
    public function LLVMGetRelocationTypeName(?LLVMRelocationIteratorRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetRelocationTypeName($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMGetRelocationValueString(?LLVMRelocationIteratorRef $p0): ?int_ptr {
        $result = $this->ffi->LLVMGetRelocationValueString($p0 === null ? null : $p0->getData());
        return $result === null ? null : new int_ptr($result);
    }
    public function LLVMLoadLibraryPermanently(?string $p0): ?int {
        $result = $this->ffi->LLVMLoadLibraryPermanently($p0);
        return $result;
    }
    public function LLVMParseCommandLineOptions(?int $p0, ?string_ptr $p1, ?string $p2): void {
        $this->ffi->LLVMParseCommandLineOptions($p0, $p1 === null ? null : $p1->getData(), $p2);
    }
    public function LLVMSearchForAddressOfSymbol(?string $p0): ?void_ptr {
        $result = $this->ffi->LLVMSearchForAddressOfSymbol($p0);
        return $result === null ? null : new void_ptr($result);
    }
    public function LLVMAddSymbol(?string $p0, ?void_ptr $p1): void {
        $this->ffi->LLVMAddSymbol($p0, $p1 === null ? null : $p1->getData());
    }
    public function LLVMPassManagerBuilderCreate(): ?LLVMPassManagerBuilderRef {
        $result = $this->ffi->LLVMPassManagerBuilderCreate();
        return $result === null ? null : new LLVMPassManagerBuilderRef($result);
    }
    public function LLVMPassManagerBuilderDispose(?LLVMPassManagerBuilderRef $p0): void {
        $this->ffi->LLVMPassManagerBuilderDispose($p0 === null ? null : $p0->getData());
    }
    public function LLVMPassManagerBuilderSetOptLevel(?LLVMPassManagerBuilderRef $p0, ?int $p1): void {
        $this->ffi->LLVMPassManagerBuilderSetOptLevel($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMPassManagerBuilderSetSizeLevel(?LLVMPassManagerBuilderRef $p0, ?int $p1): void {
        $this->ffi->LLVMPassManagerBuilderSetSizeLevel($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMPassManagerBuilderSetDisableUnitAtATime(?LLVMPassManagerBuilderRef $p0, ?int $p1): void {
        $this->ffi->LLVMPassManagerBuilderSetDisableUnitAtATime($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMPassManagerBuilderSetDisableUnrollLoops(?LLVMPassManagerBuilderRef $p0, ?int $p1): void {
        $this->ffi->LLVMPassManagerBuilderSetDisableUnrollLoops($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMPassManagerBuilderSetDisableSimplifyLibCalls(?LLVMPassManagerBuilderRef $p0, ?int $p1): void {
        $this->ffi->LLVMPassManagerBuilderSetDisableSimplifyLibCalls($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMPassManagerBuilderUseInlinerWithThreshold(?LLVMPassManagerBuilderRef $p0, ?int $p1): void {
        $this->ffi->LLVMPassManagerBuilderUseInlinerWithThreshold($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMPassManagerBuilderPopulateFunctionPassManager(?LLVMPassManagerBuilderRef $p0, ?LLVMPassManagerRef $p1): void {
        $this->ffi->LLVMPassManagerBuilderPopulateFunctionPassManager($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMPassManagerBuilderPopulateModulePassManager(?LLVMPassManagerBuilderRef $p0, ?LLVMPassManagerRef $p1): void {
        $this->ffi->LLVMPassManagerBuilderPopulateModulePassManager($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData());
    }
    public function LLVMPassManagerBuilderPopulateLTOPassManager(?LLVMPassManagerBuilderRef $p0, ?LLVMPassManagerRef $p1, ?int $p2, ?int $p3): void {
        $this->ffi->LLVMPassManagerBuilderPopulateLTOPassManager($p0 === null ? null : $p0->getData(), $p1 === null ? null : $p1->getData(), $p2, $p3);
    }
    public function LLVMAddAggressiveDCEPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddAggressiveDCEPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddBitTrackingDCEPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddBitTrackingDCEPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddAlignmentFromAssumptionsPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddAlignmentFromAssumptionsPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddCFGSimplificationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddCFGSimplificationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddDeadStoreEliminationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddDeadStoreEliminationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddScalarizerPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddScalarizerPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddMergedLoadStoreMotionPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddMergedLoadStoreMotionPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddGVNPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddGVNPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddNewGVNPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddNewGVNPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddIndVarSimplifyPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddIndVarSimplifyPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddInstructionCombiningPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddInstructionCombiningPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddJumpThreadingPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddJumpThreadingPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLICMPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLICMPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopDeletionPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopDeletionPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopIdiomPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopIdiomPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopRotatePass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopRotatePass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopRerollPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopRerollPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopUnrollPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopUnrollPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopUnswitchPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopUnswitchPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddMemCpyOptPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddMemCpyOptPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddPartiallyInlineLibCallsPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddPartiallyInlineLibCallsPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLowerSwitchPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLowerSwitchPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddPromoteMemoryToRegisterPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddPromoteMemoryToRegisterPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddReassociatePass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddReassociatePass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddSCCPPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddSCCPPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddScalarReplAggregatesPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddScalarReplAggregatesPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddScalarReplAggregatesPassSSA(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddScalarReplAggregatesPassSSA($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddScalarReplAggregatesPassWithThreshold(?LLVMPassManagerRef $p0, ?int $p1): void {
        $this->ffi->LLVMAddScalarReplAggregatesPassWithThreshold($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMAddSimplifyLibCallsPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddSimplifyLibCallsPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddTailCallEliminationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddTailCallEliminationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddConstantPropagationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddConstantPropagationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddDemoteMemoryToRegisterPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddDemoteMemoryToRegisterPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddVerifierPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddVerifierPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddCorrelatedValuePropagationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddCorrelatedValuePropagationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddEarlyCSEPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddEarlyCSEPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddEarlyCSEMemSSAPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddEarlyCSEMemSSAPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLowerExpectIntrinsicPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLowerExpectIntrinsicPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddTypeBasedAliasAnalysisPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddTypeBasedAliasAnalysisPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddScopedNoAliasAAPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddScopedNoAliasAAPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddBasicAliasAnalysisPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddBasicAliasAnalysisPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddArgumentPromotionPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddArgumentPromotionPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddConstantMergePass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddConstantMergePass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddDeadArgEliminationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddDeadArgEliminationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddFunctionAttrsPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddFunctionAttrsPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddFunctionInliningPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddFunctionInliningPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddAlwaysInlinerPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddAlwaysInlinerPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddGlobalDCEPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddGlobalDCEPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddGlobalOptimizerPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddGlobalOptimizerPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddIPConstantPropagationPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddIPConstantPropagationPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddPruneEHPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddPruneEHPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddIPSCCPPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddIPSCCPPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddInternalizePass(?LLVMPassManagerRef $p0, ?int $p1): void {
        $this->ffi->LLVMAddInternalizePass($p0 === null ? null : $p0->getData(), $p1);
    }
    public function LLVMAddStripDeadPrototypesPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddStripDeadPrototypesPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddStripSymbolsPass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddStripSymbolsPass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddBBVectorizePass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddBBVectorizePass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddLoopVectorizePass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddLoopVectorizePass($p0 === null ? null : $p0->getData());
    }
    public function LLVMAddSLPVectorizePass(?LLVMPassManagerRef $p0): void {
        $this->ffi->LLVMAddSLPVectorizePass($p0 === null ? null : $p0->getData());
    }
}

class string_ implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(string_ $other): bool { return $this->data == $other->data; }
    public function addr(): string_ptr { return new string_ptr(FFI::addr($this->data)); }
    public function toString(?int $length = null): string { return $length === null ? FFI::string($this->data) : FFI::string($this->data, $length); }
    public static function getType(): string { return 'char*'; }
}
class string_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(string_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): string_ptr_ptr { return new string_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): string_ { return new string_($this->data[$n]); }
    public static function getType(): string { return 'char**'; }
}
class string_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(string_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): string_ptr_ptr_ptr { return new string_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): string_ptr { return new string_ptr($this->data[$n]); }
    public static function getType(): string { return 'char***'; }
}
class string_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(string_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): string_ptr_ptr_ptr_ptr { return new string_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): string_ptr_ptr { return new string_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'char****'; }
}
class void_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(void_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): void_ptr_ptr { return new void_ptr_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'void*'; }
}
class void_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(void_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): void_ptr_ptr_ptr { return new void_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): void_ptr { return new void_ptr($this->data[$n]); }
    public static function getType(): string { return 'void**'; }
}
class void_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(void_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): void_ptr_ptr_ptr_ptr { return new void_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): void_ptr_ptr { return new void_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'void***'; }
}
class LLVMFatalErrorHandler implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMFatalErrorHandler $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMFatalErrorHandler_ptr { return new LLVMFatalErrorHandler_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMFatalErrorHandler'; }
}
class LLVMFatalErrorHandler_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMFatalErrorHandler_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMFatalErrorHandler_ptr_ptr { return new LLVMFatalErrorHandler_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMFatalErrorHandler { return new LLVMFatalErrorHandler($this->data[$n]); }
    public static function getType(): string { return 'LLVMFatalErrorHandler*'; }
}
class LLVMFatalErrorHandler_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMFatalErrorHandler_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMFatalErrorHandler_ptr_ptr_ptr { return new LLVMFatalErrorHandler_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMFatalErrorHandler_ptr { return new LLVMFatalErrorHandler_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMFatalErrorHandler**'; }
}
class LLVMFatalErrorHandler_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMFatalErrorHandler_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMFatalErrorHandler_ptr_ptr_ptr_ptr { return new LLVMFatalErrorHandler_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMFatalErrorHandler_ptr_ptr { return new LLVMFatalErrorHandler_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMFatalErrorHandler***'; }
}
class LLVMFatalErrorHandler_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMFatalErrorHandler_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMFatalErrorHandler_ptr_ptr_ptr_ptr_ptr { return new LLVMFatalErrorHandler_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMFatalErrorHandler_ptr_ptr_ptr { return new LLVMFatalErrorHandler_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMFatalErrorHandler****'; }
}
class float_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(float_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): float_t_ptr_ptr { return new float_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): float { return $this->data[$n] + 0.0; }
    public static function getType(): string { return 'float_t*'; }
}
class float_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(float_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): float_t_ptr_ptr_ptr { return new float_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): float_t_ptr { return new float_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'float_t**'; }
}
class float_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(float_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): float_t_ptr_ptr_ptr_ptr { return new float_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): float_t_ptr_ptr { return new float_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'float_t***'; }
}
class float_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(float_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): float_t_ptr_ptr_ptr_ptr_ptr { return new float_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): float_t_ptr_ptr_ptr { return new float_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'float_t****'; }
}
class double_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(double_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): double_t_ptr_ptr { return new double_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): float { return $this->data[$n] + 0.0; }
    public static function getType(): string { return 'double_t*'; }
}
class double_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(double_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): double_t_ptr_ptr_ptr { return new double_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): double_t_ptr { return new double_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'double_t**'; }
}
class double_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(double_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): double_t_ptr_ptr_ptr_ptr { return new double_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): double_t_ptr_ptr { return new double_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'double_t***'; }
}
class double_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(double_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): double_t_ptr_ptr_ptr_ptr_ptr { return new double_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): double_t_ptr_ptr_ptr { return new double_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'double_t****'; }
}
class int_least8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least8_t_ptr_ptr { return new int_least8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'int_least8_t*'; }
}
class int_least8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least8_t_ptr_ptr_ptr { return new int_least8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least8_t_ptr { return new int_least8_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least8_t**'; }
}
class int_least8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least8_t_ptr_ptr_ptr_ptr { return new int_least8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least8_t_ptr_ptr { return new int_least8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least8_t***'; }
}
class int_least8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least8_t_ptr_ptr_ptr_ptr_ptr { return new int_least8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least8_t_ptr_ptr_ptr { return new int_least8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least8_t****'; }
}
class int_least16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least16_t_ptr_ptr { return new int_least16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'int_least16_t*'; }
}
class int_least16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least16_t_ptr_ptr_ptr { return new int_least16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least16_t_ptr { return new int_least16_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least16_t**'; }
}
class int_least16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least16_t_ptr_ptr_ptr_ptr { return new int_least16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least16_t_ptr_ptr { return new int_least16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least16_t***'; }
}
class int_least16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least16_t_ptr_ptr_ptr_ptr_ptr { return new int_least16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least16_t_ptr_ptr_ptr { return new int_least16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least16_t****'; }
}
class int_least32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least32_t_ptr_ptr { return new int_least32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'int_least32_t*'; }
}
class int_least32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least32_t_ptr_ptr_ptr { return new int_least32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least32_t_ptr { return new int_least32_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least32_t**'; }
}
class int_least32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least32_t_ptr_ptr_ptr_ptr { return new int_least32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least32_t_ptr_ptr { return new int_least32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least32_t***'; }
}
class int_least32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least32_t_ptr_ptr_ptr_ptr_ptr { return new int_least32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least32_t_ptr_ptr_ptr { return new int_least32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least32_t****'; }
}
class int_least64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least64_t_ptr_ptr { return new int_least64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'int_least64_t*'; }
}
class int_least64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least64_t_ptr_ptr_ptr { return new int_least64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least64_t_ptr { return new int_least64_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least64_t**'; }
}
class int_least64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least64_t_ptr_ptr_ptr_ptr { return new int_least64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least64_t_ptr_ptr { return new int_least64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least64_t***'; }
}
class int_least64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_least64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_least64_t_ptr_ptr_ptr_ptr_ptr { return new int_least64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_least64_t_ptr_ptr_ptr { return new int_least64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_least64_t****'; }
}
class uint_least8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least8_t_ptr_ptr { return new uint_least8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'uint_least8_t*'; }
}
class uint_least8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least8_t_ptr_ptr_ptr { return new uint_least8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least8_t_ptr { return new uint_least8_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least8_t**'; }
}
class uint_least8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least8_t_ptr_ptr_ptr_ptr { return new uint_least8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least8_t_ptr_ptr { return new uint_least8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least8_t***'; }
}
class uint_least8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least8_t_ptr_ptr_ptr_ptr_ptr { return new uint_least8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least8_t_ptr_ptr_ptr { return new uint_least8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least8_t****'; }
}
class uint_least16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least16_t_ptr_ptr { return new uint_least16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'uint_least16_t*'; }
}
class uint_least16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least16_t_ptr_ptr_ptr { return new uint_least16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least16_t_ptr { return new uint_least16_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least16_t**'; }
}
class uint_least16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least16_t_ptr_ptr_ptr_ptr { return new uint_least16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least16_t_ptr_ptr { return new uint_least16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least16_t***'; }
}
class uint_least16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least16_t_ptr_ptr_ptr_ptr_ptr { return new uint_least16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least16_t_ptr_ptr_ptr { return new uint_least16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least16_t****'; }
}
class uint_least32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least32_t_ptr_ptr { return new uint_least32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uint_least32_t*'; }
}
class uint_least32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least32_t_ptr_ptr_ptr { return new uint_least32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least32_t_ptr { return new uint_least32_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least32_t**'; }
}
class uint_least32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least32_t_ptr_ptr_ptr_ptr { return new uint_least32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least32_t_ptr_ptr { return new uint_least32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least32_t***'; }
}
class uint_least32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least32_t_ptr_ptr_ptr_ptr_ptr { return new uint_least32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least32_t_ptr_ptr_ptr { return new uint_least32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least32_t****'; }
}
class uint_least64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least64_t_ptr_ptr { return new uint_least64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uint_least64_t*'; }
}
class uint_least64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least64_t_ptr_ptr_ptr { return new uint_least64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least64_t_ptr { return new uint_least64_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least64_t**'; }
}
class uint_least64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least64_t_ptr_ptr_ptr_ptr { return new uint_least64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least64_t_ptr_ptr { return new uint_least64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least64_t***'; }
}
class uint_least64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_least64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_least64_t_ptr_ptr_ptr_ptr_ptr { return new uint_least64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_least64_t_ptr_ptr_ptr { return new uint_least64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_least64_t****'; }
}
class int_fast8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast8_t_ptr_ptr { return new int_fast8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'int_fast8_t*'; }
}
class int_fast8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast8_t_ptr_ptr_ptr { return new int_fast8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast8_t_ptr { return new int_fast8_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast8_t**'; }
}
class int_fast8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast8_t_ptr_ptr_ptr_ptr { return new int_fast8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast8_t_ptr_ptr { return new int_fast8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast8_t***'; }
}
class int_fast8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast8_t_ptr_ptr_ptr_ptr_ptr { return new int_fast8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast8_t_ptr_ptr_ptr { return new int_fast8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast8_t****'; }
}
class int_fast16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast16_t_ptr_ptr { return new int_fast16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'int_fast16_t*'; }
}
class int_fast16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast16_t_ptr_ptr_ptr { return new int_fast16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast16_t_ptr { return new int_fast16_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast16_t**'; }
}
class int_fast16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast16_t_ptr_ptr_ptr_ptr { return new int_fast16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast16_t_ptr_ptr { return new int_fast16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast16_t***'; }
}
class int_fast16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast16_t_ptr_ptr_ptr_ptr_ptr { return new int_fast16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast16_t_ptr_ptr_ptr { return new int_fast16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast16_t****'; }
}
class int_fast32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast32_t_ptr_ptr { return new int_fast32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'int_fast32_t*'; }
}
class int_fast32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast32_t_ptr_ptr_ptr { return new int_fast32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast32_t_ptr { return new int_fast32_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast32_t**'; }
}
class int_fast32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast32_t_ptr_ptr_ptr_ptr { return new int_fast32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast32_t_ptr_ptr { return new int_fast32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast32_t***'; }
}
class int_fast32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast32_t_ptr_ptr_ptr_ptr_ptr { return new int_fast32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast32_t_ptr_ptr_ptr { return new int_fast32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast32_t****'; }
}
class int_fast64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast64_t_ptr_ptr { return new int_fast64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'int_fast64_t*'; }
}
class int_fast64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast64_t_ptr_ptr_ptr { return new int_fast64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast64_t_ptr { return new int_fast64_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast64_t**'; }
}
class int_fast64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast64_t_ptr_ptr_ptr_ptr { return new int_fast64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast64_t_ptr_ptr { return new int_fast64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast64_t***'; }
}
class int_fast64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(int_fast64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): int_fast64_t_ptr_ptr_ptr_ptr_ptr { return new int_fast64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int_fast64_t_ptr_ptr_ptr { return new int_fast64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'int_fast64_t****'; }
}
class uint_fast8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast8_t_ptr_ptr { return new uint_fast8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'uint_fast8_t*'; }
}
class uint_fast8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast8_t_ptr_ptr_ptr { return new uint_fast8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast8_t_ptr { return new uint_fast8_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast8_t**'; }
}
class uint_fast8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast8_t_ptr_ptr_ptr_ptr { return new uint_fast8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast8_t_ptr_ptr { return new uint_fast8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast8_t***'; }
}
class uint_fast8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast8_t_ptr_ptr_ptr_ptr_ptr { return new uint_fast8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast8_t_ptr_ptr_ptr { return new uint_fast8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast8_t****'; }
}
class uint_fast16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast16_t_ptr_ptr { return new uint_fast16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uint_fast16_t*'; }
}
class uint_fast16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast16_t_ptr_ptr_ptr { return new uint_fast16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast16_t_ptr { return new uint_fast16_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast16_t**'; }
}
class uint_fast16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast16_t_ptr_ptr_ptr_ptr { return new uint_fast16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast16_t_ptr_ptr { return new uint_fast16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast16_t***'; }
}
class uint_fast16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast16_t_ptr_ptr_ptr_ptr_ptr { return new uint_fast16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast16_t_ptr_ptr_ptr { return new uint_fast16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast16_t****'; }
}
class uint_fast32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast32_t_ptr_ptr { return new uint_fast32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uint_fast32_t*'; }
}
class uint_fast32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast32_t_ptr_ptr_ptr { return new uint_fast32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast32_t_ptr { return new uint_fast32_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast32_t**'; }
}
class uint_fast32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast32_t_ptr_ptr_ptr_ptr { return new uint_fast32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast32_t_ptr_ptr { return new uint_fast32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast32_t***'; }
}
class uint_fast32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast32_t_ptr_ptr_ptr_ptr_ptr { return new uint_fast32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast32_t_ptr_ptr_ptr { return new uint_fast32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast32_t****'; }
}
class uint_fast64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast64_t_ptr_ptr { return new uint_fast64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uint_fast64_t*'; }
}
class uint_fast64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast64_t_ptr_ptr_ptr { return new uint_fast64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast64_t_ptr { return new uint_fast64_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast64_t**'; }
}
class uint_fast64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast64_t_ptr_ptr_ptr_ptr { return new uint_fast64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast64_t_ptr_ptr { return new uint_fast64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast64_t***'; }
}
class uint_fast64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_fast64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_fast64_t_ptr_ptr_ptr_ptr_ptr { return new uint_fast64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_fast64_t_ptr_ptr_ptr { return new uint_fast64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint_fast64_t****'; }
}
class intmax_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(intmax_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): intmax_t_ptr_ptr { return new intmax_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'intmax_t*'; }
}
class intmax_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(intmax_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): intmax_t_ptr_ptr_ptr { return new intmax_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): intmax_t_ptr { return new intmax_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'intmax_t**'; }
}
class intmax_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(intmax_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): intmax_t_ptr_ptr_ptr_ptr { return new intmax_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): intmax_t_ptr_ptr { return new intmax_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'intmax_t***'; }
}
class intmax_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(intmax_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): intmax_t_ptr_ptr_ptr_ptr_ptr { return new intmax_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): intmax_t_ptr_ptr_ptr { return new intmax_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'intmax_t****'; }
}
class uintmax_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uintmax_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uintmax_t_ptr_ptr { return new uintmax_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uintmax_t*'; }
}
class uintmax_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uintmax_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uintmax_t_ptr_ptr_ptr { return new uintmax_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uintmax_t_ptr { return new uintmax_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uintmax_t**'; }
}
class uintmax_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uintmax_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uintmax_t_ptr_ptr_ptr_ptr { return new uintmax_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uintmax_t_ptr_ptr { return new uintmax_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uintmax_t***'; }
}
class uintmax_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uintmax_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uintmax_t_ptr_ptr_ptr_ptr_ptr { return new uintmax_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uintmax_t_ptr_ptr_ptr { return new uintmax_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uintmax_t****'; }
}
class wchar_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(wchar_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): wchar_t_ptr_ptr { return new wchar_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'wchar_t*'; }
}
class wchar_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(wchar_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): wchar_t_ptr_ptr_ptr { return new wchar_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): wchar_t_ptr { return new wchar_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'wchar_t**'; }
}
class wchar_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(wchar_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): wchar_t_ptr_ptr_ptr_ptr { return new wchar_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): wchar_t_ptr_ptr { return new wchar_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'wchar_t***'; }
}
class wchar_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(wchar_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): wchar_t_ptr_ptr_ptr_ptr_ptr { return new wchar_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): wchar_t_ptr_ptr_ptr { return new wchar_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'wchar_t****'; }
}
class __gwchar_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gwchar_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gwchar_t_ptr_ptr { return new __gwchar_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__gwchar_t*'; }
}
class __gwchar_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gwchar_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gwchar_t_ptr_ptr_ptr { return new __gwchar_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __gwchar_t_ptr { return new __gwchar_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__gwchar_t**'; }
}
class __gwchar_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gwchar_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gwchar_t_ptr_ptr_ptr_ptr { return new __gwchar_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __gwchar_t_ptr_ptr { return new __gwchar_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__gwchar_t***'; }
}
class __gwchar_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gwchar_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gwchar_t_ptr_ptr_ptr_ptr_ptr { return new __gwchar_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __gwchar_t_ptr_ptr_ptr { return new __gwchar_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__gwchar_t****'; }
}
class imaxdiv_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(imaxdiv_t $other): bool { return $this->data == $other->data; }
    public function addr(): imaxdiv_t_ptr { return new imaxdiv_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'imaxdiv_t'; }
}
class imaxdiv_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(imaxdiv_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): imaxdiv_t_ptr_ptr { return new imaxdiv_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): imaxdiv_t { return new imaxdiv_t($this->data[$n]); }
    public static function getType(): string { return 'imaxdiv_t*'; }
}
class imaxdiv_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(imaxdiv_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): imaxdiv_t_ptr_ptr_ptr { return new imaxdiv_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): imaxdiv_t_ptr { return new imaxdiv_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'imaxdiv_t**'; }
}
class imaxdiv_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(imaxdiv_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): imaxdiv_t_ptr_ptr_ptr_ptr { return new imaxdiv_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): imaxdiv_t_ptr_ptr { return new imaxdiv_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'imaxdiv_t***'; }
}
class imaxdiv_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(imaxdiv_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): imaxdiv_t_ptr_ptr_ptr_ptr_ptr { return new imaxdiv_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): imaxdiv_t_ptr_ptr_ptr { return new imaxdiv_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'imaxdiv_t****'; }
}
class __u_char_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_char_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_char_ptr_ptr { return new __u_char_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__u_char*'; }
}
class __u_char_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_char_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_char_ptr_ptr_ptr { return new __u_char_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_char_ptr { return new __u_char_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_char**'; }
}
class __u_char_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_char_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_char_ptr_ptr_ptr_ptr { return new __u_char_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_char_ptr_ptr { return new __u_char_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_char***'; }
}
class __u_char_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_char_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_char_ptr_ptr_ptr_ptr_ptr { return new __u_char_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_char_ptr_ptr_ptr { return new __u_char_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_char****'; }
}
class __u_short_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_short_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_short_ptr_ptr { return new __u_short_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__u_short*'; }
}
class __u_short_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_short_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_short_ptr_ptr_ptr { return new __u_short_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_short_ptr { return new __u_short_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_short**'; }
}
class __u_short_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_short_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_short_ptr_ptr_ptr_ptr { return new __u_short_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_short_ptr_ptr { return new __u_short_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_short***'; }
}
class __u_short_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_short_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_short_ptr_ptr_ptr_ptr_ptr { return new __u_short_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_short_ptr_ptr_ptr { return new __u_short_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_short****'; }
}
class __u_int_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_int_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_int_ptr_ptr { return new __u_int_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__u_int*'; }
}
class __u_int_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_int_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_int_ptr_ptr_ptr { return new __u_int_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_int_ptr { return new __u_int_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_int**'; }
}
class __u_int_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_int_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_int_ptr_ptr_ptr_ptr { return new __u_int_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_int_ptr_ptr { return new __u_int_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_int***'; }
}
class __u_int_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_int_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_int_ptr_ptr_ptr_ptr_ptr { return new __u_int_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_int_ptr_ptr_ptr { return new __u_int_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_int****'; }
}
class __u_long_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_long_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_long_ptr_ptr { return new __u_long_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__u_long*'; }
}
class __u_long_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_long_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_long_ptr_ptr_ptr { return new __u_long_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_long_ptr { return new __u_long_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_long**'; }
}
class __u_long_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_long_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_long_ptr_ptr_ptr_ptr { return new __u_long_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_long_ptr_ptr { return new __u_long_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_long***'; }
}
class __u_long_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_long_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_long_ptr_ptr_ptr_ptr_ptr { return new __u_long_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_long_ptr_ptr_ptr { return new __u_long_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_long****'; }
}
class __int8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int8_t_ptr_ptr { return new __int8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__int8_t*'; }
}
class __int8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int8_t_ptr_ptr_ptr { return new __int8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int8_t_ptr { return new __int8_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__int8_t**'; }
}
class __int8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int8_t_ptr_ptr_ptr_ptr { return new __int8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int8_t_ptr_ptr { return new __int8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int8_t***'; }
}
class __int8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int8_t_ptr_ptr_ptr_ptr_ptr { return new __int8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int8_t_ptr_ptr_ptr { return new __int8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int8_t****'; }
}
class __uint8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint8_t_ptr_ptr { return new __uint8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__uint8_t*'; }
}
class __uint8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint8_t_ptr_ptr_ptr { return new __uint8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint8_t_ptr { return new __uint8_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint8_t**'; }
}
class __uint8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint8_t_ptr_ptr_ptr_ptr { return new __uint8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint8_t_ptr_ptr { return new __uint8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint8_t***'; }
}
class __uint8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint8_t_ptr_ptr_ptr_ptr_ptr { return new __uint8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint8_t_ptr_ptr_ptr { return new __uint8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint8_t****'; }
}
class __int16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int16_t_ptr_ptr { return new __int16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__int16_t*'; }
}
class __int16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int16_t_ptr_ptr_ptr { return new __int16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int16_t_ptr { return new __int16_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__int16_t**'; }
}
class __int16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int16_t_ptr_ptr_ptr_ptr { return new __int16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int16_t_ptr_ptr { return new __int16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int16_t***'; }
}
class __int16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int16_t_ptr_ptr_ptr_ptr_ptr { return new __int16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int16_t_ptr_ptr_ptr { return new __int16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int16_t****'; }
}
class __uint16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint16_t_ptr_ptr { return new __uint16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__uint16_t*'; }
}
class __uint16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint16_t_ptr_ptr_ptr { return new __uint16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint16_t_ptr { return new __uint16_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint16_t**'; }
}
class __uint16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint16_t_ptr_ptr_ptr_ptr { return new __uint16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint16_t_ptr_ptr { return new __uint16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint16_t***'; }
}
class __uint16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint16_t_ptr_ptr_ptr_ptr_ptr { return new __uint16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint16_t_ptr_ptr_ptr { return new __uint16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint16_t****'; }
}
class __int32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int32_t_ptr_ptr { return new __int32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__int32_t*'; }
}
class __int32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int32_t_ptr_ptr_ptr { return new __int32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int32_t_ptr { return new __int32_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__int32_t**'; }
}
class __int32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int32_t_ptr_ptr_ptr_ptr { return new __int32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int32_t_ptr_ptr { return new __int32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int32_t***'; }
}
class __int32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int32_t_ptr_ptr_ptr_ptr_ptr { return new __int32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int32_t_ptr_ptr_ptr { return new __int32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int32_t****'; }
}
class __uint32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint32_t_ptr_ptr { return new __uint32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__uint32_t*'; }
}
class __uint32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint32_t_ptr_ptr_ptr { return new __uint32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint32_t_ptr { return new __uint32_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint32_t**'; }
}
class __uint32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint32_t_ptr_ptr_ptr_ptr { return new __uint32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint32_t_ptr_ptr { return new __uint32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint32_t***'; }
}
class __uint32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint32_t_ptr_ptr_ptr_ptr_ptr { return new __uint32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint32_t_ptr_ptr_ptr { return new __uint32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint32_t****'; }
}
class __int64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int64_t_ptr_ptr { return new __int64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return '__int64_t*'; }
}
class __int64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int64_t_ptr_ptr_ptr { return new __int64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int64_t_ptr { return new __int64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__int64_t**'; }
}
class __int64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int64_t_ptr_ptr_ptr_ptr { return new __int64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int64_t_ptr_ptr { return new __int64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int64_t***'; }
}
class __int64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__int64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __int64_t_ptr_ptr_ptr_ptr_ptr { return new __int64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __int64_t_ptr_ptr_ptr { return new __int64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__int64_t****'; }
}
class __uint64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint64_t_ptr_ptr { return new __uint64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__uint64_t*'; }
}
class __uint64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint64_t_ptr_ptr_ptr { return new __uint64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint64_t_ptr { return new __uint64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint64_t**'; }
}
class __uint64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint64_t_ptr_ptr_ptr_ptr { return new __uint64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint64_t_ptr_ptr { return new __uint64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint64_t***'; }
}
class __uint64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uint64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uint64_t_ptr_ptr_ptr_ptr_ptr { return new __uint64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uint64_t_ptr_ptr_ptr { return new __uint64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uint64_t****'; }
}
class __quad_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__quad_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __quad_t_ptr_ptr { return new __quad_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__quad_t*'; }
}
class __quad_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__quad_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __quad_t_ptr_ptr_ptr { return new __quad_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __quad_t_ptr { return new __quad_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__quad_t**'; }
}
class __quad_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__quad_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __quad_t_ptr_ptr_ptr_ptr { return new __quad_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __quad_t_ptr_ptr { return new __quad_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__quad_t***'; }
}
class __quad_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__quad_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __quad_t_ptr_ptr_ptr_ptr_ptr { return new __quad_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __quad_t_ptr_ptr_ptr { return new __quad_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__quad_t****'; }
}
class __u_quad_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_quad_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_quad_t_ptr_ptr { return new __u_quad_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__u_quad_t*'; }
}
class __u_quad_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_quad_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_quad_t_ptr_ptr_ptr { return new __u_quad_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_quad_t_ptr { return new __u_quad_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_quad_t**'; }
}
class __u_quad_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_quad_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_quad_t_ptr_ptr_ptr_ptr { return new __u_quad_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_quad_t_ptr_ptr { return new __u_quad_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_quad_t***'; }
}
class __u_quad_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__u_quad_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __u_quad_t_ptr_ptr_ptr_ptr_ptr { return new __u_quad_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __u_quad_t_ptr_ptr_ptr { return new __u_quad_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__u_quad_t****'; }
}
class __dev_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__dev_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __dev_t_ptr_ptr { return new __dev_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__dev_t*'; }
}
class __dev_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__dev_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __dev_t_ptr_ptr_ptr { return new __dev_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __dev_t_ptr { return new __dev_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__dev_t**'; }
}
class __dev_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__dev_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __dev_t_ptr_ptr_ptr_ptr { return new __dev_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __dev_t_ptr_ptr { return new __dev_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__dev_t***'; }
}
class __dev_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__dev_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __dev_t_ptr_ptr_ptr_ptr_ptr { return new __dev_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __dev_t_ptr_ptr_ptr { return new __dev_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__dev_t****'; }
}
class __uid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uid_t_ptr_ptr { return new __uid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__uid_t*'; }
}
class __uid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uid_t_ptr_ptr_ptr { return new __uid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uid_t_ptr { return new __uid_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__uid_t**'; }
}
class __uid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uid_t_ptr_ptr_ptr_ptr { return new __uid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uid_t_ptr_ptr { return new __uid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uid_t***'; }
}
class __uid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__uid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __uid_t_ptr_ptr_ptr_ptr_ptr { return new __uid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __uid_t_ptr_ptr_ptr { return new __uid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__uid_t****'; }
}
class __gid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gid_t_ptr_ptr { return new __gid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__gid_t*'; }
}
class __gid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gid_t_ptr_ptr_ptr { return new __gid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __gid_t_ptr { return new __gid_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__gid_t**'; }
}
class __gid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gid_t_ptr_ptr_ptr_ptr { return new __gid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __gid_t_ptr_ptr { return new __gid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__gid_t***'; }
}
class __gid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__gid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __gid_t_ptr_ptr_ptr_ptr_ptr { return new __gid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __gid_t_ptr_ptr_ptr { return new __gid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__gid_t****'; }
}
class __ino_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino_t_ptr_ptr { return new __ino_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__ino_t*'; }
}
class __ino_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino_t_ptr_ptr_ptr { return new __ino_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ino_t_ptr { return new __ino_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__ino_t**'; }
}
class __ino_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino_t_ptr_ptr_ptr_ptr { return new __ino_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ino_t_ptr_ptr { return new __ino_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__ino_t***'; }
}
class __ino_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino_t_ptr_ptr_ptr_ptr_ptr { return new __ino_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ino_t_ptr_ptr_ptr { return new __ino_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__ino_t****'; }
}
class __ino64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino64_t_ptr_ptr { return new __ino64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__ino64_t*'; }
}
class __ino64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino64_t_ptr_ptr_ptr { return new __ino64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ino64_t_ptr { return new __ino64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__ino64_t**'; }
}
class __ino64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino64_t_ptr_ptr_ptr_ptr { return new __ino64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ino64_t_ptr_ptr { return new __ino64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__ino64_t***'; }
}
class __ino64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ino64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ino64_t_ptr_ptr_ptr_ptr_ptr { return new __ino64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ino64_t_ptr_ptr_ptr { return new __ino64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__ino64_t****'; }
}
class __mode_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__mode_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __mode_t_ptr_ptr { return new __mode_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__mode_t*'; }
}
class __mode_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__mode_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __mode_t_ptr_ptr_ptr { return new __mode_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __mode_t_ptr { return new __mode_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__mode_t**'; }
}
class __mode_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__mode_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __mode_t_ptr_ptr_ptr_ptr { return new __mode_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __mode_t_ptr_ptr { return new __mode_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__mode_t***'; }
}
class __mode_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__mode_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __mode_t_ptr_ptr_ptr_ptr_ptr { return new __mode_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __mode_t_ptr_ptr_ptr { return new __mode_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__mode_t****'; }
}
class __nlink_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__nlink_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __nlink_t_ptr_ptr { return new __nlink_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__nlink_t*'; }
}
class __nlink_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__nlink_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __nlink_t_ptr_ptr_ptr { return new __nlink_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __nlink_t_ptr { return new __nlink_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__nlink_t**'; }
}
class __nlink_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__nlink_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __nlink_t_ptr_ptr_ptr_ptr { return new __nlink_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __nlink_t_ptr_ptr { return new __nlink_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__nlink_t***'; }
}
class __nlink_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__nlink_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __nlink_t_ptr_ptr_ptr_ptr_ptr { return new __nlink_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __nlink_t_ptr_ptr_ptr { return new __nlink_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__nlink_t****'; }
}
class __off_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off_t_ptr_ptr { return new __off_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__off_t*'; }
}
class __off_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off_t_ptr_ptr_ptr { return new __off_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __off_t_ptr { return new __off_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__off_t**'; }
}
class __off_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off_t_ptr_ptr_ptr_ptr { return new __off_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __off_t_ptr_ptr { return new __off_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__off_t***'; }
}
class __off_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off_t_ptr_ptr_ptr_ptr_ptr { return new __off_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __off_t_ptr_ptr_ptr { return new __off_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__off_t****'; }
}
class __off64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off64_t_ptr_ptr { return new __off64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__off64_t*'; }
}
class __off64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off64_t_ptr_ptr_ptr { return new __off64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __off64_t_ptr { return new __off64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__off64_t**'; }
}
class __off64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off64_t_ptr_ptr_ptr_ptr { return new __off64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __off64_t_ptr_ptr { return new __off64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__off64_t***'; }
}
class __off64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__off64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __off64_t_ptr_ptr_ptr_ptr_ptr { return new __off64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __off64_t_ptr_ptr_ptr { return new __off64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__off64_t****'; }
}
class __pid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pid_t_ptr_ptr { return new __pid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__pid_t*'; }
}
class __pid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pid_t_ptr_ptr_ptr { return new __pid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pid_t_ptr { return new __pid_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__pid_t**'; }
}
class __pid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pid_t_ptr_ptr_ptr_ptr { return new __pid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pid_t_ptr_ptr { return new __pid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__pid_t***'; }
}
class __pid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pid_t_ptr_ptr_ptr_ptr_ptr { return new __pid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pid_t_ptr_ptr_ptr { return new __pid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__pid_t****'; }
}
class __fsid_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsid_t $other): bool { return $this->data == $other->data; }
    public function addr(): __fsid_t_ptr { return new __fsid_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__fsid_t'; }
}
class __fsid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsid_t_ptr_ptr { return new __fsid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsid_t { return new __fsid_t($this->data[$n]); }
    public static function getType(): string { return '__fsid_t*'; }
}
class __fsid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsid_t_ptr_ptr_ptr { return new __fsid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsid_t_ptr { return new __fsid_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsid_t**'; }
}
class __fsid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsid_t_ptr_ptr_ptr_ptr { return new __fsid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsid_t_ptr_ptr { return new __fsid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsid_t***'; }
}
class __fsid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsid_t_ptr_ptr_ptr_ptr_ptr { return new __fsid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsid_t_ptr_ptr_ptr { return new __fsid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsid_t****'; }
}
class __clock_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clock_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clock_t_ptr_ptr { return new __clock_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__clock_t*'; }
}
class __clock_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clock_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clock_t_ptr_ptr_ptr { return new __clock_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __clock_t_ptr { return new __clock_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__clock_t**'; }
}
class __clock_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clock_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clock_t_ptr_ptr_ptr_ptr { return new __clock_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __clock_t_ptr_ptr { return new __clock_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__clock_t***'; }
}
class __clock_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clock_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clock_t_ptr_ptr_ptr_ptr_ptr { return new __clock_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __clock_t_ptr_ptr_ptr { return new __clock_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__clock_t****'; }
}
class __rlim_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim_t_ptr_ptr { return new __rlim_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__rlim_t*'; }
}
class __rlim_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim_t_ptr_ptr_ptr { return new __rlim_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __rlim_t_ptr { return new __rlim_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__rlim_t**'; }
}
class __rlim_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim_t_ptr_ptr_ptr_ptr { return new __rlim_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __rlim_t_ptr_ptr { return new __rlim_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__rlim_t***'; }
}
class __rlim_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim_t_ptr_ptr_ptr_ptr_ptr { return new __rlim_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __rlim_t_ptr_ptr_ptr { return new __rlim_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__rlim_t****'; }
}
class __rlim64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim64_t_ptr_ptr { return new __rlim64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__rlim64_t*'; }
}
class __rlim64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim64_t_ptr_ptr_ptr { return new __rlim64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __rlim64_t_ptr { return new __rlim64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__rlim64_t**'; }
}
class __rlim64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim64_t_ptr_ptr_ptr_ptr { return new __rlim64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __rlim64_t_ptr_ptr { return new __rlim64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__rlim64_t***'; }
}
class __rlim64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__rlim64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __rlim64_t_ptr_ptr_ptr_ptr_ptr { return new __rlim64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __rlim64_t_ptr_ptr_ptr { return new __rlim64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__rlim64_t****'; }
}
class __id_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__id_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __id_t_ptr_ptr { return new __id_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__id_t*'; }
}
class __id_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__id_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __id_t_ptr_ptr_ptr { return new __id_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __id_t_ptr { return new __id_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__id_t**'; }
}
class __id_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__id_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __id_t_ptr_ptr_ptr_ptr { return new __id_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __id_t_ptr_ptr { return new __id_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__id_t***'; }
}
class __id_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__id_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __id_t_ptr_ptr_ptr_ptr_ptr { return new __id_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __id_t_ptr_ptr_ptr { return new __id_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__id_t****'; }
}
class __time_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__time_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __time_t_ptr_ptr { return new __time_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__time_t*'; }
}
class __time_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__time_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __time_t_ptr_ptr_ptr { return new __time_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __time_t_ptr { return new __time_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__time_t**'; }
}
class __time_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__time_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __time_t_ptr_ptr_ptr_ptr { return new __time_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __time_t_ptr_ptr { return new __time_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__time_t***'; }
}
class __time_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__time_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __time_t_ptr_ptr_ptr_ptr_ptr { return new __time_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __time_t_ptr_ptr_ptr { return new __time_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__time_t****'; }
}
class __useconds_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__useconds_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __useconds_t_ptr_ptr { return new __useconds_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__useconds_t*'; }
}
class __useconds_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__useconds_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __useconds_t_ptr_ptr_ptr { return new __useconds_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __useconds_t_ptr { return new __useconds_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__useconds_t**'; }
}
class __useconds_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__useconds_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __useconds_t_ptr_ptr_ptr_ptr { return new __useconds_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __useconds_t_ptr_ptr { return new __useconds_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__useconds_t***'; }
}
class __useconds_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__useconds_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __useconds_t_ptr_ptr_ptr_ptr_ptr { return new __useconds_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __useconds_t_ptr_ptr_ptr { return new __useconds_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__useconds_t****'; }
}
class __suseconds_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__suseconds_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __suseconds_t_ptr_ptr { return new __suseconds_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__suseconds_t*'; }
}
class __suseconds_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__suseconds_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __suseconds_t_ptr_ptr_ptr { return new __suseconds_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __suseconds_t_ptr { return new __suseconds_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__suseconds_t**'; }
}
class __suseconds_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__suseconds_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __suseconds_t_ptr_ptr_ptr_ptr { return new __suseconds_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __suseconds_t_ptr_ptr { return new __suseconds_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__suseconds_t***'; }
}
class __suseconds_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__suseconds_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __suseconds_t_ptr_ptr_ptr_ptr_ptr { return new __suseconds_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __suseconds_t_ptr_ptr_ptr { return new __suseconds_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__suseconds_t****'; }
}
class __daddr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__daddr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __daddr_t_ptr_ptr { return new __daddr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__daddr_t*'; }
}
class __daddr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__daddr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __daddr_t_ptr_ptr_ptr { return new __daddr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __daddr_t_ptr { return new __daddr_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__daddr_t**'; }
}
class __daddr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__daddr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __daddr_t_ptr_ptr_ptr_ptr { return new __daddr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __daddr_t_ptr_ptr { return new __daddr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__daddr_t***'; }
}
class __daddr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__daddr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __daddr_t_ptr_ptr_ptr_ptr_ptr { return new __daddr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __daddr_t_ptr_ptr_ptr { return new __daddr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__daddr_t****'; }
}
class __key_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__key_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __key_t_ptr_ptr { return new __key_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__key_t*'; }
}
class __key_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__key_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __key_t_ptr_ptr_ptr { return new __key_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __key_t_ptr { return new __key_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__key_t**'; }
}
class __key_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__key_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __key_t_ptr_ptr_ptr_ptr { return new __key_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __key_t_ptr_ptr { return new __key_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__key_t***'; }
}
class __key_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__key_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __key_t_ptr_ptr_ptr_ptr_ptr { return new __key_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __key_t_ptr_ptr_ptr { return new __key_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__key_t****'; }
}
class __clockid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clockid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clockid_t_ptr_ptr { return new __clockid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__clockid_t*'; }
}
class __clockid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clockid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clockid_t_ptr_ptr_ptr { return new __clockid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __clockid_t_ptr { return new __clockid_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__clockid_t**'; }
}
class __clockid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clockid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clockid_t_ptr_ptr_ptr_ptr { return new __clockid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __clockid_t_ptr_ptr { return new __clockid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__clockid_t***'; }
}
class __clockid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__clockid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __clockid_t_ptr_ptr_ptr_ptr_ptr { return new __clockid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __clockid_t_ptr_ptr_ptr { return new __clockid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__clockid_t****'; }
}
class __timer_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timer_t $other): bool { return $this->data == $other->data; }
    public function addr(): __timer_t_ptr { return new __timer_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__timer_t'; }
}
class __timer_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timer_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timer_t_ptr_ptr { return new __timer_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timer_t { return new __timer_t($this->data[$n]); }
    public static function getType(): string { return '__timer_t*'; }
}
class __timer_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timer_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timer_t_ptr_ptr_ptr { return new __timer_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timer_t_ptr { return new __timer_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__timer_t**'; }
}
class __timer_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timer_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timer_t_ptr_ptr_ptr_ptr { return new __timer_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timer_t_ptr_ptr { return new __timer_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__timer_t***'; }
}
class __timer_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timer_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timer_t_ptr_ptr_ptr_ptr_ptr { return new __timer_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timer_t_ptr_ptr_ptr { return new __timer_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__timer_t****'; }
}
class __blksize_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blksize_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blksize_t_ptr_ptr { return new __blksize_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__blksize_t*'; }
}
class __blksize_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blksize_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blksize_t_ptr_ptr_ptr { return new __blksize_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blksize_t_ptr { return new __blksize_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__blksize_t**'; }
}
class __blksize_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blksize_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blksize_t_ptr_ptr_ptr_ptr { return new __blksize_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blksize_t_ptr_ptr { return new __blksize_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__blksize_t***'; }
}
class __blksize_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blksize_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blksize_t_ptr_ptr_ptr_ptr_ptr { return new __blksize_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blksize_t_ptr_ptr_ptr { return new __blksize_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__blksize_t****'; }
}
class __blkcnt_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt_t_ptr_ptr { return new __blkcnt_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__blkcnt_t*'; }
}
class __blkcnt_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt_t_ptr_ptr_ptr { return new __blkcnt_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blkcnt_t_ptr { return new __blkcnt_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__blkcnt_t**'; }
}
class __blkcnt_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt_t_ptr_ptr_ptr_ptr { return new __blkcnt_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blkcnt_t_ptr_ptr { return new __blkcnt_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__blkcnt_t***'; }
}
class __blkcnt_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt_t_ptr_ptr_ptr_ptr_ptr { return new __blkcnt_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blkcnt_t_ptr_ptr_ptr { return new __blkcnt_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__blkcnt_t****'; }
}
class __blkcnt64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt64_t_ptr_ptr { return new __blkcnt64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__blkcnt64_t*'; }
}
class __blkcnt64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt64_t_ptr_ptr_ptr { return new __blkcnt64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blkcnt64_t_ptr { return new __blkcnt64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__blkcnt64_t**'; }
}
class __blkcnt64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt64_t_ptr_ptr_ptr_ptr { return new __blkcnt64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blkcnt64_t_ptr_ptr { return new __blkcnt64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__blkcnt64_t***'; }
}
class __blkcnt64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__blkcnt64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __blkcnt64_t_ptr_ptr_ptr_ptr_ptr { return new __blkcnt64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __blkcnt64_t_ptr_ptr_ptr { return new __blkcnt64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__blkcnt64_t****'; }
}
class __fsblkcnt_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt_t_ptr_ptr { return new __fsblkcnt_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__fsblkcnt_t*'; }
}
class __fsblkcnt_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt_t_ptr_ptr_ptr { return new __fsblkcnt_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsblkcnt_t_ptr { return new __fsblkcnt_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsblkcnt_t**'; }
}
class __fsblkcnt_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt_t_ptr_ptr_ptr_ptr { return new __fsblkcnt_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsblkcnt_t_ptr_ptr { return new __fsblkcnt_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsblkcnt_t***'; }
}
class __fsblkcnt_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt_t_ptr_ptr_ptr_ptr_ptr { return new __fsblkcnt_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsblkcnt_t_ptr_ptr_ptr { return new __fsblkcnt_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsblkcnt_t****'; }
}
class __fsblkcnt64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt64_t_ptr_ptr { return new __fsblkcnt64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__fsblkcnt64_t*'; }
}
class __fsblkcnt64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt64_t_ptr_ptr_ptr { return new __fsblkcnt64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsblkcnt64_t_ptr { return new __fsblkcnt64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsblkcnt64_t**'; }
}
class __fsblkcnt64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt64_t_ptr_ptr_ptr_ptr { return new __fsblkcnt64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsblkcnt64_t_ptr_ptr { return new __fsblkcnt64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsblkcnt64_t***'; }
}
class __fsblkcnt64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsblkcnt64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsblkcnt64_t_ptr_ptr_ptr_ptr_ptr { return new __fsblkcnt64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsblkcnt64_t_ptr_ptr_ptr { return new __fsblkcnt64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsblkcnt64_t****'; }
}
class __fsfilcnt_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt_t_ptr_ptr { return new __fsfilcnt_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__fsfilcnt_t*'; }
}
class __fsfilcnt_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt_t_ptr_ptr_ptr { return new __fsfilcnt_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsfilcnt_t_ptr { return new __fsfilcnt_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsfilcnt_t**'; }
}
class __fsfilcnt_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt_t_ptr_ptr_ptr_ptr { return new __fsfilcnt_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsfilcnt_t_ptr_ptr { return new __fsfilcnt_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsfilcnt_t***'; }
}
class __fsfilcnt_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt_t_ptr_ptr_ptr_ptr_ptr { return new __fsfilcnt_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsfilcnt_t_ptr_ptr_ptr { return new __fsfilcnt_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsfilcnt_t****'; }
}
class __fsfilcnt64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt64_t_ptr_ptr { return new __fsfilcnt64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__fsfilcnt64_t*'; }
}
class __fsfilcnt64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt64_t_ptr_ptr_ptr { return new __fsfilcnt64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsfilcnt64_t_ptr { return new __fsfilcnt64_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsfilcnt64_t**'; }
}
class __fsfilcnt64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt64_t_ptr_ptr_ptr_ptr { return new __fsfilcnt64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsfilcnt64_t_ptr_ptr { return new __fsfilcnt64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsfilcnt64_t***'; }
}
class __fsfilcnt64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsfilcnt64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsfilcnt64_t_ptr_ptr_ptr_ptr_ptr { return new __fsfilcnt64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsfilcnt64_t_ptr_ptr_ptr { return new __fsfilcnt64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsfilcnt64_t****'; }
}
class __fsword_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsword_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsword_t_ptr_ptr { return new __fsword_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__fsword_t*'; }
}
class __fsword_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsword_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsword_t_ptr_ptr_ptr { return new __fsword_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsword_t_ptr { return new __fsword_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsword_t**'; }
}
class __fsword_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsword_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsword_t_ptr_ptr_ptr_ptr { return new __fsword_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsword_t_ptr_ptr { return new __fsword_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsword_t***'; }
}
class __fsword_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fsword_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fsword_t_ptr_ptr_ptr_ptr_ptr { return new __fsword_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fsword_t_ptr_ptr_ptr { return new __fsword_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fsword_t****'; }
}
class __ssize_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ssize_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ssize_t_ptr_ptr { return new __ssize_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__ssize_t*'; }
}
class __ssize_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ssize_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ssize_t_ptr_ptr_ptr { return new __ssize_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ssize_t_ptr { return new __ssize_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__ssize_t**'; }
}
class __ssize_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ssize_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ssize_t_ptr_ptr_ptr_ptr { return new __ssize_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ssize_t_ptr_ptr { return new __ssize_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__ssize_t***'; }
}
class __ssize_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__ssize_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __ssize_t_ptr_ptr_ptr_ptr_ptr { return new __ssize_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __ssize_t_ptr_ptr_ptr { return new __ssize_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__ssize_t****'; }
}
class __syscall_slong_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_slong_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_slong_t_ptr_ptr { return new __syscall_slong_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__syscall_slong_t*'; }
}
class __syscall_slong_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_slong_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_slong_t_ptr_ptr_ptr { return new __syscall_slong_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __syscall_slong_t_ptr { return new __syscall_slong_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__syscall_slong_t**'; }
}
class __syscall_slong_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_slong_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_slong_t_ptr_ptr_ptr_ptr { return new __syscall_slong_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __syscall_slong_t_ptr_ptr { return new __syscall_slong_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__syscall_slong_t***'; }
}
class __syscall_slong_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_slong_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_slong_t_ptr_ptr_ptr_ptr_ptr { return new __syscall_slong_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __syscall_slong_t_ptr_ptr_ptr { return new __syscall_slong_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__syscall_slong_t****'; }
}
class __syscall_ulong_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_ulong_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_ulong_t_ptr_ptr { return new __syscall_ulong_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__syscall_ulong_t*'; }
}
class __syscall_ulong_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_ulong_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_ulong_t_ptr_ptr_ptr { return new __syscall_ulong_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __syscall_ulong_t_ptr { return new __syscall_ulong_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__syscall_ulong_t**'; }
}
class __syscall_ulong_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_ulong_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_ulong_t_ptr_ptr_ptr_ptr { return new __syscall_ulong_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __syscall_ulong_t_ptr_ptr { return new __syscall_ulong_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__syscall_ulong_t***'; }
}
class __syscall_ulong_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__syscall_ulong_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __syscall_ulong_t_ptr_ptr_ptr_ptr_ptr { return new __syscall_ulong_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __syscall_ulong_t_ptr_ptr_ptr { return new __syscall_ulong_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__syscall_ulong_t****'; }
}
class __loff_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__loff_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __loff_t_ptr_ptr { return new __loff_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__loff_t*'; }
}
class __loff_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__loff_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __loff_t_ptr_ptr_ptr { return new __loff_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __loff_t_ptr { return new __loff_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__loff_t**'; }
}
class __loff_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__loff_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __loff_t_ptr_ptr_ptr_ptr { return new __loff_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __loff_t_ptr_ptr { return new __loff_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__loff_t***'; }
}
class __loff_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__loff_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __loff_t_ptr_ptr_ptr_ptr_ptr { return new __loff_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __loff_t_ptr_ptr_ptr { return new __loff_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__loff_t****'; }
}
class __qaddr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__qaddr_t $other): bool { return $this->data == $other->data; }
    public function addr(): __qaddr_t_ptr { return new __qaddr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__qaddr_t'; }
}
class __qaddr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__qaddr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __qaddr_t_ptr_ptr { return new __qaddr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __qaddr_t { return new __qaddr_t($this->data[$n]); }
    public static function getType(): string { return '__qaddr_t*'; }
}
class __qaddr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__qaddr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __qaddr_t_ptr_ptr_ptr { return new __qaddr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __qaddr_t_ptr { return new __qaddr_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__qaddr_t**'; }
}
class __qaddr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__qaddr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __qaddr_t_ptr_ptr_ptr_ptr { return new __qaddr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __qaddr_t_ptr_ptr { return new __qaddr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__qaddr_t***'; }
}
class __qaddr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__qaddr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __qaddr_t_ptr_ptr_ptr_ptr_ptr { return new __qaddr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __qaddr_t_ptr_ptr_ptr { return new __qaddr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__qaddr_t****'; }
}
class __caddr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__caddr_t $other): bool { return $this->data == $other->data; }
    public function addr(): __caddr_t_ptr { return new __caddr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__caddr_t'; }
}
class __caddr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__caddr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __caddr_t_ptr_ptr { return new __caddr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __caddr_t { return new __caddr_t($this->data[$n]); }
    public static function getType(): string { return '__caddr_t*'; }
}
class __caddr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__caddr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __caddr_t_ptr_ptr_ptr { return new __caddr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __caddr_t_ptr { return new __caddr_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__caddr_t**'; }
}
class __caddr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__caddr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __caddr_t_ptr_ptr_ptr_ptr { return new __caddr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __caddr_t_ptr_ptr { return new __caddr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__caddr_t***'; }
}
class __caddr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__caddr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __caddr_t_ptr_ptr_ptr_ptr_ptr { return new __caddr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __caddr_t_ptr_ptr_ptr { return new __caddr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__caddr_t****'; }
}
class __intptr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__intptr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __intptr_t_ptr_ptr { return new __intptr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__intptr_t*'; }
}
class __intptr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__intptr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __intptr_t_ptr_ptr_ptr { return new __intptr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __intptr_t_ptr { return new __intptr_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__intptr_t**'; }
}
class __intptr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__intptr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __intptr_t_ptr_ptr_ptr_ptr { return new __intptr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __intptr_t_ptr_ptr { return new __intptr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__intptr_t***'; }
}
class __intptr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__intptr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __intptr_t_ptr_ptr_ptr_ptr_ptr { return new __intptr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __intptr_t_ptr_ptr_ptr { return new __intptr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__intptr_t****'; }
}
class __socklen_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__socklen_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __socklen_t_ptr_ptr { return new __socklen_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__socklen_t*'; }
}
class __socklen_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__socklen_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __socklen_t_ptr_ptr_ptr { return new __socklen_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __socklen_t_ptr { return new __socklen_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__socklen_t**'; }
}
class __socklen_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__socklen_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __socklen_t_ptr_ptr_ptr_ptr { return new __socklen_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __socklen_t_ptr_ptr { return new __socklen_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__socklen_t***'; }
}
class __socklen_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__socklen_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __socklen_t_ptr_ptr_ptr_ptr_ptr { return new __socklen_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __socklen_t_ptr_ptr_ptr { return new __socklen_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__socklen_t****'; }
}
class u_char_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_char_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_char_ptr_ptr { return new u_char_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'u_char*'; }
}
class u_char_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_char_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_char_ptr_ptr_ptr { return new u_char_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_char_ptr { return new u_char_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_char**'; }
}
class u_char_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_char_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_char_ptr_ptr_ptr_ptr { return new u_char_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_char_ptr_ptr { return new u_char_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_char***'; }
}
class u_char_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_char_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_char_ptr_ptr_ptr_ptr_ptr { return new u_char_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_char_ptr_ptr_ptr { return new u_char_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_char****'; }
}
class u_short_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_short_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_short_ptr_ptr { return new u_short_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'u_short*'; }
}
class u_short_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_short_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_short_ptr_ptr_ptr { return new u_short_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_short_ptr { return new u_short_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_short**'; }
}
class u_short_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_short_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_short_ptr_ptr_ptr_ptr { return new u_short_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_short_ptr_ptr { return new u_short_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_short***'; }
}
class u_short_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_short_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_short_ptr_ptr_ptr_ptr_ptr { return new u_short_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_short_ptr_ptr_ptr { return new u_short_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_short****'; }
}
class u_int_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int_ptr_ptr { return new u_int_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'u_int*'; }
}
class u_int_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int_ptr_ptr_ptr { return new u_int_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int_ptr { return new u_int_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int**'; }
}
class u_int_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int_ptr_ptr_ptr_ptr { return new u_int_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int_ptr_ptr { return new u_int_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int***'; }
}
class u_int_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int_ptr_ptr_ptr_ptr_ptr { return new u_int_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int_ptr_ptr_ptr { return new u_int_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int****'; }
}
class u_long_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_long_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_long_ptr_ptr { return new u_long_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'u_long*'; }
}
class u_long_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_long_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_long_ptr_ptr_ptr { return new u_long_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_long_ptr { return new u_long_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_long**'; }
}
class u_long_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_long_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_long_ptr_ptr_ptr_ptr { return new u_long_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_long_ptr_ptr { return new u_long_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_long***'; }
}
class u_long_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_long_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_long_ptr_ptr_ptr_ptr_ptr { return new u_long_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_long_ptr_ptr_ptr { return new u_long_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_long****'; }
}
class quad_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(quad_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): quad_t_ptr_ptr { return new quad_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'quad_t*'; }
}
class quad_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(quad_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): quad_t_ptr_ptr_ptr { return new quad_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): quad_t_ptr { return new quad_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'quad_t**'; }
}
class quad_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(quad_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): quad_t_ptr_ptr_ptr_ptr { return new quad_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): quad_t_ptr_ptr { return new quad_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'quad_t***'; }
}
class quad_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(quad_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): quad_t_ptr_ptr_ptr_ptr_ptr { return new quad_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): quad_t_ptr_ptr_ptr { return new quad_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'quad_t****'; }
}
class u_quad_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_quad_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_quad_t_ptr_ptr { return new u_quad_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'u_quad_t*'; }
}
class u_quad_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_quad_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_quad_t_ptr_ptr_ptr { return new u_quad_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_quad_t_ptr { return new u_quad_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_quad_t**'; }
}
class u_quad_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_quad_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_quad_t_ptr_ptr_ptr_ptr { return new u_quad_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_quad_t_ptr_ptr { return new u_quad_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_quad_t***'; }
}
class u_quad_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_quad_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_quad_t_ptr_ptr_ptr_ptr_ptr { return new u_quad_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_quad_t_ptr_ptr_ptr { return new u_quad_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_quad_t****'; }
}
class fsid_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsid_t $other): bool { return $this->data == $other->data; }
    public function addr(): fsid_t_ptr { return new fsid_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'fsid_t'; }
}
class fsid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsid_t_ptr_ptr { return new fsid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsid_t { return new fsid_t($this->data[$n]); }
    public static function getType(): string { return 'fsid_t*'; }
}
class fsid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsid_t_ptr_ptr_ptr { return new fsid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsid_t_ptr { return new fsid_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsid_t**'; }
}
class fsid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsid_t_ptr_ptr_ptr_ptr { return new fsid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsid_t_ptr_ptr { return new fsid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsid_t***'; }
}
class fsid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsid_t_ptr_ptr_ptr_ptr_ptr { return new fsid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsid_t_ptr_ptr_ptr { return new fsid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsid_t****'; }
}
class loff_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(loff_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): loff_t_ptr_ptr { return new loff_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'loff_t*'; }
}
class loff_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(loff_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): loff_t_ptr_ptr_ptr { return new loff_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): loff_t_ptr { return new loff_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'loff_t**'; }
}
class loff_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(loff_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): loff_t_ptr_ptr_ptr_ptr { return new loff_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): loff_t_ptr_ptr { return new loff_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'loff_t***'; }
}
class loff_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(loff_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): loff_t_ptr_ptr_ptr_ptr_ptr { return new loff_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): loff_t_ptr_ptr_ptr { return new loff_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'loff_t****'; }
}
class ino_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ino_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ino_t_ptr_ptr { return new ino_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'ino_t*'; }
}
class ino_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ino_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ino_t_ptr_ptr_ptr { return new ino_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ino_t_ptr { return new ino_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'ino_t**'; }
}
class ino_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ino_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ino_t_ptr_ptr_ptr_ptr { return new ino_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ino_t_ptr_ptr { return new ino_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'ino_t***'; }
}
class ino_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ino_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ino_t_ptr_ptr_ptr_ptr_ptr { return new ino_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ino_t_ptr_ptr_ptr { return new ino_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'ino_t****'; }
}
class dev_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(dev_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): dev_t_ptr_ptr { return new dev_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'dev_t*'; }
}
class dev_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(dev_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): dev_t_ptr_ptr_ptr { return new dev_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): dev_t_ptr { return new dev_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'dev_t**'; }
}
class dev_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(dev_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): dev_t_ptr_ptr_ptr_ptr { return new dev_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): dev_t_ptr_ptr { return new dev_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'dev_t***'; }
}
class dev_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(dev_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): dev_t_ptr_ptr_ptr_ptr_ptr { return new dev_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): dev_t_ptr_ptr_ptr { return new dev_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'dev_t****'; }
}
class gid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(gid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): gid_t_ptr_ptr { return new gid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'gid_t*'; }
}
class gid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(gid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): gid_t_ptr_ptr_ptr { return new gid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): gid_t_ptr { return new gid_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'gid_t**'; }
}
class gid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(gid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): gid_t_ptr_ptr_ptr_ptr { return new gid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): gid_t_ptr_ptr { return new gid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'gid_t***'; }
}
class gid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(gid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): gid_t_ptr_ptr_ptr_ptr_ptr { return new gid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): gid_t_ptr_ptr_ptr { return new gid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'gid_t****'; }
}
class mode_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(mode_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): mode_t_ptr_ptr { return new mode_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'mode_t*'; }
}
class mode_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(mode_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): mode_t_ptr_ptr_ptr { return new mode_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): mode_t_ptr { return new mode_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'mode_t**'; }
}
class mode_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(mode_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): mode_t_ptr_ptr_ptr_ptr { return new mode_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): mode_t_ptr_ptr { return new mode_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'mode_t***'; }
}
class mode_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(mode_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): mode_t_ptr_ptr_ptr_ptr_ptr { return new mode_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): mode_t_ptr_ptr_ptr { return new mode_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'mode_t****'; }
}
class nlink_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(nlink_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): nlink_t_ptr_ptr { return new nlink_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'nlink_t*'; }
}
class nlink_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(nlink_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): nlink_t_ptr_ptr_ptr { return new nlink_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): nlink_t_ptr { return new nlink_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'nlink_t**'; }
}
class nlink_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(nlink_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): nlink_t_ptr_ptr_ptr_ptr { return new nlink_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): nlink_t_ptr_ptr { return new nlink_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'nlink_t***'; }
}
class nlink_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(nlink_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): nlink_t_ptr_ptr_ptr_ptr_ptr { return new nlink_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): nlink_t_ptr_ptr_ptr { return new nlink_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'nlink_t****'; }
}
class uid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uid_t_ptr_ptr { return new uid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uid_t*'; }
}
class uid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uid_t_ptr_ptr_ptr { return new uid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uid_t_ptr { return new uid_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'uid_t**'; }
}
class uid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uid_t_ptr_ptr_ptr_ptr { return new uid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uid_t_ptr_ptr { return new uid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uid_t***'; }
}
class uid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uid_t_ptr_ptr_ptr_ptr_ptr { return new uid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uid_t_ptr_ptr_ptr { return new uid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uid_t****'; }
}
class pid_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pid_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pid_t_ptr_ptr { return new pid_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'pid_t*'; }
}
class pid_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pid_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pid_t_ptr_ptr_ptr { return new pid_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pid_t_ptr { return new pid_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pid_t**'; }
}
class pid_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pid_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pid_t_ptr_ptr_ptr_ptr { return new pid_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pid_t_ptr_ptr { return new pid_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pid_t***'; }
}
class pid_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pid_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pid_t_ptr_ptr_ptr_ptr_ptr { return new pid_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pid_t_ptr_ptr_ptr { return new pid_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pid_t****'; }
}
class id_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(id_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): id_t_ptr_ptr { return new id_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'id_t*'; }
}
class id_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(id_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): id_t_ptr_ptr_ptr { return new id_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): id_t_ptr { return new id_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'id_t**'; }
}
class id_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(id_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): id_t_ptr_ptr_ptr_ptr { return new id_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): id_t_ptr_ptr { return new id_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'id_t***'; }
}
class id_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(id_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): id_t_ptr_ptr_ptr_ptr_ptr { return new id_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): id_t_ptr_ptr_ptr { return new id_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'id_t****'; }
}
class daddr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(daddr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): daddr_t_ptr_ptr { return new daddr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'daddr_t*'; }
}
class daddr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(daddr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): daddr_t_ptr_ptr_ptr { return new daddr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): daddr_t_ptr { return new daddr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'daddr_t**'; }
}
class daddr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(daddr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): daddr_t_ptr_ptr_ptr_ptr { return new daddr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): daddr_t_ptr_ptr { return new daddr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'daddr_t***'; }
}
class daddr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(daddr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): daddr_t_ptr_ptr_ptr_ptr_ptr { return new daddr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): daddr_t_ptr_ptr_ptr { return new daddr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'daddr_t****'; }
}
class caddr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(caddr_t $other): bool { return $this->data == $other->data; }
    public function addr(): caddr_t_ptr { return new caddr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'caddr_t'; }
}
class caddr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(caddr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): caddr_t_ptr_ptr { return new caddr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): caddr_t { return new caddr_t($this->data[$n]); }
    public static function getType(): string { return 'caddr_t*'; }
}
class caddr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(caddr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): caddr_t_ptr_ptr_ptr { return new caddr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): caddr_t_ptr { return new caddr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'caddr_t**'; }
}
class caddr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(caddr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): caddr_t_ptr_ptr_ptr_ptr { return new caddr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): caddr_t_ptr_ptr { return new caddr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'caddr_t***'; }
}
class caddr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(caddr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): caddr_t_ptr_ptr_ptr_ptr_ptr { return new caddr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): caddr_t_ptr_ptr_ptr { return new caddr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'caddr_t****'; }
}
class key_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(key_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): key_t_ptr_ptr { return new key_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'key_t*'; }
}
class key_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(key_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): key_t_ptr_ptr_ptr { return new key_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): key_t_ptr { return new key_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'key_t**'; }
}
class key_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(key_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): key_t_ptr_ptr_ptr_ptr { return new key_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): key_t_ptr_ptr { return new key_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'key_t***'; }
}
class key_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(key_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): key_t_ptr_ptr_ptr_ptr_ptr { return new key_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): key_t_ptr_ptr_ptr { return new key_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'key_t****'; }
}
class __sig_atomic_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sig_atomic_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sig_atomic_t_ptr_ptr { return new __sig_atomic_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__sig_atomic_t*'; }
}
class __sig_atomic_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sig_atomic_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sig_atomic_t_ptr_ptr_ptr { return new __sig_atomic_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sig_atomic_t_ptr { return new __sig_atomic_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__sig_atomic_t**'; }
}
class __sig_atomic_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sig_atomic_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sig_atomic_t_ptr_ptr_ptr_ptr { return new __sig_atomic_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sig_atomic_t_ptr_ptr { return new __sig_atomic_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__sig_atomic_t***'; }
}
class __sig_atomic_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sig_atomic_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sig_atomic_t_ptr_ptr_ptr_ptr_ptr { return new __sig_atomic_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sig_atomic_t_ptr_ptr_ptr { return new __sig_atomic_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__sig_atomic_t****'; }
}
class __sigset_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sigset_t $other): bool { return $this->data == $other->data; }
    public function addr(): __sigset_t_ptr { return new __sigset_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__sigset_t'; }
}
class __sigset_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sigset_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sigset_t_ptr_ptr { return new __sigset_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sigset_t { return new __sigset_t($this->data[$n]); }
    public static function getType(): string { return '__sigset_t*'; }
}
class __sigset_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sigset_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sigset_t_ptr_ptr_ptr { return new __sigset_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sigset_t_ptr { return new __sigset_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__sigset_t**'; }
}
class __sigset_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sigset_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sigset_t_ptr_ptr_ptr_ptr { return new __sigset_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sigset_t_ptr_ptr { return new __sigset_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__sigset_t***'; }
}
class __sigset_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__sigset_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __sigset_t_ptr_ptr_ptr_ptr_ptr { return new __sigset_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __sigset_t_ptr_ptr_ptr { return new __sigset_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__sigset_t****'; }
}
class sigset_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(sigset_t $other): bool { return $this->data == $other->data; }
    public function addr(): sigset_t_ptr { return new sigset_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'sigset_t'; }
}
class sigset_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(sigset_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): sigset_t_ptr_ptr { return new sigset_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): sigset_t { return new sigset_t($this->data[$n]); }
    public static function getType(): string { return 'sigset_t*'; }
}
class sigset_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(sigset_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): sigset_t_ptr_ptr_ptr { return new sigset_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): sigset_t_ptr { return new sigset_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'sigset_t**'; }
}
class sigset_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(sigset_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): sigset_t_ptr_ptr_ptr_ptr { return new sigset_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): sigset_t_ptr_ptr { return new sigset_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'sigset_t***'; }
}
class sigset_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(sigset_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): sigset_t_ptr_ptr_ptr_ptr_ptr { return new sigset_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): sigset_t_ptr_ptr_ptr { return new sigset_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'sigset_t****'; }
}
class suseconds_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(suseconds_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): suseconds_t_ptr_ptr { return new suseconds_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'suseconds_t*'; }
}
class suseconds_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(suseconds_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): suseconds_t_ptr_ptr_ptr { return new suseconds_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): suseconds_t_ptr { return new suseconds_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'suseconds_t**'; }
}
class suseconds_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(suseconds_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): suseconds_t_ptr_ptr_ptr_ptr { return new suseconds_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): suseconds_t_ptr_ptr { return new suseconds_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'suseconds_t***'; }
}
class suseconds_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(suseconds_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): suseconds_t_ptr_ptr_ptr_ptr_ptr { return new suseconds_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): suseconds_t_ptr_ptr_ptr { return new suseconds_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'suseconds_t****'; }
}
class __fd_mask_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fd_mask_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fd_mask_ptr_ptr { return new __fd_mask_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__fd_mask*'; }
}
class __fd_mask_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fd_mask_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fd_mask_ptr_ptr_ptr { return new __fd_mask_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fd_mask_ptr { return new __fd_mask_ptr($this->data[$n]); }
    public static function getType(): string { return '__fd_mask**'; }
}
class __fd_mask_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fd_mask_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fd_mask_ptr_ptr_ptr_ptr { return new __fd_mask_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fd_mask_ptr_ptr { return new __fd_mask_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fd_mask***'; }
}
class __fd_mask_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__fd_mask_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __fd_mask_ptr_ptr_ptr_ptr_ptr { return new __fd_mask_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __fd_mask_ptr_ptr_ptr { return new __fd_mask_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__fd_mask****'; }
}
class fd_set implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_set $other): bool { return $this->data == $other->data; }
    public function addr(): fd_set_ptr { return new fd_set_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'fd_set'; }
}
class fd_set_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_set_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_set_ptr_ptr { return new fd_set_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_set { return new fd_set($this->data[$n]); }
    public static function getType(): string { return 'fd_set*'; }
}
class fd_set_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_set_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_set_ptr_ptr_ptr { return new fd_set_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_set_ptr { return new fd_set_ptr($this->data[$n]); }
    public static function getType(): string { return 'fd_set**'; }
}
class fd_set_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_set_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_set_ptr_ptr_ptr_ptr { return new fd_set_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_set_ptr_ptr { return new fd_set_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fd_set***'; }
}
class fd_set_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_set_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_set_ptr_ptr_ptr_ptr_ptr { return new fd_set_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_set_ptr_ptr_ptr { return new fd_set_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fd_set****'; }
}
class fd_mask_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_mask_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_mask_ptr_ptr { return new fd_mask_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'fd_mask*'; }
}
class fd_mask_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_mask_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_mask_ptr_ptr_ptr { return new fd_mask_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_mask_ptr { return new fd_mask_ptr($this->data[$n]); }
    public static function getType(): string { return 'fd_mask**'; }
}
class fd_mask_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_mask_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_mask_ptr_ptr_ptr_ptr { return new fd_mask_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_mask_ptr_ptr { return new fd_mask_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fd_mask***'; }
}
class fd_mask_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fd_mask_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fd_mask_ptr_ptr_ptr_ptr_ptr { return new fd_mask_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fd_mask_ptr_ptr_ptr { return new fd_mask_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fd_mask****'; }
}
class __timezone_ptr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timezone_ptr_t $other): bool { return $this->data == $other->data; }
    public function addr(): __timezone_ptr_t_ptr { return new __timezone_ptr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__timezone_ptr_t'; }
}
class __timezone_ptr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timezone_ptr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timezone_ptr_t_ptr_ptr { return new __timezone_ptr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timezone_ptr_t { return new __timezone_ptr_t($this->data[$n]); }
    public static function getType(): string { return '__timezone_ptr_t*'; }
}
class __timezone_ptr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timezone_ptr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timezone_ptr_t_ptr_ptr_ptr { return new __timezone_ptr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timezone_ptr_t_ptr { return new __timezone_ptr_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__timezone_ptr_t**'; }
}
class __timezone_ptr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timezone_ptr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timezone_ptr_t_ptr_ptr_ptr_ptr { return new __timezone_ptr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timezone_ptr_t_ptr_ptr { return new __timezone_ptr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__timezone_ptr_t***'; }
}
class __timezone_ptr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__timezone_ptr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __timezone_ptr_t_ptr_ptr_ptr_ptr_ptr { return new __timezone_ptr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __timezone_ptr_t_ptr_ptr_ptr { return new __timezone_ptr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__timezone_ptr_t****'; }
}
class __itimer_which_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__itimer_which_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __itimer_which_t_ptr_ptr { return new __itimer_which_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return '__itimer_which_t*'; }
}
class __itimer_which_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__itimer_which_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __itimer_which_t_ptr_ptr_ptr { return new __itimer_which_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __itimer_which_t_ptr { return new __itimer_which_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__itimer_which_t**'; }
}
class __itimer_which_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__itimer_which_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __itimer_which_t_ptr_ptr_ptr_ptr { return new __itimer_which_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __itimer_which_t_ptr_ptr { return new __itimer_which_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__itimer_which_t***'; }
}
class __itimer_which_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__itimer_which_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __itimer_which_t_ptr_ptr_ptr_ptr_ptr { return new __itimer_which_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __itimer_which_t_ptr_ptr_ptr { return new __itimer_which_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__itimer_which_t****'; }
}
class ulong_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ulong_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ulong_ptr_ptr { return new ulong_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'ulong*'; }
}
class ulong_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ulong_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ulong_ptr_ptr_ptr { return new ulong_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ulong_ptr { return new ulong_ptr($this->data[$n]); }
    public static function getType(): string { return 'ulong**'; }
}
class ulong_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ulong_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ulong_ptr_ptr_ptr_ptr { return new ulong_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ulong_ptr_ptr { return new ulong_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'ulong***'; }
}
class ulong_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ulong_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ulong_ptr_ptr_ptr_ptr_ptr { return new ulong_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ulong_ptr_ptr_ptr { return new ulong_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'ulong****'; }
}
class ushort_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ushort_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ushort_ptr_ptr { return new ushort_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'ushort*'; }
}
class ushort_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ushort_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ushort_ptr_ptr_ptr { return new ushort_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ushort_ptr { return new ushort_ptr($this->data[$n]); }
    public static function getType(): string { return 'ushort**'; }
}
class ushort_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ushort_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ushort_ptr_ptr_ptr_ptr { return new ushort_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ushort_ptr_ptr { return new ushort_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'ushort***'; }
}
class ushort_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(ushort_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): ushort_ptr_ptr_ptr_ptr_ptr { return new ushort_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): ushort_ptr_ptr_ptr { return new ushort_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'ushort****'; }
}
class uint_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_ptr_ptr { return new uint_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'uint*'; }
}
class uint_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_ptr_ptr_ptr { return new uint_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_ptr { return new uint_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint**'; }
}
class uint_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_ptr_ptr_ptr_ptr { return new uint_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_ptr_ptr { return new uint_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint***'; }
}
class uint_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(uint_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): uint_ptr_ptr_ptr_ptr_ptr { return new uint_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): uint_ptr_ptr_ptr { return new uint_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'uint****'; }
}
class u_int8_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int8_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int8_t_ptr_ptr { return new u_int8_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'u_int8_t*'; }
}
class u_int8_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int8_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int8_t_ptr_ptr_ptr { return new u_int8_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int8_t_ptr { return new u_int8_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int8_t**'; }
}
class u_int8_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int8_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int8_t_ptr_ptr_ptr_ptr { return new u_int8_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int8_t_ptr_ptr { return new u_int8_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int8_t***'; }
}
class u_int8_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int8_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int8_t_ptr_ptr_ptr_ptr_ptr { return new u_int8_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int8_t_ptr_ptr_ptr { return new u_int8_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int8_t****'; }
}
class u_int16_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int16_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int16_t_ptr_ptr { return new u_int16_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0) { return $this->data[$n]; }
    public static function getType(): string { return 'u_int16_t*'; }
}
class u_int16_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int16_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int16_t_ptr_ptr_ptr { return new u_int16_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int16_t_ptr { return new u_int16_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int16_t**'; }
}
class u_int16_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int16_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int16_t_ptr_ptr_ptr_ptr { return new u_int16_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int16_t_ptr_ptr { return new u_int16_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int16_t***'; }
}
class u_int16_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int16_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int16_t_ptr_ptr_ptr_ptr_ptr { return new u_int16_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int16_t_ptr_ptr_ptr { return new u_int16_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int16_t****'; }
}
class u_int32_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int32_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int32_t_ptr_ptr { return new u_int32_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'u_int32_t*'; }
}
class u_int32_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int32_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int32_t_ptr_ptr_ptr { return new u_int32_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int32_t_ptr { return new u_int32_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int32_t**'; }
}
class u_int32_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int32_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int32_t_ptr_ptr_ptr_ptr { return new u_int32_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int32_t_ptr_ptr { return new u_int32_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int32_t***'; }
}
class u_int32_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int32_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int32_t_ptr_ptr_ptr_ptr_ptr { return new u_int32_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int32_t_ptr_ptr_ptr { return new u_int32_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int32_t****'; }
}
class u_int64_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int64_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int64_t_ptr_ptr { return new u_int64_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'u_int64_t*'; }
}
class u_int64_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int64_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int64_t_ptr_ptr_ptr { return new u_int64_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int64_t_ptr { return new u_int64_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int64_t**'; }
}
class u_int64_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int64_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int64_t_ptr_ptr_ptr_ptr { return new u_int64_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int64_t_ptr_ptr { return new u_int64_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int64_t***'; }
}
class u_int64_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(u_int64_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): u_int64_t_ptr_ptr_ptr_ptr_ptr { return new u_int64_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): u_int64_t_ptr_ptr_ptr { return new u_int64_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'u_int64_t****'; }
}
class register_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(register_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): register_t_ptr_ptr { return new register_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'register_t*'; }
}
class register_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(register_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): register_t_ptr_ptr_ptr { return new register_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): register_t_ptr { return new register_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'register_t**'; }
}
class register_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(register_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): register_t_ptr_ptr_ptr_ptr { return new register_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): register_t_ptr_ptr { return new register_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'register_t***'; }
}
class register_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(register_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): register_t_ptr_ptr_ptr_ptr_ptr { return new register_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): register_t_ptr_ptr_ptr { return new register_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'register_t****'; }
}
class blksize_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blksize_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blksize_t_ptr_ptr { return new blksize_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'blksize_t*'; }
}
class blksize_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blksize_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blksize_t_ptr_ptr_ptr { return new blksize_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): blksize_t_ptr { return new blksize_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'blksize_t**'; }
}
class blksize_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blksize_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blksize_t_ptr_ptr_ptr_ptr { return new blksize_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): blksize_t_ptr_ptr { return new blksize_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'blksize_t***'; }
}
class blksize_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blksize_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blksize_t_ptr_ptr_ptr_ptr_ptr { return new blksize_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): blksize_t_ptr_ptr_ptr { return new blksize_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'blksize_t****'; }
}
class blkcnt_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blkcnt_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blkcnt_t_ptr_ptr { return new blkcnt_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'blkcnt_t*'; }
}
class blkcnt_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blkcnt_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blkcnt_t_ptr_ptr_ptr { return new blkcnt_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): blkcnt_t_ptr { return new blkcnt_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'blkcnt_t**'; }
}
class blkcnt_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blkcnt_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blkcnt_t_ptr_ptr_ptr_ptr { return new blkcnt_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): blkcnt_t_ptr_ptr { return new blkcnt_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'blkcnt_t***'; }
}
class blkcnt_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(blkcnt_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): blkcnt_t_ptr_ptr_ptr_ptr_ptr { return new blkcnt_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): blkcnt_t_ptr_ptr_ptr { return new blkcnt_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'blkcnt_t****'; }
}
class fsblkcnt_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsblkcnt_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsblkcnt_t_ptr_ptr { return new fsblkcnt_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'fsblkcnt_t*'; }
}
class fsblkcnt_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsblkcnt_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsblkcnt_t_ptr_ptr_ptr { return new fsblkcnt_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsblkcnt_t_ptr { return new fsblkcnt_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsblkcnt_t**'; }
}
class fsblkcnt_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsblkcnt_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsblkcnt_t_ptr_ptr_ptr_ptr { return new fsblkcnt_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsblkcnt_t_ptr_ptr { return new fsblkcnt_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsblkcnt_t***'; }
}
class fsblkcnt_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsblkcnt_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsblkcnt_t_ptr_ptr_ptr_ptr_ptr { return new fsblkcnt_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsblkcnt_t_ptr_ptr_ptr { return new fsblkcnt_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsblkcnt_t****'; }
}
class fsfilcnt_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsfilcnt_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsfilcnt_t_ptr_ptr { return new fsfilcnt_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'fsfilcnt_t*'; }
}
class fsfilcnt_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsfilcnt_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsfilcnt_t_ptr_ptr_ptr { return new fsfilcnt_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsfilcnt_t_ptr { return new fsfilcnt_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsfilcnt_t**'; }
}
class fsfilcnt_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsfilcnt_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsfilcnt_t_ptr_ptr_ptr_ptr { return new fsfilcnt_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsfilcnt_t_ptr_ptr { return new fsfilcnt_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsfilcnt_t***'; }
}
class fsfilcnt_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(fsfilcnt_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): fsfilcnt_t_ptr_ptr_ptr_ptr_ptr { return new fsfilcnt_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): fsfilcnt_t_ptr_ptr_ptr { return new fsfilcnt_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'fsfilcnt_t****'; }
}
class pthread_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_t_ptr_ptr { return new pthread_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'pthread_t*'; }
}
class pthread_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_t_ptr_ptr_ptr { return new pthread_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_t_ptr { return new pthread_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_t**'; }
}
class pthread_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_t_ptr_ptr_ptr_ptr { return new pthread_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_t_ptr_ptr { return new pthread_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_t***'; }
}
class pthread_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_t_ptr_ptr_ptr_ptr_ptr { return new pthread_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_t_ptr_ptr_ptr { return new pthread_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_t****'; }
}
class pthread_attr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_attr_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_attr_t_ptr { return new pthread_attr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_attr_t'; }
}
class pthread_attr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_attr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_attr_t_ptr_ptr { return new pthread_attr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_attr_t { return new pthread_attr_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_attr_t*'; }
}
class pthread_attr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_attr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_attr_t_ptr_ptr_ptr { return new pthread_attr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_attr_t_ptr { return new pthread_attr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_attr_t**'; }
}
class pthread_attr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_attr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_attr_t_ptr_ptr_ptr_ptr { return new pthread_attr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_attr_t_ptr_ptr { return new pthread_attr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_attr_t***'; }
}
class pthread_attr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_attr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_attr_t_ptr_ptr_ptr_ptr_ptr { return new pthread_attr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_attr_t_ptr_ptr_ptr { return new pthread_attr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_attr_t****'; }
}
class __pthread_list_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pthread_list_t $other): bool { return $this->data == $other->data; }
    public function addr(): __pthread_list_t_ptr { return new __pthread_list_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return '__pthread_list_t'; }
}
class __pthread_list_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pthread_list_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pthread_list_t_ptr_ptr { return new __pthread_list_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pthread_list_t { return new __pthread_list_t($this->data[$n]); }
    public static function getType(): string { return '__pthread_list_t*'; }
}
class __pthread_list_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pthread_list_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pthread_list_t_ptr_ptr_ptr { return new __pthread_list_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pthread_list_t_ptr { return new __pthread_list_t_ptr($this->data[$n]); }
    public static function getType(): string { return '__pthread_list_t**'; }
}
class __pthread_list_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pthread_list_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pthread_list_t_ptr_ptr_ptr_ptr { return new __pthread_list_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pthread_list_t_ptr_ptr { return new __pthread_list_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__pthread_list_t***'; }
}
class __pthread_list_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(__pthread_list_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): __pthread_list_t_ptr_ptr_ptr_ptr_ptr { return new __pthread_list_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): __pthread_list_t_ptr_ptr_ptr { return new __pthread_list_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return '__pthread_list_t****'; }
}
class pthread_mutex_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutex_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutex_t_ptr { return new pthread_mutex_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_mutex_t'; }
}
class pthread_mutex_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutex_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutex_t_ptr_ptr { return new pthread_mutex_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutex_t { return new pthread_mutex_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutex_t*'; }
}
class pthread_mutex_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutex_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutex_t_ptr_ptr_ptr { return new pthread_mutex_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutex_t_ptr { return new pthread_mutex_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutex_t**'; }
}
class pthread_mutex_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutex_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutex_t_ptr_ptr_ptr_ptr { return new pthread_mutex_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutex_t_ptr_ptr { return new pthread_mutex_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutex_t***'; }
}
class pthread_mutex_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutex_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutex_t_ptr_ptr_ptr_ptr_ptr { return new pthread_mutex_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutex_t_ptr_ptr_ptr { return new pthread_mutex_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutex_t****'; }
}
class pthread_mutexattr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutexattr_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutexattr_t_ptr { return new pthread_mutexattr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_mutexattr_t'; }
}
class pthread_mutexattr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutexattr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutexattr_t_ptr_ptr { return new pthread_mutexattr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutexattr_t { return new pthread_mutexattr_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutexattr_t*'; }
}
class pthread_mutexattr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutexattr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutexattr_t_ptr_ptr_ptr { return new pthread_mutexattr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutexattr_t_ptr { return new pthread_mutexattr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutexattr_t**'; }
}
class pthread_mutexattr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutexattr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutexattr_t_ptr_ptr_ptr_ptr { return new pthread_mutexattr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutexattr_t_ptr_ptr { return new pthread_mutexattr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutexattr_t***'; }
}
class pthread_mutexattr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_mutexattr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_mutexattr_t_ptr_ptr_ptr_ptr_ptr { return new pthread_mutexattr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_mutexattr_t_ptr_ptr_ptr { return new pthread_mutexattr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_mutexattr_t****'; }
}
class pthread_cond_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_cond_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_cond_t_ptr { return new pthread_cond_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_cond_t'; }
}
class pthread_cond_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_cond_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_cond_t_ptr_ptr { return new pthread_cond_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_cond_t { return new pthread_cond_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_cond_t*'; }
}
class pthread_cond_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_cond_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_cond_t_ptr_ptr_ptr { return new pthread_cond_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_cond_t_ptr { return new pthread_cond_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_cond_t**'; }
}
class pthread_cond_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_cond_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_cond_t_ptr_ptr_ptr_ptr { return new pthread_cond_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_cond_t_ptr_ptr { return new pthread_cond_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_cond_t***'; }
}
class pthread_cond_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_cond_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_cond_t_ptr_ptr_ptr_ptr_ptr { return new pthread_cond_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_cond_t_ptr_ptr_ptr { return new pthread_cond_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_cond_t****'; }
}
class pthread_condattr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_condattr_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_condattr_t_ptr { return new pthread_condattr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_condattr_t'; }
}
class pthread_condattr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_condattr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_condattr_t_ptr_ptr { return new pthread_condattr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_condattr_t { return new pthread_condattr_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_condattr_t*'; }
}
class pthread_condattr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_condattr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_condattr_t_ptr_ptr_ptr { return new pthread_condattr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_condattr_t_ptr { return new pthread_condattr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_condattr_t**'; }
}
class pthread_condattr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_condattr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_condattr_t_ptr_ptr_ptr_ptr { return new pthread_condattr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_condattr_t_ptr_ptr { return new pthread_condattr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_condattr_t***'; }
}
class pthread_condattr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_condattr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_condattr_t_ptr_ptr_ptr_ptr_ptr { return new pthread_condattr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_condattr_t_ptr_ptr_ptr { return new pthread_condattr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_condattr_t****'; }
}
class pthread_key_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_key_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_key_t_ptr_ptr { return new pthread_key_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'pthread_key_t*'; }
}
class pthread_key_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_key_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_key_t_ptr_ptr_ptr { return new pthread_key_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_key_t_ptr { return new pthread_key_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_key_t**'; }
}
class pthread_key_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_key_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_key_t_ptr_ptr_ptr_ptr { return new pthread_key_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_key_t_ptr_ptr { return new pthread_key_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_key_t***'; }
}
class pthread_key_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_key_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_key_t_ptr_ptr_ptr_ptr_ptr { return new pthread_key_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_key_t_ptr_ptr_ptr { return new pthread_key_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_key_t****'; }
}
class pthread_once_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_once_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_once_t_ptr_ptr { return new pthread_once_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'pthread_once_t*'; }
}
class pthread_once_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_once_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_once_t_ptr_ptr_ptr { return new pthread_once_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_once_t_ptr { return new pthread_once_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_once_t**'; }
}
class pthread_once_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_once_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_once_t_ptr_ptr_ptr_ptr { return new pthread_once_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_once_t_ptr_ptr { return new pthread_once_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_once_t***'; }
}
class pthread_once_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_once_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_once_t_ptr_ptr_ptr_ptr_ptr { return new pthread_once_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_once_t_ptr_ptr_ptr { return new pthread_once_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_once_t****'; }
}
class pthread_rwlock_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlock_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlock_t_ptr { return new pthread_rwlock_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_rwlock_t'; }
}
class pthread_rwlock_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlock_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlock_t_ptr_ptr { return new pthread_rwlock_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlock_t { return new pthread_rwlock_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlock_t*'; }
}
class pthread_rwlock_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlock_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlock_t_ptr_ptr_ptr { return new pthread_rwlock_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlock_t_ptr { return new pthread_rwlock_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlock_t**'; }
}
class pthread_rwlock_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlock_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlock_t_ptr_ptr_ptr_ptr { return new pthread_rwlock_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlock_t_ptr_ptr { return new pthread_rwlock_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlock_t***'; }
}
class pthread_rwlock_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlock_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlock_t_ptr_ptr_ptr_ptr_ptr { return new pthread_rwlock_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlock_t_ptr_ptr_ptr { return new pthread_rwlock_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlock_t****'; }
}
class pthread_rwlockattr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlockattr_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlockattr_t_ptr { return new pthread_rwlockattr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_rwlockattr_t'; }
}
class pthread_rwlockattr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlockattr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlockattr_t_ptr_ptr { return new pthread_rwlockattr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlockattr_t { return new pthread_rwlockattr_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlockattr_t*'; }
}
class pthread_rwlockattr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlockattr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlockattr_t_ptr_ptr_ptr { return new pthread_rwlockattr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlockattr_t_ptr { return new pthread_rwlockattr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlockattr_t**'; }
}
class pthread_rwlockattr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlockattr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlockattr_t_ptr_ptr_ptr_ptr { return new pthread_rwlockattr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlockattr_t_ptr_ptr { return new pthread_rwlockattr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlockattr_t***'; }
}
class pthread_rwlockattr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_rwlockattr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_rwlockattr_t_ptr_ptr_ptr_ptr_ptr { return new pthread_rwlockattr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_rwlockattr_t_ptr_ptr_ptr { return new pthread_rwlockattr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_rwlockattr_t****'; }
}
class pthread_spinlock_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_spinlock_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_spinlock_t_ptr_ptr { return new pthread_spinlock_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'pthread_spinlock_t*'; }
}
class pthread_spinlock_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_spinlock_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_spinlock_t_ptr_ptr_ptr { return new pthread_spinlock_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_spinlock_t_ptr { return new pthread_spinlock_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_spinlock_t**'; }
}
class pthread_spinlock_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_spinlock_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_spinlock_t_ptr_ptr_ptr_ptr { return new pthread_spinlock_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_spinlock_t_ptr_ptr { return new pthread_spinlock_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_spinlock_t***'; }
}
class pthread_spinlock_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_spinlock_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_spinlock_t_ptr_ptr_ptr_ptr_ptr { return new pthread_spinlock_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_spinlock_t_ptr_ptr_ptr { return new pthread_spinlock_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_spinlock_t****'; }
}
class pthread_barrier_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrier_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrier_t_ptr { return new pthread_barrier_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_barrier_t'; }
}
class pthread_barrier_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrier_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrier_t_ptr_ptr { return new pthread_barrier_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrier_t { return new pthread_barrier_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrier_t*'; }
}
class pthread_barrier_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrier_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrier_t_ptr_ptr_ptr { return new pthread_barrier_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrier_t_ptr { return new pthread_barrier_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrier_t**'; }
}
class pthread_barrier_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrier_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrier_t_ptr_ptr_ptr_ptr { return new pthread_barrier_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrier_t_ptr_ptr { return new pthread_barrier_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrier_t***'; }
}
class pthread_barrier_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrier_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrier_t_ptr_ptr_ptr_ptr_ptr { return new pthread_barrier_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrier_t_ptr_ptr_ptr { return new pthread_barrier_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrier_t****'; }
}
class pthread_barrierattr_t implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrierattr_t $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrierattr_t_ptr { return new pthread_barrierattr_t_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'pthread_barrierattr_t'; }
}
class pthread_barrierattr_t_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrierattr_t_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrierattr_t_ptr_ptr { return new pthread_barrierattr_t_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrierattr_t { return new pthread_barrierattr_t($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrierattr_t*'; }
}
class pthread_barrierattr_t_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrierattr_t_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrierattr_t_ptr_ptr_ptr { return new pthread_barrierattr_t_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrierattr_t_ptr { return new pthread_barrierattr_t_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrierattr_t**'; }
}
class pthread_barrierattr_t_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrierattr_t_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrierattr_t_ptr_ptr_ptr_ptr { return new pthread_barrierattr_t_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrierattr_t_ptr_ptr { return new pthread_barrierattr_t_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrierattr_t***'; }
}
class pthread_barrierattr_t_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(pthread_barrierattr_t_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): pthread_barrierattr_t_ptr_ptr_ptr_ptr_ptr { return new pthread_barrierattr_t_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): pthread_barrierattr_t_ptr_ptr_ptr { return new pthread_barrierattr_t_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'pthread_barrierattr_t****'; }
}
class LLVMBool_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBool_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBool_ptr_ptr { return new LLVMBool_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'LLVMBool*'; }
}
class LLVMBool_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBool_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBool_ptr_ptr_ptr { return new LLVMBool_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBool_ptr { return new LLVMBool_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBool**'; }
}
class LLVMBool_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBool_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBool_ptr_ptr_ptr_ptr { return new LLVMBool_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBool_ptr_ptr { return new LLVMBool_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBool***'; }
}
class LLVMBool_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBool_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBool_ptr_ptr_ptr_ptr_ptr { return new LLVMBool_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBool_ptr_ptr_ptr { return new LLVMBool_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBool****'; }
}
class LLVMMemoryBufferRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryBufferRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryBufferRef_ptr { return new LLVMMemoryBufferRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMMemoryBufferRef'; }
}
class LLVMMemoryBufferRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryBufferRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryBufferRef_ptr_ptr { return new LLVMMemoryBufferRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryBufferRef { return new LLVMMemoryBufferRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryBufferRef*'; }
}
class LLVMMemoryBufferRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryBufferRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryBufferRef_ptr_ptr_ptr { return new LLVMMemoryBufferRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryBufferRef_ptr { return new LLVMMemoryBufferRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryBufferRef**'; }
}
class LLVMMemoryBufferRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryBufferRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryBufferRef_ptr_ptr_ptr_ptr { return new LLVMMemoryBufferRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryBufferRef_ptr_ptr { return new LLVMMemoryBufferRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryBufferRef***'; }
}
class LLVMMemoryBufferRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryBufferRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryBufferRef_ptr_ptr_ptr_ptr_ptr { return new LLVMMemoryBufferRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryBufferRef_ptr_ptr_ptr { return new LLVMMemoryBufferRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryBufferRef****'; }
}
class LLVMContextRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMContextRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMContextRef_ptr { return new LLVMContextRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMContextRef'; }
}
class LLVMContextRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMContextRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMContextRef_ptr_ptr { return new LLVMContextRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMContextRef { return new LLVMContextRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMContextRef*'; }
}
class LLVMContextRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMContextRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMContextRef_ptr_ptr_ptr { return new LLVMContextRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMContextRef_ptr { return new LLVMContextRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMContextRef**'; }
}
class LLVMContextRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMContextRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMContextRef_ptr_ptr_ptr_ptr { return new LLVMContextRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMContextRef_ptr_ptr { return new LLVMContextRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMContextRef***'; }
}
class LLVMContextRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMContextRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMContextRef_ptr_ptr_ptr_ptr_ptr { return new LLVMContextRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMContextRef_ptr_ptr_ptr { return new LLVMContextRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMContextRef****'; }
}
class LLVMModuleRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleRef_ptr { return new LLVMModuleRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMModuleRef'; }
}
class LLVMModuleRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleRef_ptr_ptr { return new LLVMModuleRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleRef { return new LLVMModuleRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleRef*'; }
}
class LLVMModuleRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleRef_ptr_ptr_ptr { return new LLVMModuleRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleRef_ptr { return new LLVMModuleRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleRef**'; }
}
class LLVMModuleRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleRef_ptr_ptr_ptr_ptr { return new LLVMModuleRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleRef_ptr_ptr { return new LLVMModuleRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleRef***'; }
}
class LLVMModuleRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleRef_ptr_ptr_ptr_ptr_ptr { return new LLVMModuleRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleRef_ptr_ptr_ptr { return new LLVMModuleRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleRef****'; }
}
class LLVMTypeRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTypeRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTypeRef_ptr { return new LLVMTypeRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMTypeRef'; }
}
class LLVMTypeRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTypeRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTypeRef_ptr_ptr { return new LLVMTypeRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTypeRef { return new LLVMTypeRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMTypeRef*'; }
}
class LLVMTypeRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTypeRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTypeRef_ptr_ptr_ptr { return new LLVMTypeRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTypeRef_ptr { return new LLVMTypeRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTypeRef**'; }
}
class LLVMTypeRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTypeRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTypeRef_ptr_ptr_ptr_ptr { return new LLVMTypeRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTypeRef_ptr_ptr { return new LLVMTypeRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTypeRef***'; }
}
class LLVMTypeRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTypeRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTypeRef_ptr_ptr_ptr_ptr_ptr { return new LLVMTypeRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTypeRef_ptr_ptr_ptr { return new LLVMTypeRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTypeRef****'; }
}
class LLVMValueRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMValueRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMValueRef_ptr { return new LLVMValueRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMValueRef'; }
}
class LLVMValueRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMValueRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMValueRef_ptr_ptr { return new LLVMValueRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMValueRef { return new LLVMValueRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMValueRef*'; }
}
class LLVMValueRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMValueRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMValueRef_ptr_ptr_ptr { return new LLVMValueRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMValueRef_ptr { return new LLVMValueRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMValueRef**'; }
}
class LLVMValueRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMValueRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMValueRef_ptr_ptr_ptr_ptr { return new LLVMValueRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMValueRef_ptr_ptr { return new LLVMValueRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMValueRef***'; }
}
class LLVMValueRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMValueRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMValueRef_ptr_ptr_ptr_ptr_ptr { return new LLVMValueRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMValueRef_ptr_ptr_ptr { return new LLVMValueRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMValueRef****'; }
}
class LLVMBasicBlockRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBasicBlockRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBasicBlockRef_ptr { return new LLVMBasicBlockRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMBasicBlockRef'; }
}
class LLVMBasicBlockRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBasicBlockRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBasicBlockRef_ptr_ptr { return new LLVMBasicBlockRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBasicBlockRef { return new LLVMBasicBlockRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMBasicBlockRef*'; }
}
class LLVMBasicBlockRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBasicBlockRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBasicBlockRef_ptr_ptr_ptr { return new LLVMBasicBlockRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBasicBlockRef_ptr { return new LLVMBasicBlockRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBasicBlockRef**'; }
}
class LLVMBasicBlockRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBasicBlockRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBasicBlockRef_ptr_ptr_ptr_ptr { return new LLVMBasicBlockRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBasicBlockRef_ptr_ptr { return new LLVMBasicBlockRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBasicBlockRef***'; }
}
class LLVMBasicBlockRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBasicBlockRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBasicBlockRef_ptr_ptr_ptr_ptr_ptr { return new LLVMBasicBlockRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBasicBlockRef_ptr_ptr_ptr { return new LLVMBasicBlockRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBasicBlockRef****'; }
}
class LLVMBuilderRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBuilderRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBuilderRef_ptr { return new LLVMBuilderRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMBuilderRef'; }
}
class LLVMBuilderRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBuilderRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBuilderRef_ptr_ptr { return new LLVMBuilderRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBuilderRef { return new LLVMBuilderRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMBuilderRef*'; }
}
class LLVMBuilderRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBuilderRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBuilderRef_ptr_ptr_ptr { return new LLVMBuilderRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBuilderRef_ptr { return new LLVMBuilderRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBuilderRef**'; }
}
class LLVMBuilderRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBuilderRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBuilderRef_ptr_ptr_ptr_ptr { return new LLVMBuilderRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBuilderRef_ptr_ptr { return new LLVMBuilderRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBuilderRef***'; }
}
class LLVMBuilderRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMBuilderRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMBuilderRef_ptr_ptr_ptr_ptr_ptr { return new LLVMBuilderRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMBuilderRef_ptr_ptr_ptr { return new LLVMBuilderRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMBuilderRef****'; }
}
class LLVMModuleProviderRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleProviderRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleProviderRef_ptr { return new LLVMModuleProviderRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMModuleProviderRef'; }
}
class LLVMModuleProviderRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleProviderRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleProviderRef_ptr_ptr { return new LLVMModuleProviderRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleProviderRef { return new LLVMModuleProviderRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleProviderRef*'; }
}
class LLVMModuleProviderRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleProviderRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleProviderRef_ptr_ptr_ptr { return new LLVMModuleProviderRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleProviderRef_ptr { return new LLVMModuleProviderRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleProviderRef**'; }
}
class LLVMModuleProviderRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleProviderRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleProviderRef_ptr_ptr_ptr_ptr { return new LLVMModuleProviderRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleProviderRef_ptr_ptr { return new LLVMModuleProviderRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleProviderRef***'; }
}
class LLVMModuleProviderRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMModuleProviderRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMModuleProviderRef_ptr_ptr_ptr_ptr_ptr { return new LLVMModuleProviderRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMModuleProviderRef_ptr_ptr_ptr { return new LLVMModuleProviderRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMModuleProviderRef****'; }
}
class LLVMPassManagerRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerRef_ptr { return new LLVMPassManagerRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMPassManagerRef'; }
}
class LLVMPassManagerRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerRef_ptr_ptr { return new LLVMPassManagerRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerRef { return new LLVMPassManagerRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerRef*'; }
}
class LLVMPassManagerRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerRef_ptr_ptr_ptr { return new LLVMPassManagerRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerRef_ptr { return new LLVMPassManagerRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerRef**'; }
}
class LLVMPassManagerRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerRef_ptr_ptr_ptr_ptr { return new LLVMPassManagerRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerRef_ptr_ptr { return new LLVMPassManagerRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerRef***'; }
}
class LLVMPassManagerRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerRef_ptr_ptr_ptr_ptr_ptr { return new LLVMPassManagerRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerRef_ptr_ptr_ptr { return new LLVMPassManagerRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerRef****'; }
}
class LLVMPassRegistryRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassRegistryRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassRegistryRef_ptr { return new LLVMPassRegistryRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMPassRegistryRef'; }
}
class LLVMPassRegistryRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassRegistryRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassRegistryRef_ptr_ptr { return new LLVMPassRegistryRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassRegistryRef { return new LLVMPassRegistryRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassRegistryRef*'; }
}
class LLVMPassRegistryRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassRegistryRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassRegistryRef_ptr_ptr_ptr { return new LLVMPassRegistryRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassRegistryRef_ptr { return new LLVMPassRegistryRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassRegistryRef**'; }
}
class LLVMPassRegistryRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassRegistryRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassRegistryRef_ptr_ptr_ptr_ptr { return new LLVMPassRegistryRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassRegistryRef_ptr_ptr { return new LLVMPassRegistryRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassRegistryRef***'; }
}
class LLVMPassRegistryRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassRegistryRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassRegistryRef_ptr_ptr_ptr_ptr_ptr { return new LLVMPassRegistryRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassRegistryRef_ptr_ptr_ptr { return new LLVMPassRegistryRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassRegistryRef****'; }
}
class LLVMUseRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMUseRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMUseRef_ptr { return new LLVMUseRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMUseRef'; }
}
class LLVMUseRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMUseRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMUseRef_ptr_ptr { return new LLVMUseRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMUseRef { return new LLVMUseRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMUseRef*'; }
}
class LLVMUseRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMUseRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMUseRef_ptr_ptr_ptr { return new LLVMUseRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMUseRef_ptr { return new LLVMUseRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMUseRef**'; }
}
class LLVMUseRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMUseRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMUseRef_ptr_ptr_ptr_ptr { return new LLVMUseRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMUseRef_ptr_ptr { return new LLVMUseRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMUseRef***'; }
}
class LLVMUseRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMUseRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMUseRef_ptr_ptr_ptr_ptr_ptr { return new LLVMUseRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMUseRef_ptr_ptr_ptr { return new LLVMUseRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMUseRef****'; }
}
class LLVMAttributeRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeRef_ptr { return new LLVMAttributeRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMAttributeRef'; }
}
class LLVMAttributeRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeRef_ptr_ptr { return new LLVMAttributeRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeRef { return new LLVMAttributeRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeRef*'; }
}
class LLVMAttributeRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeRef_ptr_ptr_ptr { return new LLVMAttributeRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeRef_ptr { return new LLVMAttributeRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeRef**'; }
}
class LLVMAttributeRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeRef_ptr_ptr_ptr_ptr { return new LLVMAttributeRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeRef_ptr_ptr { return new LLVMAttributeRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeRef***'; }
}
class LLVMAttributeRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeRef_ptr_ptr_ptr_ptr_ptr { return new LLVMAttributeRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeRef_ptr_ptr_ptr { return new LLVMAttributeRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeRef****'; }
}
class LLVMDiagnosticInfoRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticInfoRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticInfoRef_ptr { return new LLVMDiagnosticInfoRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMDiagnosticInfoRef'; }
}
class LLVMDiagnosticInfoRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticInfoRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticInfoRef_ptr_ptr { return new LLVMDiagnosticInfoRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticInfoRef { return new LLVMDiagnosticInfoRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticInfoRef*'; }
}
class LLVMDiagnosticInfoRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticInfoRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticInfoRef_ptr_ptr_ptr { return new LLVMDiagnosticInfoRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticInfoRef_ptr { return new LLVMDiagnosticInfoRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticInfoRef**'; }
}
class LLVMDiagnosticInfoRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticInfoRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticInfoRef_ptr_ptr_ptr_ptr { return new LLVMDiagnosticInfoRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticInfoRef_ptr_ptr { return new LLVMDiagnosticInfoRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticInfoRef***'; }
}
class LLVMDiagnosticInfoRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticInfoRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticInfoRef_ptr_ptr_ptr_ptr_ptr { return new LLVMDiagnosticInfoRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticInfoRef_ptr_ptr_ptr { return new LLVMDiagnosticInfoRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticInfoRef****'; }
}
class LLVMAttributeIndex_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeIndex_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeIndex_ptr_ptr { return new LLVMAttributeIndex_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): int { return $this->data[$n] + 0; }
    public static function getType(): string { return 'LLVMAttributeIndex*'; }
}
class LLVMAttributeIndex_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeIndex_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeIndex_ptr_ptr_ptr { return new LLVMAttributeIndex_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeIndex_ptr { return new LLVMAttributeIndex_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeIndex**'; }
}
class LLVMAttributeIndex_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeIndex_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeIndex_ptr_ptr_ptr_ptr { return new LLVMAttributeIndex_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeIndex_ptr_ptr { return new LLVMAttributeIndex_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeIndex***'; }
}
class LLVMAttributeIndex_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMAttributeIndex_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMAttributeIndex_ptr_ptr_ptr_ptr_ptr { return new LLVMAttributeIndex_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMAttributeIndex_ptr_ptr_ptr { return new LLVMAttributeIndex_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMAttributeIndex****'; }
}
class LLVMDiagnosticHandler implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticHandler $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticHandler_ptr { return new LLVMDiagnosticHandler_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMDiagnosticHandler'; }
}
class LLVMDiagnosticHandler_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticHandler_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticHandler_ptr_ptr { return new LLVMDiagnosticHandler_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticHandler { return new LLVMDiagnosticHandler($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticHandler*'; }
}
class LLVMDiagnosticHandler_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticHandler_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticHandler_ptr_ptr_ptr { return new LLVMDiagnosticHandler_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticHandler_ptr { return new LLVMDiagnosticHandler_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticHandler**'; }
}
class LLVMDiagnosticHandler_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticHandler_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticHandler_ptr_ptr_ptr_ptr { return new LLVMDiagnosticHandler_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticHandler_ptr_ptr { return new LLVMDiagnosticHandler_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticHandler***'; }
}
class LLVMDiagnosticHandler_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDiagnosticHandler_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDiagnosticHandler_ptr_ptr_ptr_ptr_ptr { return new LLVMDiagnosticHandler_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDiagnosticHandler_ptr_ptr_ptr { return new LLVMDiagnosticHandler_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDiagnosticHandler****'; }
}
class LLVMYieldCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMYieldCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMYieldCallback_ptr { return new LLVMYieldCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMYieldCallback'; }
}
class LLVMYieldCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMYieldCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMYieldCallback_ptr_ptr { return new LLVMYieldCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMYieldCallback { return new LLVMYieldCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMYieldCallback*'; }
}
class LLVMYieldCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMYieldCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMYieldCallback_ptr_ptr_ptr { return new LLVMYieldCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMYieldCallback_ptr { return new LLVMYieldCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMYieldCallback**'; }
}
class LLVMYieldCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMYieldCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMYieldCallback_ptr_ptr_ptr_ptr { return new LLVMYieldCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMYieldCallback_ptr_ptr { return new LLVMYieldCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMYieldCallback***'; }
}
class LLVMYieldCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMYieldCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMYieldCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMYieldCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMYieldCallback_ptr_ptr_ptr { return new LLVMYieldCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMYieldCallback****'; }
}
class LLVMTargetDataRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetDataRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetDataRef_ptr { return new LLVMTargetDataRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMTargetDataRef'; }
}
class LLVMTargetDataRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetDataRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetDataRef_ptr_ptr { return new LLVMTargetDataRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetDataRef { return new LLVMTargetDataRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetDataRef*'; }
}
class LLVMTargetDataRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetDataRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetDataRef_ptr_ptr_ptr { return new LLVMTargetDataRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetDataRef_ptr { return new LLVMTargetDataRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetDataRef**'; }
}
class LLVMTargetDataRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetDataRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetDataRef_ptr_ptr_ptr_ptr { return new LLVMTargetDataRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetDataRef_ptr_ptr { return new LLVMTargetDataRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetDataRef***'; }
}
class LLVMTargetDataRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetDataRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetDataRef_ptr_ptr_ptr_ptr_ptr { return new LLVMTargetDataRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetDataRef_ptr_ptr_ptr { return new LLVMTargetDataRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetDataRef****'; }
}
class LLVMTargetLibraryInfoRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetLibraryInfoRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetLibraryInfoRef_ptr { return new LLVMTargetLibraryInfoRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMTargetLibraryInfoRef'; }
}
class LLVMTargetLibraryInfoRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetLibraryInfoRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetLibraryInfoRef_ptr_ptr { return new LLVMTargetLibraryInfoRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetLibraryInfoRef { return new LLVMTargetLibraryInfoRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetLibraryInfoRef*'; }
}
class LLVMTargetLibraryInfoRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetLibraryInfoRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetLibraryInfoRef_ptr_ptr_ptr { return new LLVMTargetLibraryInfoRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetLibraryInfoRef_ptr { return new LLVMTargetLibraryInfoRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetLibraryInfoRef**'; }
}
class LLVMTargetLibraryInfoRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetLibraryInfoRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetLibraryInfoRef_ptr_ptr_ptr_ptr { return new LLVMTargetLibraryInfoRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetLibraryInfoRef_ptr_ptr { return new LLVMTargetLibraryInfoRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetLibraryInfoRef***'; }
}
class LLVMTargetLibraryInfoRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetLibraryInfoRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetLibraryInfoRef_ptr_ptr_ptr_ptr_ptr { return new LLVMTargetLibraryInfoRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetLibraryInfoRef_ptr_ptr_ptr { return new LLVMTargetLibraryInfoRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetLibraryInfoRef****'; }
}
class LLVMTargetMachineRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetMachineRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetMachineRef_ptr { return new LLVMTargetMachineRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMTargetMachineRef'; }
}
class LLVMTargetMachineRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetMachineRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetMachineRef_ptr_ptr { return new LLVMTargetMachineRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetMachineRef { return new LLVMTargetMachineRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetMachineRef*'; }
}
class LLVMTargetMachineRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetMachineRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetMachineRef_ptr_ptr_ptr { return new LLVMTargetMachineRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetMachineRef_ptr { return new LLVMTargetMachineRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetMachineRef**'; }
}
class LLVMTargetMachineRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetMachineRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetMachineRef_ptr_ptr_ptr_ptr { return new LLVMTargetMachineRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetMachineRef_ptr_ptr { return new LLVMTargetMachineRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetMachineRef***'; }
}
class LLVMTargetMachineRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetMachineRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetMachineRef_ptr_ptr_ptr_ptr_ptr { return new LLVMTargetMachineRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetMachineRef_ptr_ptr_ptr { return new LLVMTargetMachineRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetMachineRef****'; }
}
class LLVMTargetRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetRef_ptr { return new LLVMTargetRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMTargetRef'; }
}
class LLVMTargetRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetRef_ptr_ptr { return new LLVMTargetRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetRef { return new LLVMTargetRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetRef*'; }
}
class LLVMTargetRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetRef_ptr_ptr_ptr { return new LLVMTargetRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetRef_ptr { return new LLVMTargetRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetRef**'; }
}
class LLVMTargetRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetRef_ptr_ptr_ptr_ptr { return new LLVMTargetRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetRef_ptr_ptr { return new LLVMTargetRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetRef***'; }
}
class LLVMTargetRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMTargetRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMTargetRef_ptr_ptr_ptr_ptr_ptr { return new LLVMTargetRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMTargetRef_ptr_ptr_ptr { return new LLVMTargetRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMTargetRef****'; }
}
class LLVMGenericValueRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMGenericValueRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMGenericValueRef_ptr { return new LLVMGenericValueRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMGenericValueRef'; }
}
class LLVMGenericValueRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMGenericValueRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMGenericValueRef_ptr_ptr { return new LLVMGenericValueRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMGenericValueRef { return new LLVMGenericValueRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMGenericValueRef*'; }
}
class LLVMGenericValueRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMGenericValueRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMGenericValueRef_ptr_ptr_ptr { return new LLVMGenericValueRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMGenericValueRef_ptr { return new LLVMGenericValueRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMGenericValueRef**'; }
}
class LLVMGenericValueRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMGenericValueRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMGenericValueRef_ptr_ptr_ptr_ptr { return new LLVMGenericValueRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMGenericValueRef_ptr_ptr { return new LLVMGenericValueRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMGenericValueRef***'; }
}
class LLVMGenericValueRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMGenericValueRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMGenericValueRef_ptr_ptr_ptr_ptr_ptr { return new LLVMGenericValueRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMGenericValueRef_ptr_ptr_ptr { return new LLVMGenericValueRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMGenericValueRef****'; }
}
class LLVMExecutionEngineRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMExecutionEngineRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMExecutionEngineRef_ptr { return new LLVMExecutionEngineRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMExecutionEngineRef'; }
}
class LLVMExecutionEngineRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMExecutionEngineRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMExecutionEngineRef_ptr_ptr { return new LLVMExecutionEngineRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMExecutionEngineRef { return new LLVMExecutionEngineRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMExecutionEngineRef*'; }
}
class LLVMExecutionEngineRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMExecutionEngineRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMExecutionEngineRef_ptr_ptr_ptr { return new LLVMExecutionEngineRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMExecutionEngineRef_ptr { return new LLVMExecutionEngineRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMExecutionEngineRef**'; }
}
class LLVMExecutionEngineRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMExecutionEngineRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMExecutionEngineRef_ptr_ptr_ptr_ptr { return new LLVMExecutionEngineRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMExecutionEngineRef_ptr_ptr { return new LLVMExecutionEngineRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMExecutionEngineRef***'; }
}
class LLVMExecutionEngineRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMExecutionEngineRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMExecutionEngineRef_ptr_ptr_ptr_ptr_ptr { return new LLVMExecutionEngineRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMExecutionEngineRef_ptr_ptr_ptr { return new LLVMExecutionEngineRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMExecutionEngineRef****'; }
}
class LLVMMCJITMemoryManagerRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMCJITMemoryManagerRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMCJITMemoryManagerRef_ptr { return new LLVMMCJITMemoryManagerRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMMCJITMemoryManagerRef'; }
}
class LLVMMCJITMemoryManagerRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMCJITMemoryManagerRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMCJITMemoryManagerRef_ptr_ptr { return new LLVMMCJITMemoryManagerRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMCJITMemoryManagerRef { return new LLVMMCJITMemoryManagerRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMMCJITMemoryManagerRef*'; }
}
class LLVMMCJITMemoryManagerRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMCJITMemoryManagerRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMCJITMemoryManagerRef_ptr_ptr_ptr { return new LLVMMCJITMemoryManagerRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMCJITMemoryManagerRef_ptr { return new LLVMMCJITMemoryManagerRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMCJITMemoryManagerRef**'; }
}
class LLVMMCJITMemoryManagerRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMCJITMemoryManagerRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMCJITMemoryManagerRef_ptr_ptr_ptr_ptr { return new LLVMMCJITMemoryManagerRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMCJITMemoryManagerRef_ptr_ptr { return new LLVMMCJITMemoryManagerRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMCJITMemoryManagerRef***'; }
}
class LLVMMCJITMemoryManagerRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMCJITMemoryManagerRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMCJITMemoryManagerRef_ptr_ptr_ptr_ptr_ptr { return new LLVMMCJITMemoryManagerRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMCJITMemoryManagerRef_ptr_ptr_ptr { return new LLVMMCJITMemoryManagerRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMCJITMemoryManagerRef****'; }
}
class LLVMMemoryManagerAllocateCodeSectionCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateCodeSectionCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateCodeSectionCallback_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateCodeSectionCallback'; }
}
class LLVMMemoryManagerAllocateCodeSectionCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateCodeSectionCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateCodeSectionCallback { return new LLVMMemoryManagerAllocateCodeSectionCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateCodeSectionCallback*'; }
}
class LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateCodeSectionCallback_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateCodeSectionCallback**'; }
}
class LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateCodeSectionCallback***'; }
}
class LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateCodeSectionCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateCodeSectionCallback****'; }
}
class LLVMMemoryManagerAllocateDataSectionCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateDataSectionCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateDataSectionCallback_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateDataSectionCallback'; }
}
class LLVMMemoryManagerAllocateDataSectionCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateDataSectionCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateDataSectionCallback { return new LLVMMemoryManagerAllocateDataSectionCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateDataSectionCallback*'; }
}
class LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateDataSectionCallback_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateDataSectionCallback**'; }
}
class LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateDataSectionCallback***'; }
}
class LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr { return new LLVMMemoryManagerAllocateDataSectionCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerAllocateDataSectionCallback****'; }
}
class LLVMMemoryManagerFinalizeMemoryCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerFinalizeMemoryCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerFinalizeMemoryCallback_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMMemoryManagerFinalizeMemoryCallback'; }
}
class LLVMMemoryManagerFinalizeMemoryCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerFinalizeMemoryCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerFinalizeMemoryCallback { return new LLVMMemoryManagerFinalizeMemoryCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerFinalizeMemoryCallback*'; }
}
class LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerFinalizeMemoryCallback_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerFinalizeMemoryCallback**'; }
}
class LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerFinalizeMemoryCallback***'; }
}
class LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr { return new LLVMMemoryManagerFinalizeMemoryCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerFinalizeMemoryCallback****'; }
}
class LLVMMemoryManagerDestroyCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerDestroyCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerDestroyCallback_ptr { return new LLVMMemoryManagerDestroyCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMMemoryManagerDestroyCallback'; }
}
class LLVMMemoryManagerDestroyCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerDestroyCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerDestroyCallback_ptr_ptr { return new LLVMMemoryManagerDestroyCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerDestroyCallback { return new LLVMMemoryManagerDestroyCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerDestroyCallback*'; }
}
class LLVMMemoryManagerDestroyCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerDestroyCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr { return new LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerDestroyCallback_ptr { return new LLVMMemoryManagerDestroyCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerDestroyCallback**'; }
}
class LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerDestroyCallback_ptr_ptr { return new LLVMMemoryManagerDestroyCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerDestroyCallback***'; }
}
class LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr { return new LLVMMemoryManagerDestroyCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMMemoryManagerDestroyCallback****'; }
}
class LLVMDisasmContextRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDisasmContextRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDisasmContextRef_ptr { return new LLVMDisasmContextRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMDisasmContextRef'; }
}
class LLVMDisasmContextRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDisasmContextRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDisasmContextRef_ptr_ptr { return new LLVMDisasmContextRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDisasmContextRef { return new LLVMDisasmContextRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMDisasmContextRef*'; }
}
class LLVMDisasmContextRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDisasmContextRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDisasmContextRef_ptr_ptr_ptr { return new LLVMDisasmContextRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDisasmContextRef_ptr { return new LLVMDisasmContextRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDisasmContextRef**'; }
}
class LLVMDisasmContextRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDisasmContextRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDisasmContextRef_ptr_ptr_ptr_ptr { return new LLVMDisasmContextRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDisasmContextRef_ptr_ptr { return new LLVMDisasmContextRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDisasmContextRef***'; }
}
class LLVMDisasmContextRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMDisasmContextRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMDisasmContextRef_ptr_ptr_ptr_ptr_ptr { return new LLVMDisasmContextRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMDisasmContextRef_ptr_ptr_ptr { return new LLVMDisasmContextRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMDisasmContextRef****'; }
}
class LLVMOpInfoCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMOpInfoCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMOpInfoCallback_ptr { return new LLVMOpInfoCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMOpInfoCallback'; }
}
class LLVMOpInfoCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMOpInfoCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMOpInfoCallback_ptr_ptr { return new LLVMOpInfoCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMOpInfoCallback { return new LLVMOpInfoCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMOpInfoCallback*'; }
}
class LLVMOpInfoCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMOpInfoCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMOpInfoCallback_ptr_ptr_ptr { return new LLVMOpInfoCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMOpInfoCallback_ptr { return new LLVMOpInfoCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMOpInfoCallback**'; }
}
class LLVMOpInfoCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMOpInfoCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMOpInfoCallback_ptr_ptr_ptr_ptr { return new LLVMOpInfoCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMOpInfoCallback_ptr_ptr { return new LLVMOpInfoCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMOpInfoCallback***'; }
}
class LLVMOpInfoCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMOpInfoCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMOpInfoCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMOpInfoCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMOpInfoCallback_ptr_ptr_ptr { return new LLVMOpInfoCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMOpInfoCallback****'; }
}
class LLVMSymbolLookupCallback implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolLookupCallback $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolLookupCallback_ptr { return new LLVMSymbolLookupCallback_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMSymbolLookupCallback'; }
}
class LLVMSymbolLookupCallback_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolLookupCallback_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolLookupCallback_ptr_ptr { return new LLVMSymbolLookupCallback_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolLookupCallback { return new LLVMSymbolLookupCallback($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolLookupCallback*'; }
}
class LLVMSymbolLookupCallback_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolLookupCallback_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolLookupCallback_ptr_ptr_ptr { return new LLVMSymbolLookupCallback_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolLookupCallback_ptr { return new LLVMSymbolLookupCallback_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolLookupCallback**'; }
}
class LLVMSymbolLookupCallback_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolLookupCallback_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolLookupCallback_ptr_ptr_ptr_ptr { return new LLVMSymbolLookupCallback_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolLookupCallback_ptr_ptr { return new LLVMSymbolLookupCallback_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolLookupCallback***'; }
}
class LLVMSymbolLookupCallback_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolLookupCallback_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolLookupCallback_ptr_ptr_ptr_ptr_ptr { return new LLVMSymbolLookupCallback_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolLookupCallback_ptr_ptr_ptr { return new LLVMSymbolLookupCallback_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolLookupCallback****'; }
}
class LLVMObjectFileRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMObjectFileRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMObjectFileRef_ptr { return new LLVMObjectFileRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMObjectFileRef'; }
}
class LLVMObjectFileRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMObjectFileRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMObjectFileRef_ptr_ptr { return new LLVMObjectFileRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMObjectFileRef { return new LLVMObjectFileRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMObjectFileRef*'; }
}
class LLVMObjectFileRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMObjectFileRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMObjectFileRef_ptr_ptr_ptr { return new LLVMObjectFileRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMObjectFileRef_ptr { return new LLVMObjectFileRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMObjectFileRef**'; }
}
class LLVMObjectFileRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMObjectFileRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMObjectFileRef_ptr_ptr_ptr_ptr { return new LLVMObjectFileRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMObjectFileRef_ptr_ptr { return new LLVMObjectFileRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMObjectFileRef***'; }
}
class LLVMObjectFileRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMObjectFileRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMObjectFileRef_ptr_ptr_ptr_ptr_ptr { return new LLVMObjectFileRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMObjectFileRef_ptr_ptr_ptr { return new LLVMObjectFileRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMObjectFileRef****'; }
}
class LLVMSectionIteratorRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSectionIteratorRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSectionIteratorRef_ptr { return new LLVMSectionIteratorRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMSectionIteratorRef'; }
}
class LLVMSectionIteratorRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSectionIteratorRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSectionIteratorRef_ptr_ptr { return new LLVMSectionIteratorRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSectionIteratorRef { return new LLVMSectionIteratorRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMSectionIteratorRef*'; }
}
class LLVMSectionIteratorRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSectionIteratorRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSectionIteratorRef_ptr_ptr_ptr { return new LLVMSectionIteratorRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSectionIteratorRef_ptr { return new LLVMSectionIteratorRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSectionIteratorRef**'; }
}
class LLVMSectionIteratorRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSectionIteratorRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSectionIteratorRef_ptr_ptr_ptr_ptr { return new LLVMSectionIteratorRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSectionIteratorRef_ptr_ptr { return new LLVMSectionIteratorRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSectionIteratorRef***'; }
}
class LLVMSectionIteratorRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSectionIteratorRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSectionIteratorRef_ptr_ptr_ptr_ptr_ptr { return new LLVMSectionIteratorRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSectionIteratorRef_ptr_ptr_ptr { return new LLVMSectionIteratorRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSectionIteratorRef****'; }
}
class LLVMSymbolIteratorRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolIteratorRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolIteratorRef_ptr { return new LLVMSymbolIteratorRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMSymbolIteratorRef'; }
}
class LLVMSymbolIteratorRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolIteratorRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolIteratorRef_ptr_ptr { return new LLVMSymbolIteratorRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolIteratorRef { return new LLVMSymbolIteratorRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolIteratorRef*'; }
}
class LLVMSymbolIteratorRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolIteratorRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolIteratorRef_ptr_ptr_ptr { return new LLVMSymbolIteratorRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolIteratorRef_ptr { return new LLVMSymbolIteratorRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolIteratorRef**'; }
}
class LLVMSymbolIteratorRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolIteratorRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolIteratorRef_ptr_ptr_ptr_ptr { return new LLVMSymbolIteratorRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolIteratorRef_ptr_ptr { return new LLVMSymbolIteratorRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolIteratorRef***'; }
}
class LLVMSymbolIteratorRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMSymbolIteratorRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMSymbolIteratorRef_ptr_ptr_ptr_ptr_ptr { return new LLVMSymbolIteratorRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMSymbolIteratorRef_ptr_ptr_ptr { return new LLVMSymbolIteratorRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMSymbolIteratorRef****'; }
}
class LLVMRelocationIteratorRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMRelocationIteratorRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMRelocationIteratorRef_ptr { return new LLVMRelocationIteratorRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMRelocationIteratorRef'; }
}
class LLVMRelocationIteratorRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMRelocationIteratorRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMRelocationIteratorRef_ptr_ptr { return new LLVMRelocationIteratorRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMRelocationIteratorRef { return new LLVMRelocationIteratorRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMRelocationIteratorRef*'; }
}
class LLVMRelocationIteratorRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMRelocationIteratorRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMRelocationIteratorRef_ptr_ptr_ptr { return new LLVMRelocationIteratorRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMRelocationIteratorRef_ptr { return new LLVMRelocationIteratorRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMRelocationIteratorRef**'; }
}
class LLVMRelocationIteratorRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMRelocationIteratorRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMRelocationIteratorRef_ptr_ptr_ptr_ptr { return new LLVMRelocationIteratorRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMRelocationIteratorRef_ptr_ptr { return new LLVMRelocationIteratorRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMRelocationIteratorRef***'; }
}
class LLVMRelocationIteratorRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMRelocationIteratorRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMRelocationIteratorRef_ptr_ptr_ptr_ptr_ptr { return new LLVMRelocationIteratorRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMRelocationIteratorRef_ptr_ptr_ptr { return new LLVMRelocationIteratorRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMRelocationIteratorRef****'; }
}
class LLVMPassManagerBuilderRef implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerBuilderRef $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerBuilderRef_ptr { return new LLVMPassManagerBuilderRef_ptr(FFI::addr($this->data)); }
    public static function getType(): string { return 'LLVMPassManagerBuilderRef'; }
}
class LLVMPassManagerBuilderRef_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerBuilderRef_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerBuilderRef_ptr_ptr { return new LLVMPassManagerBuilderRef_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerBuilderRef { return new LLVMPassManagerBuilderRef($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerBuilderRef*'; }
}
class LLVMPassManagerBuilderRef_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerBuilderRef_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerBuilderRef_ptr_ptr_ptr { return new LLVMPassManagerBuilderRef_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerBuilderRef_ptr { return new LLVMPassManagerBuilderRef_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerBuilderRef**'; }
}
class LLVMPassManagerBuilderRef_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerBuilderRef_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerBuilderRef_ptr_ptr_ptr_ptr { return new LLVMPassManagerBuilderRef_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerBuilderRef_ptr_ptr { return new LLVMPassManagerBuilderRef_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerBuilderRef***'; }
}
class LLVMPassManagerBuilderRef_ptr_ptr_ptr_ptr implements illvm {
    private FFI\CData $data;
    public function __construct(FFI\CData $data) { $this->data = $data; }
    public function getData(): FFI\CData { return $this->data; }
    public function equals(LLVMPassManagerBuilderRef_ptr_ptr_ptr_ptr $other): bool { return $this->data == $other->data; }
    public function addr(): LLVMPassManagerBuilderRef_ptr_ptr_ptr_ptr_ptr { return new LLVMPassManagerBuilderRef_ptr_ptr_ptr_ptr_ptr(FFI::addr($this->data)); }
    public function deref(int $n = 0): LLVMPassManagerBuilderRef_ptr_ptr_ptr { return new LLVMPassManagerBuilderRef_ptr_ptr_ptr($this->data[$n]); }
    public static function getType(): string { return 'LLVMPassManagerBuilderRef****'; }
}