# Faker - Dutch extensions

[![Packagist Downloads](https://img.shields.io/packagist/dm/FakerPHP/Swedish)](https://packagist.org/packages/fakerphp/swedish)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/FakerPHP/Swedish/Continuous%20Integration/main)](https://github.com/FakerPHP/Swedish/actions)

Dutch specific extensions for Faker

## Getting Started

### Installation

```shell
composer require fakerphp/dutch
```

### Documentation

Full documentation can be found over on [fakerphp.github.io](https://fakerphp.github.io).

### Basic Usage

Use `Faker\Dutch\Factory::netherlands()` or `Faker\Dutch\Factory::belgium()` to create and initialize a Faker generator with Dutch extensions.

```php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Dutch\Factory::netherlands();

echo $faker->name();
// 'Piet de Vries';
```

## License

Faker is released under the MIT License. See [`LICENSE`](LICENSE) for details.
