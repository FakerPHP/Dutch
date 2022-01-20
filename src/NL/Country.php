<?php

namespace Faker\Dutch\NL;

use Faker\Extension\CountryExtension;
use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;

final class Country implements CountryExtension, GeneratorAwareExtension
{
    use GeneratorAwareExtensionTrait;

    /** @var string[] */
    private array $countryNames = [
        'Afghanistan', 'Albanië', 'Algerije', 'Amerikaans-Samoa', 'Andorra', 'Angola', 'Amerikaanse Virgineilanden', 'Anguilla', 'Antartica', 'Antigua en Barbuda', 'Argentinië', 'Armenië', 'Aruba', 'Australië', 'Azerbeidzjan',
        'Bahamas', 'Bahrein', 'Bangladesh', 'Barbados', 'België', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnië-Herzegovina', 'Botswana', 'Bouvet Eiland (Bouvetøya)', 'Brazilië', 'Britse Maagdeneilanden', 'Brunei Darussalam', 'Bulgarije', 'Burkina Faso', 'Burundi',
        'Cambodja', 'Canada', 'Centraal-Afrikaanse Republiek', 'Chili', 'China', 'Christmaseiland', 'Cocoseilanden', 'Colombia', 'Comoren', 'Congo', 'Cookeilanden', 'Costa Rica', 'Cuba', 'Cyprus',
        'Denemarken', 'Djibouti', 'Dominica', 'Dominicaanse Republiek', 'Duitsland',
        'Ecuador', 'Egypte', 'El salvador', 'Equatoriaal-Guinea', 'Eritrea', 'Estland', 'Ethiopië',
        'Faroe Eilanden', 'Falklandeilanden', 'Fiji', 'Finland', 'Frankrijk', 'Frans-Guyana', 'Frans-Polynesië', 'Franse Zuidelijke en Antarctische Gebieden',
        'Gabon', 'Gambia', 'Georgië', 'Ghana', 'Gibraltar', 'Griekenland', 'Groenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinee', 'Guinee-Bissau', 'Guyana',
        'Haïti', 'Heard en McDonaldeilanden', 'Honduras', 'Hong Kong', 'Hongarije',
        'IJsland', 'India', 'Indonesië', 'Iran', 'Irak', 'Ierland', 'Man', 'Israel', 'Ivoorkust', 'Italië',
        'Jamaica', 'Japan', 'Jersey', 'Jordanië', 'Jemen',
        'Kazachstan', 'Kenia', 'Kleinere afgelegen eilanden van de Verenigde Staten', 'Kiribati', 'Korea', 'Koeweit', 'Kirgizië', 'Kameroen', 'Kaapverdië', 'Kaaimaneilanden', 'Kroatië',
        'Laos', 'Letland', 'Libanon', 'Lesotho', 'Liberia', 'Libië', 'Liechtenstein', 'Litouwen', 'Luxemburg',
        'Macau', 'Macedonië', 'Madagascar', 'Malawi', 'Maleisië', 'Maldiven', 'Mali', 'Malta', 'Marshalleilanden', 'Martinique', 'Mauritus', 'Mauritania', 'Mayotte', 'Mexico', 'Micronesië', 'Moldavië', 'Monaco', 'Mongolië', 'Montenegro', 'Monsterrat', 'Marokko', 'Mozambique', 'Myanmar',
        'Namibië', 'Nauru', 'Nepal', 'Nederlandse Antillen', 'Nederland', 'Nieuw-Caledonië', 'Nieuw-Zeeland', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk', 'Noordelijke Marianen', 'Noorwegen',
        'Oman', 'Oostenrijk', 'Oeganda', 'Oekraïne', 'Oezbakistan',
        'Pakistan', 'Palau', 'Palestina', 'Panama', 'Papoea-Nieuw-Guinea', 'Paraguay', 'Peru', 'Filipijnen', 'Pitcairneilanden', 'Polen', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Réunion', 'Romania', 'Rusland', 'Rwanda',
        'Sint-Bartholomeus', 'Sint-Helena', 'Saint Kitts en Nevis', 'Saint Lucia', 'Sint Maarten', 'Saint-Pierre en Miquelon', 'Saint Vincent en de Grenadines', 'Samoa', 'San Marino', 'Sao Tomé en Principe', 'Saoedi-Arabië', 'Senegal', 'Servië', 'Seychellen', 'Sierra Leone', 'Singapore', 'Slovenië', 'Salomonseilanden', 'Somalië', 'Spanje', 'Sri Lanka', 'Soedan', 'Suriname', 'Spitsbergen en Jan Mayen', 'Swaziland', 'Zweden', 'Zwitserland', 'Syrië',
        'Taiwan', 'Tadzjikistan', 'Tanzania', 'Thailand', 'Tsjaad', 'Timor-Leste', 'Togo', 'Tokelau-eilanden', 'Tonga', 'Trinidad en Trobago', 'Tunesië', 'Turkije', 'Turkmenistan', 'Turks- en Caicoseilanden', 'Tuvalu', 'Tsjechische Republiek',
        'Uruguay',
        'Vanuatu', 'Venezuela', 'Verenigde Arabische Emiraten', 'Verenigd Koninkrijk', 'Verenigde Staten van Amerika', 'Vaticaanstad', 'Vietnam',
        'Wallis en Futuna', 'Westerlijke Shara', 'Wit-Rusland',
        'Zambia', 'Zuid-Afrika', 'Zuid-Georgia en de Zuidelijke Sandwicheilanden', 'Zimbabwe',
    ];

    public function country(): string
    {
        return Helper::randomElement($this->countryNames);
    }
}
