<?php

namespace Faker\Dutch\BE;

use Faker\Extension\AddressExtension;
use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;

final class Address implements AddressExtension, GeneratorAwareExtension
{
    use GeneratorAwareExtensionTrait;

    /** @var array|string[]  */
    private $buildingNumbers = ['%', '%#', '%##', '%###', '%-?', '%#-?', '%?', '%#?', '%-#', '%#-##'];

    /** @var array|string[]  */
    private array $postcodes = [
        '2970', '3700', '7510', '9420', '8511', '3800', '9300', '9880', '3200', '8700', '8211', '2630', '4557',
        '4280', '3930', '5590', '5362', '4219', '6280', '9991', '8660', '1790', '9051', '5544', '4317', '5310',
        '6250', '5070', '3570', '5550', '4432', '1652', '8690', '4540', '6680', '6953', '4770', '6997', '7750',
        '5300', '1070', '6150', '4821', '4031', '7387', '5537', '6721', '6890', '4430', '5500', '5520', '4520',
        '4160', '7640', '2000', '2018', '2020', '2030', '2040', '2050', '2060', '2099', '7910', '8570', '9200',
        '9400', '5170', '7811', '4990', '1390', '8850', '2370', '4601', '6700', '7181', '5060', '6870', '3665',
        '9404', '9890', '7040', '1730', '8310', '1007', '9960', '6860', '3460', '5330', '9800', '7800', '6791',
        '3404', '3384', '6717', '7941', '6790', '7972', '4880', '5660', '6880', '7382', '6706', '1367', '5580',
        '8630', '8580', '4260', '3271', '4340', '4400', '6900', '4630', '4920', '3128', '9310', '2387', '4837',
        '6464', '6460', '5555', '7730', '5377', '7380', '1470', '5190', '9860', '2490', '6951', '6500', '4671',
        '5570', '7534', '5370', '6940', '7971', '4983', '4690', '9968', '7830', '6600', '3870', '4651', '7130',
        '7331', '7870', '7604', '1401', '9520', '8531', '9150', '4052', '6980', '1320', '6594', '7532', '3960',
    ];

    /** @var array|string[]  */
    private array $streetAddressFormats = [
        '{{Faker\Dutch\BE\Address->streetName}} {{Faker\Dutch\BE\Address->buildingNumber}}',
    ];

    /** @var array|string[]  */
    private array $streetNameFormats = ['{{Faker\Dutch\BE\Person->lastName}}{{Faker\Dutch\BE\Address->streetSuffix}}'];

    /** @var array|string[]  */
    private array $cityFormats = ['{{Faker\Dutch\BE\Address->cityName}}'];

    /** @var array|string[]  */
    private array $addressFormats = [
        "{{Faker\Dutch\BE\Address->streetAddress}}\n{{Faker\Dutch\BE\Address->postcode}} {{Faker\Dutch\BE\Address->city}}",
    ];

    /** @var array|string[]  */
    private array $streetSuffixes = [
        'baan', 'boulevard', 'dreef', 'hof', 'laan', 'pad', 'ring', 'singel', 'steeg', 'straat', 'weg',
    ];

    /**
     * Export of BAG (http://bag.vrom.nl/)
     * last updated 2012/11/09
     *
     * @var array|string[]
     */
    private array $cityNames = [
        'Aalst', 'Aarlen', 'Aarschot', 'Aat', 'Andenne', 'Antoing', 'Antwerpen', 'Bastenaken', 'Beringen',
        'Beaumont', 'Beauraing', 'Bergen', 'Bilzen', 'Binche', 'Blankenberge', 'Borgloon', 'Borgworm', 'Bouillon',
        'Bree', 'Brugge', 'Brussel', 'Charleroi', 'Châtelet', 'Chièvres', 'Chimay', 'Chiny', 'Ciney', 'Couvin',
        'Damme', 'Deinze', 'Dendermonde', 'Diest', 'Diksmuide', 'Dilsen-Stokkem', 'Dinant', 'Doornik', 'Durbuy',
        'Edingen', 'Eeklo', 'Eupen', 'Fleurus', 'Florenville', 'Fontaine-l\'Evêque', 'Fosses-la-Ville', 'Geel',
        'Geldenaken', 'Gembloers', 'Genepiën', 'Genk', 'Gent', 'Geraardsbergen', 'Gistel', '\'s-Gravenbrakel',
        'Halen', 'Halle', 'Hamont-Achel', 'Hannuit', 'Harelbeke', 'Hasselt', 'Herentals', 'Herk-de-Stad', 'Herstal',
        'Herve', 'Hoei', 'Hoogstraten', 'Houffalize', 'Ieper', 'Izegem', 'Komen-Waasten', 'Kortrijk', 'La Louvière',
        'La Roche-en-Ardenne', 'Landen', 'Le Rœulx', 'Lessen', 'Leuze-en-Hainaut', 'Leuven', 'Lier', 'Limburg',
        'Lo-Reninge', 'Lokeren', 'Lommel', 'Luik', 'Maaseik', 'Malmedy', 'Marche-en-Famenne', 'Mechelen', 'Menen',
        'Mesen', 'Moeskroen', 'Mortsel', 'Namen', 'Neufchâteau', 'Nieuwpoort', 'Nijvel', 'Ninove', 'Oostende',
        'Ottignies', 'Oudenaarde', 'Oudenburg', 'Peer', 'Péruwelz', 'Philippeville', 'Poperinge', 'Rochefort',
        'Roeselare', 'Ronse', 'Saint-Ghislain', 'Saint-Hubert', 'Sankt Vith', 'Scherpenheuvel-Zichem', 'Seraing',
        'Sint-Niklaas', 'Sint-Truiden', 'Spa', 'Stavelot', 'Thuin', 'Tielt', 'Tienen', 'Tongeren', 'Torhout',
        'Turnhout', 'Verviers', 'Veurne', 'Vilvoorde', 'Virton', 'Walcourt', 'Waregem', 'Waver', 'Wervik', 'Wezet',
        'Zinnik', 'Zottegem', 'Zoutleeuw',
    ];

    /** @var array|string[]  */
    private array $states = [
        'Antwerpen', 'Limburg', 'Oost-Vlaanderen', 'Vlaams-Brabant', 'West-Vlaanderen',
        'Henegouwen', 'Luik', 'Luxemburg', 'Namen', 'Waals-Brabant',
    ];

    public function streetSuffix(): string
    {
        return Helper::randomElement($this->streetSuffixes);
    }

    public function buildingNumber(): string
    {
        return strtoupper(Helper::bothify($this->buildingNumbers[array_rand($this->buildingNumbers)]));
    }

    public function state(): string
    {
        return Helper::randomElement($this->states);
    }

    public function city(): string
    {
        return Helper::randomElement($this->cityNames);
    }

    public function postcode(): string
    {
        return Helper::randomElement($this->postcodes);
    }

    public function address(): string
    {
        $format = Helper::randomElement($this->addressFormats);

        return $this->generator->parse($format);
    }

    public function streetName(): string
    {
        $format = Helper::randomElement($this->streetNameFormats);

        return $this->generator->parse($format);
    }

    public function streetAddress(): string
    {
        $format = Helper::randomElement($this->streetAddressFormats);

        return $this->generator->parse($format);
    }
}
