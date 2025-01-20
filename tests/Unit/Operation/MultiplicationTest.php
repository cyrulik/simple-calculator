<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    private Multiplication $sut;

    public function setUp(): void
    {
        $this->sut = new Multiplication();
    }

    public function testItCanMultiplyTwoNumbers(): void
    {
        $result = $this->sut->calculate(2, 3);

        $this->assertEquals(6.0, $result);
    }

    public function testItCanMultiplyTwoNegativeNumbers(): void
    {
        $result = $this->sut->calculate(-2, -3);

        $this->assertEquals(6.0, $result);
    }

    public function testItCanMultiplyNegativeAndPositiveNumbers(): void
    {
        $result = $this->sut->calculate(-2, 3);

        $this->assertEquals(-6.0, $result);
    }

    public function testItCanMultiplyZeroAndPositiveNumbers(): void
    {
        $result = $this->sut->calculate(0, 3);

        $this->assertEquals(0.0, $result);
    }
}
