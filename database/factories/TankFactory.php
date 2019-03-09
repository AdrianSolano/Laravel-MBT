<?php

use App\Tank;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Tank::class, function (Faker $faker) {
    $name = ucfirst($faker->words(rand(1,5), true));
=======
$factory->define(App\Tank::class, function (Faker $faker) {
    $name = ucfirst($faker->words(rand(1,3), true));
>>>>>>> aa4b6759c1274b1c19b7a01d5b82662e196366e7
    return [
        'name'            => $name,
        'user_id'         => random_int(1,2),
        'event_id'        => random_int(1,5),
        'slug'            => str_slug($name, "-"),
        'nation'          => $faker->countryCode(),
        'crew'            => $faker->numberBetween($min = 2, $max = 6),
        'hp'              => $faker->numberBetween($min = 50, $max = 1500),
        'ammo'            => $faker->numberBetween($min= 5, $max = 100),
        'type'            => $faker->text(7),
        'mainweapon'      => $faker->text(6),
        'secondaryweapon' => $faker->text(8),
        'description'     => $faker->text(100)
    ];
});
