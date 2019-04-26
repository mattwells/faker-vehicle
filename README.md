# Faker Vehicle Provider

A provider for [Faker](https://github.com/fzaninotto/Faker#faker-internals-understanding-providers) to generate random vehicle makes & models as well as [UK registration plate](https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_the_United_Kingdom,_Crown_dependencies_and_overseas_territories#Current_system) and [US license plate](https://en.wikipedia.org/wiki/United_States_license_plate_designs_and_serial_formats#Current_standard-issue_passenger_plate_designs_and_serial_formats).

## Install

Install this package via composer

```
composer require mattwells/faker-vehicle
```

Finally you need to add the provider to Faker

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));
```

## Usage

```php
echo $faker->vehicleMake;         // Nissan
echo $faker->vehicleModel;        // C Class
echo $faker->vehicleModel('BMW'); // 3 Series

// UK Registration Plate
echo $faker->vehicleRegistration; // XA13 LYE

// US License Plate
echo $faker->vehicleLicensePlate; // 8BE V34
```
