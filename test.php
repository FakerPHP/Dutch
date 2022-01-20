<?php

use Faker\Dutch\Factory;
use Faker\Extension\AddressExtension;

require_once 'vendor/autoload.php';

$faker = Factory::netherlands();

echo $faker->ext(AddressExtension::class)->city() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->streetName() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->streetAddress() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->address() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->buildingNumber() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->postcode() . PHP_EOL;
