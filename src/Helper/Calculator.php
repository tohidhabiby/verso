<?php

namespace Tohid\Verso\Helper;

class Calculator
{
    public function isDivisibleBy(int $value, int $divisor = 3): bool
    {
        return $value % $divisor == 0;
    }
}