<?php

namespace Faker\Dutch\BE;

use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;
use Faker\Extension\PhoneNumberExtension;

final class PhoneNumber implements PhoneNumberExtension, GeneratorAwareExtension
{
    use GeneratorAwareExtensionTrait;

    /**
     * @var array|string[]
     */
    private array $formats = [
        '+32(0)########',
        '+32(0)### ######',
        '+32(0)# #######',
        '0#########',
        '0### ######',
        '0### ### ###',
        '0### ## ## ##',
        '0## ######',
        '0## ## ## ##',
        '0# #######',
        '0# ### ## ##',
    ];

    private string $e164Format = '+32#########';

    public function phoneNumber(): string
    {
        return Helper::numerify(
            $this->generator->parse(Helper::randomElement($this->formats))
        );
    }

    public function e164PhoneNumber(): string
    {
        return Helper::numerify($this->e164Format);
    }
}
