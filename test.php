<?php

use Faker\Dutch\Factory;
use Faker\Extension\AddressExtension;
use Faker\Extension\CountryExtension;
use Faker\Extension\PersonExtension;

require_once 'vendor/autoload.php';

$faker = Factory::netherlands();
echo 'NL data:'.PHP_EOL;
echo '---------'.PHP_EOL;
echo $faker->ext(AddressExtension::class)->city() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->streetName() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->streetAddress() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->address() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->buildingNumber() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->postcode() . PHP_EOL;

echo PHP_EOL.PHP_EOL;

$faker = Factory::belgium();
echo 'BE data:'.PHP_EOL;
echo '---------'.PHP_EOL;
echo $faker->ext(AddressExtension::class)->city() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->streetName() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->streetAddress() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->address() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->buildingNumber() . PHP_EOL;
echo $faker->ext(AddressExtension::class)->postcode() . PHP_EOL;
echo PHP_EOL;
echo $faker->ext(CountryExtension::class)->country() . PHP_EOL;
echo PHP_EOL;
echo $faker->ext(PersonExtension::class)->name() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->name('male') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->name('female') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->firstName() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->firstName('male') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->firstName('female') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->firstNameMale() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->firstNameFemale() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->lastName() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->title() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->title('male') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->title('female') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->titleMale() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->titleFemale() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->rrn() . PHP_EOL;
echo $faker->ext(PersonExtension::class)->rrn('male') . PHP_EOL;
echo $faker->ext(PersonExtension::class)->rrn('female') . PHP_EOL;
