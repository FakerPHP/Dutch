<?php

namespace Faker\Test\Dutch\NL;

use Faker\Dutch\Factory;
use Faker\Dutch\NL\Address;
use Faker\Extension\AddressExtension;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private Address $extension;

    protected function setUp(): void
    {
        $faker = Factory::netherlands();
        $faker->seed(1);
        $this->extension = $faker->ext(AddressExtension::class);
        parent::setUp();
    }

    public function testStreetSuffix(): void
    {
        $value = $this->extension->streetSuffix();
        self::assertEquals('boulevard', $value);
    }

    public function testBuildingNumber(): void
    {
        $value = $this->extension->buildingNumber();
        self::assertEquals('70-Y', $value);
    }

    public function testState(): void
    {
        $value = $this->extension->state();
        self::assertEquals('Utrecht', $value);
    }

    public function testCity(): void
    {
        $value = $this->extension->city();
        self::assertEquals('Sexbierum', $value);
    }

    public function testPostcode(): void
    {
        $value = $this->extension->postcode();
        self::assertEquals('9742GT', $value);
        self::assertEquals(6, strlen($value));
    }

    public function testAddress(): void
    {
        $value = $this->extension->address();
        self::assertEquals("Maassteeg 89-99\n4814NJ Triemen", $value);
    }

    public function testStreetName(): void
    {
        $value = $this->extension->streetName();
        self::assertEquals('Spring in ‘t Veldbaan', $value);
    }

    public function testStreetAddress(): void
    {
        $value = $this->extension->streetAddress();
        self::assertEquals('den Buytelaarlaan 97-W', $value);
    }
}
