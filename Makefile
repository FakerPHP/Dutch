.PHONY: build coverage help test

help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: test static ## Runs test targets

coverage: vendor/autoload.php ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

cs: vendor ## Fixes coding standard issues with php-cs-fixer
	vendor/bin/php-cs-fixer fix --diff --verbose

test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit

clean: ## Cleans up build and vendor files
	rm -rf vendor composer.lock .build
