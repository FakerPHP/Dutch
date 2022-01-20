<?php

namespace Faker\Test\Dutch\BE;

use Faker\Dutch\BE\Country;
use Faker\Dutch\Factory;
use Faker\Extension\CountryExtension;
use PHPUnit\Framework\TestCase;

final class CountryTest extends TestCase
{
    private Country $extension;

    public function setUp(): void
    {
        $faker = Factory::belgium();
        $faker->seed(1);
        $this->extension = $faker->ext(CountryExtension::class);
        parent::setUp();
    }

    public function testCountry(): void
    {
        $value = $this->extension->country();
        $this->assertEquals('Namibië', $value);
    }
}
