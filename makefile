# Bash
brain-games:
	php bin/brain-games

brain-even:
	php bin/brain-even

brain-calc:
	php bin/brain-calc

brain-gcd:
	php bin/brain-gcd

install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin