<?php declare(strict_types=1);

namespace PHPLLVM;

interface Use_ {

    public function getNextUse(): Use_;

    public function getUser(): Value;

    public function getUsedValue(): Value;
    
}