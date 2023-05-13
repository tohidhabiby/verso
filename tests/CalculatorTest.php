<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Tohid\Verso\Helper\Calculator;

final class CalculatorTest extends TestCase
{
    #[DataProvider('additionProvider')]
    public function testIsDivisibleBy(int $value, int $divisor, bool $expected): void
    {
        $calculator = new Calculator();
        $this->assertSame($expected, $calculator->isDivisibleBy($value, $divisor));
    }

    public static function additionProvider(): array
    {
        return [
            [1, 3, false],
            [2, 3, false],
            [3, 3, true],
            [7, 3, false],
            [11, 3, false],
            [15, 3, true],
            [3, 5, false],
            [4, 5, false],
            [5, 5, true],
            [31, 5, false],
            [40, 5, true],
            [100, 20, true],
            [100, 33, false],
        ];
    }
}