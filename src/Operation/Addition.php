<?php

declare(strict_types=1);

namespace Cyrulik\SimpleCalculator\Operation;

class Addition implements OperationInterface
{
    public function calculate(float $a, float $b): float
    {
        return $a + $b;
    }
}
