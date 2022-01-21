<?php

namespace Faker\Test\Dutch\NL;

use Faker\Dutch\NL\PhoneNumber;
use Faker\Dutch\Factory;
use Faker\Extension\PhoneNumberExtension;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    private PhoneNumber $extension;

    protected function setUp(): void
    {
        $faker = Factory::netherlands();
        $faker->seed(1);
        $this->extension = $faker->ext(PhoneNumberExtension::class);
        parent::setUp();
    }

    public function testPhoneNumber(): void
    {
        $value = $this->extension->phoneNumber();
        self::assertEquals('06-00708639', $value);
    }

    public function testE164PhoneNumber(): void
    {
        $value = $this->extension->e164PhoneNumber();
        self::assertEquals('+31579439090', $value);
        self::assertEquals(12, strlen($value));
        self::assertEquals('+31', substr($value, 0, 3));
    }
}
