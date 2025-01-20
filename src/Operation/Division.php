<?php

declare(strict_types=1);

namespace Cyrulik\SimpleCalculator\Operation;

use InvalidArgumentException;

class Division implements OperationInterface
{
    public function calculate(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new InvalidArgumentException('Dividing by zero is not allowed.');
        }

        return $a / $b;
    }
}
