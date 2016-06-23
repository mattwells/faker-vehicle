<?php

namespace MattWells\Faker\Vehicle;

use Faker\Provider\Base;
use Faker\Provider\DateTime;

class Provider extends Base
{
    protected static $makesWithModels = [
        'Ford'     => ['Focus', 'Fiesta', 'Mondeo', 'KA'],
        'Vauxhall' => ['Corsa', 'Astra', 'Zafira', 'Vectra'],
        'VW'       => ['Golf', 'Polo', 'Passat', 'Up', 'Tiguan'],
        'BMW'      => ['3 Series', '1 Series', '5 Series', 'X5', 'X3'],
        'Renault'  => ['Clio', 'Megane', 'Scenic', 'Kangoo', 'Laguna'],
        'Peugeot'  => ['206', '207', '307', '107', '308'],
        'Toyota'   => ['Yaris', 'Corolla', 'Avensis', 'Aygo'],
        'Nissan'   => ['Micra', 'Qashqai', 'Note', 'Juke', 'Leaf'],
        'Honda'    => ['Civic', 'Jazz', 'CRV', 'Accord', 'NSX'],
        'Mercedes' => ['C Class', 'E Class', 'A Class', 'SLK', 'CLK'],
        'Audi'     => ['A3', 'A4', 'A6', 'TT', 'A1'],
        'Mini'     => ['Cooper', 'One', 'Countryman', 'First', 'Roadster'],
        'Fiat'     => ['Punto', '500', 'Panda', 'Stilo', 'Barvo'],
        'Citroen'  => ['Xsara', 'C3', 'C4', 'C1', 'Saxo'],
    ];

    protected static $registrationLocal = [
        // Anglia
        'A' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Birmingham
        'B' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y',
        ],
        // Cymru (Wales)
        'C' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Deeside
        'D' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y'
        ],
        // Essex
        'E' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y',
        ],
        // Forest and Fens
        'F' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'P', 'R', 'S', 'T', 'V', 'W', 'X',
            'Y',
        ],
        // Garden of England
        'G' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Hampshire and Dorset
        'H' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'X', 'Y', 'W',
        ],
        // Borehamwood and Northampton
        'K' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // London
        'L' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Manchester and Merseyside
        'M' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
            'V', 'W', 'X', 'Y',
        ],
        // North
        'N' => [
            'A', 'B', 'C', 'D', 'E', 'G', 'H', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W',
            'X', 'Y',
        ],
        // Oxford
        'O' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y',
        ],
        // Preston
        'P' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Reading
        'R' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y',
        ],
        // Scotland
        'S' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Severn Valley
        'V' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y',
        ],
        // West of England
        'W' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
        // Personal export
        'X' => [
            'A', 'B', 'C', 'D', 'E', 'F',
        ],
        // Yorkshire
        'Y' => [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y',
        ],
    ];

    protected static $sequence = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y', 'Z',
    ];

    public static function vehicleMake()
    {
        return static::randomElement(array_keys(static::$makesWithModels));
    }

    public static function vehicleModel($make = null)
    {
        return static::randomElement(static::$makesWithModels[$make ?: static::vehicleMake()]);
    }

    public static function vehicleRegistrationLocal()
    {
        $local = static::randomElement(array_keys(static::$registrationLocal));
        return $local . static::randomElement(static::$registrationLocal[$local]);
    }

    public static function vehicleRegistrationAgeId()
    {
        $date = DateTime::dateTimeBetween('1 September 2001');
        $age = $date->format('y');
        $month = $date->format('n');
        if ($month < 3 && $month >= 9) {
            $age = $age + 50;
        }

        return $age;
    }

    public static function vehicleRegistrationSequence()
    {
        return implode(static::randomElements(static::$sequence, 3));
    }

    public static function vehicleRegistration()
    {
        $local = static::vehicleRegistrationLocal();
        $age = static::vehicleRegistrationAgeId();
        $sequence = static::vehicleRegistrationSequence();

        return "{$local}{$age} {$sequence}";
    }
}
