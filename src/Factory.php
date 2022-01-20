<?php

declare(strict_types=1);

namespace Faker\Dutch;

use Faker\Extension\ContainerBuilder;
use Faker\Generator;
use Faker\Extension;

class Factory
{
    public static function dutch(): Generator
    {
        $builder = new ContainerBuilder();

        foreach (ContainerBuilder::defaultExtensions() as $id => $definition) {
            $builder->add($definition, $id);
        }

        // Add Dutch specific extensions to replace some default ones
        $builder->add(Address::class, Extension\AddressExtension::class);
        $builder->add(Country::class, Extension\CountryExtension::class);

        $builder->add(Address::class);
        $builder->add(Country::class);

        return new Generator($builder->build());
    }
}
