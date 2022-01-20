<?php

namespace Faker\Test\Dutch\BE;

use Faker\Dutch\BE\Address;
use Faker\Dutch\Factory;
use Faker\Extension\AddressExtension;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private Address $extension;

    protected function setUp(): void
    {
        $faker = Factory::belgium();
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
        self::assertEquals('Henegouwen', $value);
    }

    public function testCity(): void
    {
        $value = $this->extension->city();
        self::assertEquals('Nieuwpoort', $value);
    }

    public function testPostcode(): void
    {
        $value = $this->extension->postcode();
        self::assertEquals('5537', $value);
        self::assertEquals(4, strlen($value));
    }

    public function testAddress(): void
    {
        $value = $this->extension->address();
        self::assertEquals("De Voslaan 97-W\n4430 Mesen", $value);
    }

    public function testStreetName(): void
    {
        $value = $this->extension->streetName();
        self::assertEquals('Willemspad', $value);
    }

    public function testStreetAddress(): void
    {
        $value = $this->extension->streetAddress();
        self::assertEquals('Borremansbaan 78-Z', $value);
    }
}
