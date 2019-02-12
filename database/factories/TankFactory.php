<?php

use Faker\Generator as Faker;

$factory->define(App\Tank::class, function (Faker $faker) {
    $name = ucfirst($faker->words(rand(1,5), true));
    return [
        'name'            => $name,
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
