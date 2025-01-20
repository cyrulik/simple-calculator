<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Addition;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    private Addition $sut;

    public function setUp(): void
    {
        $this->sut = new Addition();
    }

    #[DataProvider('additionDataProvider')]
    public function testItCanPerformAdditionOperations(float $a, float $b, float $expected): void
    {
        $this->assertSame($expected, $this->sut->calculate($a, $b));
    }

    /**
     * @return float[][]
     */
    public static function additionDataProvider(): array
    {
        return [
            [1, 2, 3.0],
            [-1, -2, -3.0],
            [1.1, 2.5, 3.6],
            [-1.1, -2.5, -3.6],
        ];
    }
}
