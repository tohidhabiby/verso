<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Tohid\Verso\Processor\LoopProcessor;

class LoopProcessorTest extends TestCase
{
    #[DataProvider('additionProvider')]
    public function testProcess(int $value, int|string $expected): void
    {
        $processor = new LoopProcessor();
        $this->assertSame($expected, $processor->process($value));
    }

    public static function additionProvider(): array
    {
        return [
            [1, 1],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
            [14, 14],
            [20, 'Buzz'],
            [30, 'FizzBuzz'],
            [33, 'Fizz'],
        ];
    }
}