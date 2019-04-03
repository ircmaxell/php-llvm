	.text
	.file	"test"
	.globl	add
	.p2align	4, 0x90
	.type	add,@function
add:
	.cfi_startproc
	leal	(%rdi,%rsi), %eax
	retq
.Lfunc_end0:
	.size	add, .Lfunc_end0-add
	.cfi_endproc


	.section	".note.GNU-stack","",@progbits
