<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    private Subtraction $sut;

    public function setUp(): void
    {
        $this->sut = new Subtraction();
    }

    public function testItCanSubtractTwoNumbers(): void
    {
        $result = $this->sut->calculate(2, 1);

        $this->assertSame(1.0, $result);
    }

    public function testItCanSubtractTwoNegativeNumbers(): void
    {
        $result = $this->sut->calculate(-1, -2);

        $this->assertSame(1.0, $result);
    }

    public function testItCanSubtractTwoDecimalNumbers(): void
    {
        $result = $this->sut->calculate(2.5, 1.1);

        $this->assertSame(1.4, $result);
    }

    public function testItCanSubtractTwoNegativeDecimalNumbers(): void
    {
        $result = $this->sut->calculate(-2.5, -1.1);

        $this->assertSame(-1.4, $result);
    }
}
