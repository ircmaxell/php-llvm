<?php declare(strict_types=1);

namespace PHPLLVM;

use PHPLLVM\LLVM9\LLVM as LLVM9Impl;
use PHPLLVM\LLVM8\LLVM as LLVM8Impl;
use PHPLLVM\LLVM7\LLVM as LLVM7Impl;
use PHPLLVM\LLVM4\LLVM as LLVM4Impl;
use llvm9\llvm as LLVM9Lib;
use llvm8\llvm as LLVM8Lib;
use llvm7\llvm as LLVM7Lib;
use llvm4\llvm as LLVM4Lib;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class Chooser {

    public const FILES = [
        'libLLVM-9.so.1' => 9,
        'libLLVM-8.so.1' => 8,
        'libLLVM-7.so.1' => 7,
        'libLLVM-4.0.so.1' => 4,
    ];

    public const IMPLMAP = [
        9 => LLVM9Impl::class,
        8 => LLVM8Impl::class,
        7 => LLVM7Impl::class,
        4 => LLVM4Impl::class,
    ];

    public static function choose(): LLVM {
        foreach (self::FILES as $file => $version) {
            $path = self::findFile($file);

            if ($path !== null) {
                require_once __DIR__ . '/../ffi/llvm' . $version . '.php';
                $class = self::IMPLMAP[$version];
                $obj = new $class($path);
                return $obj;
            }
        }
        throw new \LogicException("No supported LLVM version could be found on your system. Is LLVM installed correctly?");
    }

    protected static function findFile(string $file): ?string {
        $searchPaths = [
            '/usr/lib',
            '/usr/local/lib',
            '/opt'
        ];

        foreach ($searchPaths as $path) {
            // search up to 3 subfolders
            $fullPath = glob("$path/{,*/,*/*/,*/*/*/}$file", GLOB_BRACE | GLOB_NOSORT);
            foreach ($fullPath as $candidate) {
                if (self::matchesArchitecture($candidate)) {
                    return realpath($candidate);
                }
            }
        }
        return null;
    }

    /**
     * This method inspects the internals of the ELF shared object file to determine what architecture it was compiled for.
     * Ideally, we'd determine a lot more than just 32/64 bit status, but for now that seems enough... (famous last words)
     * 
     * @param  string $file [description]
     * @return [type]       [description]
     */
    protected static function matchesArchitecture(string $file): bool {
        $fp = @fopen($file, 'r');
        if ($fp === false) {
            // can't open
            return false;
        }
        $header = fread($fp, 16);
        if ($header === false || strlen($header) < 8) {
            // too short, or couldn't read for some reason
            return false;
        }
        $bitSize = ord($header[4]);
        if ($bitSize === 1) {
            // 32 bit
            return PHP_INT_SIZE === 4;
        }
        if ($bitSize === 2) {
            return PHP_INT_SIZE === 8;
        }
        // This should never happen in a valid ELF file, so assume it isn't valid
        return false;
    }
}