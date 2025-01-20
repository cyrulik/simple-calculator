<?php

declare(strict_types=1);

namespace Cyrulik\SimpleCalculator;

use Cyrulik\SimpleCalculator\Operation\OperationInterface;
use InvalidArgumentException;

readonly class OperationFactory
{
    public function create(string $operation): OperationInterface
    {
        $operationClass = 'Cyrulik\SimpleCalculator\Operation\\' . ucfirst($operation);

        if (!class_exists($operationClass)) {
            throw new InvalidArgumentException("Invalid operation: $operation");
        }

        /** @var OperationInterface $instance */
        $instance = new $operationClass();

        return $instance;
    }
}
