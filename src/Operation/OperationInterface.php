<?php

declare(strict_types=1);

namespace Cyrulik\SimpleCalculator\Operation;

interface OperationInterface
{
    public function calculate(float $a, float $b): float;
}
