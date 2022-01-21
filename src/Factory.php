<?php

declare(strict_types=1);

namespace Faker\Dutch;

use Faker\Dutch\NL;
use Faker\Dutch\BE;
use Faker\Extension;
use Faker\Extension\ContainerBuilder;
use Faker\Generator;

class Factory
{
    public static function netherlands(): Generator
    {
        $builder = self::getBuilder();

        // Add specific extensions for The Netherlands to replace some default ones
        $builder->add(NL\Address::class, Extension\AddressExtension::class);
        $builder->add(NL\Company::class, Extension\CompanyExtension::class);
        $builder->add(NL\Country::class, Extension\CountryExtension::class);
        $builder->add(NL\Person::class, Extension\PersonExtension::class);
        $builder->add(NL\PhoneNumber::class, Extension\PhoneNumberExtension::class);

        $builder->add(NL\Address::class);
        $builder->add(NL\Company::class);
        $builder->add(NL\Country::class);
        $builder->add(NL\Person::class);
        $builder->add(NL\PhoneNumber::class);

        return new Generator($builder->build());
    }

    public static function belgium(): Generator
    {
        $builder = self::getBuilder();

        // Add specific extensions for Belgium to replace some default ones
        $builder->add(BE\Address::class, Extension\AddressExtension::class);
        $builder->add(BE\Company::class, Extension\CompanyExtension::class);
        $builder->add(BE\Country::class, Extension\CountryExtension::class);
        $builder->add(BE\Person::class, Extension\PersonExtension::class);
        $builder->add(BE\PhoneNumber::class, Extension\PhoneNumberExtension::class);

        $builder->add(BE\Address::class);
        $builder->add(BE\Company::class);
        $builder->add(BE\Country::class);
        $builder->add(BE\Person::class);
        $builder->add(BE\PhoneNumber::class);

        return new Generator($builder->build());
    }

    private static function getBuilder(): ContainerBuilder
    {
        $builder = new ContainerBuilder();

        foreach (ContainerBuilder::defaultExtensions() as $id => $definition) {
            $builder->add($definition, $id);
        }

        return $builder;
    }
}
