<?php

namespace Faker\Test\Dutch\BE;

use Faker\Dutch\BE\Company;
use Faker\Dutch\Factory;
use Faker\Extension\CompanyExtension;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    private Company $extension;

    protected function setUp(): void
    {
        $faker = Factory::belgium();
        $faker->seed(1);
        $this->extension = $faker->ext(CompanyExtension::class);
        parent::setUp();
    }

    public function testCompany(): void
    {
        $value = $this->extension->company();
        self::assertEquals('Willems', $value);
    }

    public function testCompanySuffix(): void
    {
        $value = $this->extension->companySuffix();
        self::assertEquals('VZW', $value);
    }

    public function testJobTitle(): void
    {
        $value = $this->extension->jobTitle();
        self::assertEquals('Telexist', $value);
    }
}
