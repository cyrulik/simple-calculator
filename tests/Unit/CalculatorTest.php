<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit;

use Cyrulik\SimpleCalculator\Calculator;
use Cyrulik\SimpleCalculator\OperationFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $sut;

    public function setUp(): void
    {
        $this->sut = new Calculator(new OperationFactory());
    }

    public function testItCanPerformAdditionOperation(): void
    {
        $result = $this->sut->calculate('addition', 1, 2);

        $this->assertSame(3.0, $result);
    }

    public function testItCanPerformSubtractionOperation(): void
    {
        $result = $this->sut->calculate('subtraction', 2, 1);

        $this->assertSame(1.0, $result);
    }

    public function testItThrowsExceptionForInvalidOperation(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->sut->calculate('foo', 2, 1);
    }
}
