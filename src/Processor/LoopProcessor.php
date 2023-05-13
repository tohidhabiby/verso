<?php

namespace Tohid\Verso\Processor;

use Tohid\Verso\Helper\Calculator;

class LoopProcessor
{
    private Calculator $calculator;
    public function __construct()
    {
        $this->calculator = new Calculator();
    }

    public function process(int $value): int|string
    {
        $isDivisibleByThree = $this->calculator->isDivisibleBy($value);
        $isDivisibleByFive = $this->calculator->isDivisibleBy($value, 5);
        switch (true) {
            case ($isDivisibleByThree && $isDivisibleByFive): return 'FizzBuzz';
            case ($isDivisibleByFive):                        return 'Buzz';
            case ($isDivisibleByThree):                       return 'Fizz';
            default:                                          return $value;
        }
    }
}