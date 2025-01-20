<?php

declare(strict_types=1);

namespace Cyrulik\SimpleCalculator;

readonly class Calculator
{
    public function __construct(private OperationFactory $operationFactory)
    {
    }

    public function calculate(string $operation, float $a, float $b): float
    {
        return $this->operationFactory->create($operation)->calculate($a, $b);
    }
}
