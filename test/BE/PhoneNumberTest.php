<?php

namespace Faker\Test\Dutch\BE;

use Faker\Dutch\BE\PhoneNumber;
use Faker\Dutch\Factory;
use Faker\Extension\PhoneNumberExtension;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    private PhoneNumber $extension;

    public function setUp(): void
    {
        $faker = Factory::belgium();
        $faker->seed(1);
        $this->extension = $faker->ext(PhoneNumberExtension::class);
        parent::setUp();
    }

    public function testPhoneNumber(): void
    {
        $value = $this->extension->phoneNumber();
        $this->assertEquals('+32(0)007 086397', $value);
    }

    public function testE164PhoneNumber(): void
    {
        $value = $this->extension->e164PhoneNumber();
        $this->assertEquals('+32579439090', $value);
        $this->assertEquals(12, strlen($value));
        $this->assertEquals('+32', substr($value, 0, 3));
    }
}
