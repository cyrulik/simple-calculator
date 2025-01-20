<?php

namespace Cyrulik\SimpleCalculator\Tests\Unit;

use Cyrulik\SimpleCalculator\Operation\Addition;
use Cyrulik\SimpleCalculator\Operation\Subtraction;
use Cyrulik\SimpleCalculator\OperationFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class OperationFactoryTest extends TestCase
{
    private OperationFactory $sut;

    public function setUp(): void
    {
        $this->sut = new OperationFactory();
    }

    public function testItCanCreateAdditionOperation(): void
    {
        $operation = $this->sut->create('addition');

        $this->assertInstanceOf(Addition::class, $operation);
    }

    public function testItCanCreateSubtractionOperation(): void
    {
        $operation = $this->sut->create('subtraction');

        $this->assertInstanceOf(Subtraction::class, $operation);
    }

    public function testItThrowsExceptionForInvalidOperation(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid operation: foo');

        $this->sut->create('foo');
    }
}
