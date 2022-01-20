<?php

namespace Faker\Test\Dutch\BE;

use Faker\Dutch\BE\Person;
use Faker\Dutch\Factory;
use Faker\Extension\PersonExtension;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Person $extension;

    public function setUp(): void
    {
        $faker = Factory::belgium();
        $faker->seed(1);
        $this->extension = $faker->ext(PersonExtension::class);
        parent::setUp();
    }

    public function testName(): void
    {
        $value = $this->extension->name();
        $this->assertEquals('Kaat Borremans', $value);

        $valueMale = $this->extension->name(PersonExtension::GENDER_MALE);
        $this->assertEquals('Yanis Coppens', $valueMale);

        $valueFemale = $this->extension->name(PersonExtension::GENDER_FEMALE);
        $this->assertEquals('Ella Rousseau', $valueFemale);
    }

    public function testFirstName(): void
    {
        $value = $this->extension->firstName();
        $this->assertEquals('Kaat', $value);

        $valueMale = $this->extension->firstName(PersonExtension::GENDER_MALE);
        $this->assertEquals('Jonas', $valueMale);

        $valueFemale = $this->extension->firstName(PersonExtension::GENDER_FEMALE);
        $this->assertEquals('Margaux', $valueFemale);
    }

    public function testFirstNameMale(): void
    {
        $valueMale = $this->extension->firstName(PersonExtension::GENDER_MALE);
        $this->assertEquals('Guillaume', $valueMale);
    }

    public function testFirstNameFemale(): void
    {
        $valueMale = $this->extension->firstName(PersonExtension::GENDER_FEMALE);
        $this->assertEquals('Julie', $valueMale);
    }

    public function testLastName(): void
    {
        $value = $this->extension->lastName();
        $this->assertEquals('Georges', $value);
    }

    public function testTitle(): void
    {
        $value = $this->extension->title();
        $this->assertEquals('Miss', $value);

        $valueMale = $this->extension->title(PersonExtension::GENDER_MALE);
        $this->assertEquals('Mr.', $valueMale);

        $valueFemale = $this->extension->title(PersonExtension::GENDER_FEMALE);
        $this->assertEquals('Dr.', $valueFemale);
    }

    public function testTitleMale(): void
    {
        $valueMale = $this->extension->titleMale(PersonExtension::GENDER_MALE);
        $this->assertEquals('Mr.', $valueMale);
    }

    public function testTitleFemale(): void
    {
        $valueMale = $this->extension->titleFemale(PersonExtension::GENDER_FEMALE);
        $this->assertEquals('Mrs.', $valueMale);
    }

    public function testRrn(): void
    {
        $value = $this->extension->rrn();
        $this->assertEquals('22100657865', $value);

        $valueMale = $this->extension->rrn(PersonExtension::GENDER_MALE);
        $this->assertEquals('15042471997', $valueMale);

        $valueFemale = $this->extension->rrn(PersonExtension::GENDER_FEMALE);
        $this->assertEquals('08112999261', $valueFemale);
    }
}
