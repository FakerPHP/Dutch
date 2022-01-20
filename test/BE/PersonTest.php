<?php

namespace Faker\Test\Dutch\BE;

use Faker\Dutch\BE\Person;
use Faker\Dutch\Factory;
use Faker\Extension\PersonExtension;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Person $extension;

    protected function setUp(): void
    {
        $faker = Factory::belgium();
        $faker->seed(1);
        $this->extension = $faker->ext(PersonExtension::class);
        parent::setUp();
    }

    public function testName(): void
    {
        $value = $this->extension->name();
        self::assertEquals('Kaat Borremans', $value);

        $valueMale = $this->extension->name(PersonExtension::GENDER_MALE);
        self::assertEquals('Yanis Coppens', $valueMale);

        $valueFemale = $this->extension->name(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Ella Rousseau', $valueFemale);
    }

    public function testFirstName(): void
    {
        $value = $this->extension->firstName();
        self::assertEquals('Kaat', $value);

        $valueMale = $this->extension->firstName(PersonExtension::GENDER_MALE);
        self::assertEquals('Jonas', $valueMale);

        $valueFemale = $this->extension->firstName(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Margaux', $valueFemale);
    }

    public function testFirstNameMale(): void
    {
        $valueMale = $this->extension->firstName(PersonExtension::GENDER_MALE);
        self::assertEquals('Guillaume', $valueMale);
    }

    public function testFirstNameFemale(): void
    {
        $valueMale = $this->extension->firstName(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Julie', $valueMale);
    }

    public function testLastName(): void
    {
        $value = $this->extension->lastName();
        self::assertEquals('Georges', $value);
    }

    public function testTitle(): void
    {
        $value = $this->extension->title();
        self::assertEquals('Miss', $value);

        $valueMale = $this->extension->title(PersonExtension::GENDER_MALE);
        self::assertEquals('Mr.', $valueMale);

        $valueFemale = $this->extension->title(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Dr.', $valueFemale);
    }

    public function testTitleMale(): void
    {
        $valueMale = $this->extension->titleMale(PersonExtension::GENDER_MALE);
        self::assertEquals('Mr.', $valueMale);
    }

    public function testTitleFemale(): void
    {
        $valueMale = $this->extension->titleFemale(PersonExtension::GENDER_FEMALE);
        self::assertEquals('Mrs.', $valueMale);
    }

    public function testRrn(): void
    {
        $value = $this->extension->rrn();
        self::assertEquals('22100657865', $value);

        $valueMale = $this->extension->rrn(PersonExtension::GENDER_MALE);
        self::assertEquals('15042471997', $valueMale);

        $valueFemale = $this->extension->rrn(PersonExtension::GENDER_FEMALE);
        self::assertEquals('08112999261', $valueFemale);
    }
}
