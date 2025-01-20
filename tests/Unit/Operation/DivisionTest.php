<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Division;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    private Division $sut;

    public function setUp(): void
    {
        $this->sut = new Division();
    }

    #[DataProvider('divisionDataProvider')]
    public function testItCanPerformDivisionOperations(float $a, float $b, float $expected): void
    {
        $this->assertEquals($expected, $this->sut->calculate($a, $b));
    }

    public function testItThrowsAnExceptionWhenDividingByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Dividing by zero is not allowed.');

        $this->sut->calculate(6, 0);
    }

    /**
     * @return float[][]
     */
    public static function divisionDataProvider(): array
    {
        return [
            [6, 3, 2.0],
            [-6, -3, 2.0],
            [-6, 3, -2.0],
            [0, 3, 0.0],
        ];
    }
}
