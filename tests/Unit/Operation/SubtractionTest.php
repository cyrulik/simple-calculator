<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Subtraction;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    private Subtraction $sut;

    public function setUp(): void
    {
        $this->sut = new Subtraction();
    }

    #[DataProvider('subtractionDataProvider')]
    public function testItCanPerformSubtractionOperations(float $a, float $b, float $expected): void
    {
        $this->assertSame($expected, $this->sut->calculate($a, $b));
    }

    /**
     * @return float[][]
     */
    public static function subtractionDataProvider(): array
    {
        return [
            [1, 2, -1.0],
            [-1, -2, 1.0],
            [1.1, 2.5, -1.4],
            [-1.1, -2.5, 1.4],
        ];
    }
}
