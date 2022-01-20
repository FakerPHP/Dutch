<?php

declare(strict_types=1);

namespace Faker\Dutch;

use Faker\Dutch\NL;
use Faker\Dutch\BE;
use Faker\Extension\ContainerBuilder;
use Faker\Generator;
use Faker\Extension;

class Factory
{
    public static function netherlands(): Generator
    {
        $builder = new ContainerBuilder();

        foreach (ContainerBuilder::defaultExtensions() as $id => $definition) {
            $builder->add($definition, $id);
        }

        // Add Dutch specific extensions to replace some default ones
        $builder->add(NL\Address::class, Extension\AddressExtension::class);
        $builder->add(NL\Country::class, Extension\CountryExtension::class);
        $builder->add(NL\Person::class, Extension\PersonExtension::class);

        $builder->add(NL\Address::class);
        $builder->add(NL\Country::class);
        $builder->add(NL\Person::class);

        return new Generator($builder->build());
    }

    public static function belgium(): Generator
    {
        $builder = new ContainerBuilder();

        foreach (ContainerBuilder::defaultExtensions() as $id => $definition) {
            $builder->add($definition, $id);
        }

        // Add Dutch specific extensions to replace some default ones
        $builder->add(BE\Address::class, Extension\AddressExtension::class);

        $builder->add(BE\Address::class);

        return new Generator($builder->build());
    }
}
