# Simple Calculator

This is a simple calculator that can perform basic arithmetic operations.

It is written as a reusable package in PHP 8.3 and uses PHPUnit 10 for testing.

## Installation

You can install the package via composer:

```bash
composer require cyrulik/simple-calculator
```

## Usage

```php
use Cyrulik\SimpleCalculator\Calculator;
use Cyrulik\SimpleCalculator\OperationFactory;

$calculator = new Calculator(new OperationFactory());
$calculator->calculate('addition', 1, 2);
```

## Testing

```bash
composer test
```

Or directly with PHPUnit:

```bash
./vendor/bin/phpunit
```

## Coverage

```bash
XDEBUG_MODE=coverage composer test-coverage
```

## Coding Standards

```bash
composer fix
```

## Static Analysis

```bash
composer analyse
```

## Infection

```bash
composer infection
```
