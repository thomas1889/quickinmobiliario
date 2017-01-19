<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(QuickInmobiliario\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
      'first_name' => $faker->firstName(),
      'last_name' => $faker->lastName,
      'business_name' => $faker->company,
      'cell_phone' => $faker->e164PhoneNumber,
      'address' => $faker->address,
      'document_type' => $faker->randomNumber(),
      'age' => $faker->randomDigit,
      'gender' => $faker->randomElement($array = array('Hombre', 'Mujer')),
      'username' => $faker->word,
      'profession' => $faker->jobTitle,
      'city' => $faker->city,
      'user_type_id' => $faker->randomElement($array = array(1, 2, 3)),
      'email' => $faker->unique()->safeEmail,
      'password' => $password ? : $password = bcrypt('secret'),
      'image_perfil' => $faker->randomElement($array = array('quick.png')),
      'newsletter' => $faker->randomElement($array = array('Si', 'No')),
      'remember_token' => str_random(10),
    ];
});

$factory->define(QuickInmobiliario\Property::class, function (Faker\Generator $faker) {
    return [
      'name' => $faker->realText(75, 1), //$faker->sentence(6, true),
      'state' => $faker->randomElement(array(1, 2, 3)),
      'phone' => $faker->e164PhoneNumber,
      'address' => $faker->address,
      'description' => $faker->text(200),
      'antiquity' => $faker->randomElement(array('1 año', '5 años', '10 años', '15 años')),
      'property_code' => $faker->buildingNumber,
      'zone' => $faker->randomElement(array('North', 'South', 'West')),
      'city' => $faker->city,
      'neighborhood' => $faker->streetName,
      'built_area' => $faker->numberBetween(50, 1500),
      'full_area' => $faker->numberBetween(50, 1500),
      'rooms' => $faker->randomDigitNotNull,
      'stratum' => $faker->randomElement(array(1, 2, 3, 4, 5, 6)),
      'floors' => $faker->randomDigitNotNull,
      'parkings' => $faker->randomDigitNotNull,
      'bathrooms' => $faker->randomDigitNotNull,
      'price' => $faker->numberBetween(50000000, 1000000000),
      'project_id' => $faker->randomElement([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
      'property_type_id' => $faker->randomElement([1, 2, 3, 4]),
      'use_type_id' => $faker->randomElement([1, 2]),
      'business_type_id' => $faker->randomElement([1, 2, 3, 4]),
      'video360' => '-xNN-bJQ4vI',
      'user_id' => 4,
      'coordinates' => DB::raw("GeomFromText('POINT(18 -64)')"),
    ];
});

$factory->define(QuickInmobiliario\Commission::class, function (Faker\Generator $faker) {
    return [
      'price' => $faker->numberBetween(500000, 90000000),
      'state' => $faker->randomDigitNotNull,
      'user_id' => 0,
    ];
});

$factory->define(QuickInmobiliario\Project::class, function (Faker\Generator $faker) {
    return [

      'name' => $faker->catchPhrase,
      'address' => $faker->address,
      'phone' => $faker->e164PhoneNumber,
      'description' => $faker->text(400),
      'unit_quantity' => $faker->numberBetween(1, 9999),
      'left_units' => $faker->numberBetween(1, 9999),
      'project_code' => $faker->isbn10,
      'built_area' => $faker->numberBetween(50, 1500),
      'full_area' => $faker->numberBetween(50, 1500),
      'zone' => $faker->randomElement(array('North', 'South', 'West', 'Center')),
      'city' => $faker->city,
      'neighborhood' => $faker->streetName,
      'property_type_id' => $faker->numberBetween(1, 5),
      'use_type_id' => $faker->randomElement([1, 2]),
      'business_type_id' => $faker->randomElement([1, 2, 3, 4]),
      'video360' => '-xNN-bJQ4vI',
      'user_id' => 4,
      'coordinates' => DB::raw("GeomFromText('POINT(18 -64)')"),
    ];
});

$factory->define(QuickInmobiliario\PropertyImage::class, function (Faker\Generator $faker) {
    return [
      'path' => $faker->imageUrl(800, 400, 'city', true, 'Faker'),
    ];
});

$factory->define(QuickInmobiliario\Punctuation::class, function (Faker\Generator $faker) {
    return [
      'punctuation' => $faker->randomElement([1, 2, 3, 4, 5]),
      'user_id' => $faker->numberBetween(1, 10),
      'comment' => $faker->randomElement(array('Bueno', 'Malo', 'Hay se va', 'Medio')),
      'user_comment_id' => $faker->numberBetween(1, 10),
    ];
});
$factory->define(QuickInmobiliario\ProjectImage::class, function (Faker\Generator $faker) {
    return [
      'path' => $faker->imageUrl(800, 400, 'business', true, 'Faker'),
      'extension' => $faker->randomElement(array('jpg', 'png', 'gif', 'jpeg')),
    ];
});
