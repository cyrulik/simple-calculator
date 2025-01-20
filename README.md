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

## Working with this project

Simple Calculator uses Makefile to run every aspect required for development of this project.

Specific commands and their equivalent composer scripts are listed below. All of them have their equivalent make commands, e.g. `composer test` can be run with `make test`.

## Installation

To start working with this project, and when changing any of its files later, you can run all major checks with:

```bash
make all
```

## Testing

This project uses PHPUnit for testing. You can run tests with:

```bash
composer test
```

Or directly with PHPUnit:

```bash
./vendor/bin/phpunit
```

## Coverage

To generate coverage report, you need to have Xdebug installed. You can generate coverage report with:

```bash
XDEBUG_MODE=coverage composer test-coverage
```

## Coding Standards

Simple Calculator uses PHP CS Fixer to enforce coding standards. You can fix coding standards with:

```bash
composer fix
```

Or directly with PHP CS Fixer:

```bash
./vendor/bin/php-cs-fixer fix
```

## Static Analysis

PHPStan is used for static analysis. You can run static analysis with:

```bash
composer analyse
```

Or directly with PHPStan:

```bash
./vendor/bin/phpstan analyse
```

## Infection

Infection is used for mutation testing. You can run mutation testing with:

```bash
composer infection
```

Or directly with Infection:

```bash
./vendor/bin/infection
```
