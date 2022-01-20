<?php

namespace Faker\Dutch\BE;

use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;
use Faker\Extension\PersonExtension;

class Person implements PersonExtension, GeneratorAwareExtension
{
    use GeneratorAwareExtensionTrait;

    public function name(?string $gender = null)
    {
        // TODO: Implement name() method.
    }

    public function firstName(?string $gender = null): string
    {
        // TODO: Implement firstName() method.
    }

    public function firstNameMale(): string
    {
        // TODO: Implement firstNameMale() method.
    }

    public function firstNameFemale(): string
    {
        // TODO: Implement firstNameFemale() method.
    }

    public function lastName(): string
    {
        return '@TODO';
        // TODO: Implement lastName() method.
    }

    public function title(?string $gender = null): string
    {
        // TODO: Implement title() method.
    }

    public function titleMale(): string
    {
        // TODO: Implement titleMale() method.
    }

    public function titleFemale(): string
    {
        // TODO: Implement titleFemale() method.
    }
}
