<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Division;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    private Division $sut;

    public function setUp(): void
    {
        $this->sut = new Division();
    }

    public function testItCanDivideTwoNumbers(): void
    {
        $result = $this->sut->calculate(6, 3);

        $this->assertEquals(2.0, $result);
    }

    public function testItCanDivideTwoNegativeNumbers(): void
    {
        $result = $this->sut->calculate(-6, -3);

        $this->assertEquals(2.0, $result);
    }

    public function testItCanDivideNegativeAndPositiveNumbers(): void
    {
        $result = $this->sut->calculate(-6, 3);

        $this->assertEquals(-2.0, $result);
    }

    public function testItCanDivideZeroAndPositiveNumbers(): void
    {
        $result = $this->sut->calculate(0, 3);

        $this->assertEquals(0.0, $result);
    }

    public function testItThrowsAnExceptionWhenDividingByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Dividing by zero is not allowed.');

        $this->sut->calculate(6, 0);
    }
}
