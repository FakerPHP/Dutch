<?php

namespace Faker\Dutch\NL;

use Faker\Extension\Helper;
use Faker\Extension\PhoneNumberExtension;

class PhoneNumber implements PhoneNumberExtension
{
    /**
     * @var string[]
     */
    protected array $formats = [
        '06 ########',
        '06-########',
        '+316-########',
        '+316 ########',
        '01# #######',
        '+311# #######',
        '02# #######',
        '+312# #######',
        '03# #######',
        '+313# #######',
        '04# #######',
        '+314# #######',
        '05# #######',
        '+315# #######',
        '07# #######',
        '+317# #######',
        '0800 ######',
        '+31800 ######',
        '088 #######',
        '+3188 #######',
        '0900 ######',
        '+31900 ######',
    ];

    protected string $e164Format = '+31#########';

    public function phoneNumber(): string
    {
        return Helper::numerify(Helper::randomElement($this->formats));
    }

    public function e164PhoneNumber(): string
    {
        return Helper::numerify($this->e164Format);
    }
}
