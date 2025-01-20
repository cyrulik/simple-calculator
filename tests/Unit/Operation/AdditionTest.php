<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit\Operation;

use Cyrulik\SimpleCalculator\Operation\Addition;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    private Addition $sut;

    public function setUp(): void
    {
        $this->sut = new Addition();
    }

    public function testItCanAddTwoNumbers(): void
    {
        $result = $this->sut->calculate(1, 2);

        $this->assertSame(3.0, $result);
    }

    public function testItCanAddTwoNegativeNumbers(): void
    {
        $result = $this->sut->calculate(-1, -2);

        $this->assertSame(-3.0, $result);
    }

    public function testItCanAddTwoDecimalNumbers(): void
    {
        $result = $this->sut->calculate(1.1, 2.5);

        $this->assertSame(3.6, $result);
    }

    public function testItCanAddTwoNegativeDecimalNumbers(): void
    {
        $result = $this->sut->calculate(-1.1, -2.5);

        $this->assertSame(-3.6, $result);
    }
}
