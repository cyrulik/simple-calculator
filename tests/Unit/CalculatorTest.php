<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit;

use Cyrulik\SimpleCalculator\Calculator;
use Cyrulik\SimpleCalculator\OperationFactory;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $sut;

    public function setUp(): void
    {
        $this->sut = new Calculator(new OperationFactory());
    }

    #[DataProvider('operationsDataProvider')]
    public function testItCanPerformArithmeticOperations(string $operation, float $a, float $b, float $expected): void
    {
        $this->assertSame($expected, $this->sut->calculate($operation, $a, $b));
    }

    public function testItThrowsExceptionForInvalidOperation(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->sut->calculate('foo', 2, 1);
    }

    /**
     * @return array<array{0: string, 1: float, 2: float, 3: float}>
     */
    public static function operationsDataProvider(): array
    {
        return [
            ['addition', 1, 2, 3.0],
            ['subtraction', 1, 2, -1.0],
            ['multiplication', 2, 3, 6.0],
            ['division', 6, 3, 2.0],
        ];
    }
}
