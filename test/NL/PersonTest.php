<?php

namespace Faker\Test\Dutch\NL;

use Faker\Dutch\NL\Person;
use Faker\Dutch\Factory;
use Faker\Extension\PersonExtension;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Person $extension;

    protected function setUp(): void
    {
        $faker = Factory::netherlands();
        $faker->seed(1);
        $this->extension = $faker->ext(PersonExtension::class);
        parent::setUp();
    }

    public function testName(): void
    {
        $value = $this->extension->name();
        self::assertEquals('Kiki Maas', $value);

        $valueMale = $this->extension->name(PersonExtension::GENDER_MALE);
        self::assertEquals('bacc. Samuel Korsman PhD', $valueMale);

        $valueFemale = $this->extension->name(PersonExtension::GENDER_FEMALE);
        self::assertEquals('bacc. Fiene Westermann MPhil', $valueFemale);
    }

    public function testFirstName(): void
    {
        $value = $this->extension->firstName();
        self::assertEquals('Johanna', $value);

        $valueMale = $this->extension->firstName(PersonExtension::GENDER_MALE);
        self::assertEquals('Morris', $valueMale);

        $valueFemale = $this->extension->firstName(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Amina', $valueFemale);
    }

    public function testFirstNameMale(): void
    {
        $valueMale = $this->extension->firstName(PersonExtension::GENDER_MALE);
        self::assertEquals('Wouter', $valueMale);
    }

    public function testFirstNameFemale(): void
    {
        $valueMale = $this->extension->firstName(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Jennifer', $valueMale);
    }

    public function testLastName(): void
    {
        $value = $this->extension->lastName();
        self::assertEquals('van Gent', $value);
    }

    public function testTitle(): void
    {
        $value = $this->extension->title();
        self::assertEquals('mr.', $value);

        $valueMale = $this->extension->title(PersonExtension::GENDER_MALE);
        self::assertEquals('ir.', $valueMale);

        $valueFemale = $this->extension->title(PersonExtension::GENDER_FEMALE);
        self::assertEquals('kand.', $valueFemale);
    }

    public function testTitleMale(): void
    {
        $valueMale = $this->extension->titleMale();
        self::assertEquals('mr.', $valueMale);
    }

    public function testTitleFemale(): void
    {
        $valueMale = $this->extension->titleFemale();
        self::assertEquals('mr.', $valueMale);
    }

    public function testRrn(): void
    {
        $value = $this->extension->idNumber();
        self::assertEquals('678997056', $value);
    }
}
