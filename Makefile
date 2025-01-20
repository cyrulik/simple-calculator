.PHONY: install test test-coverage fix analyse infection all

install:
	composer install

test:
	composer test

test-coverage:
	XDEBUG_MODE=coverage composer test-coverage

fix:
	composer fix

analyse:
	composer analyse

infection:
	composer infection

all: install fix test infection analyse
