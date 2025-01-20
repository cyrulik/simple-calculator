<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Multiplication;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    private Multiplication $sut;

    public function setUp(): void
    {
        $this->sut = new Multiplication();
    }

    #[DataProvider('multiplicationDataProvider')]
    public function testItCanPerformMultiplicationOperations(float $a, float $b, float $expected): void
    {
        $this->assertEquals($expected, $this->sut->calculate($a, $b));
    }

    /**
     * @return float[][]
     */
    public static function multiplicationDataProvider(): array
    {
        return [
            [2, 3, 6.0],
            [-2, -3, 6.0],
            [-2, 3, -6.0],
            [0, 3, 0.0],
        ];
    }
}
