<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    $name = ucfirst($faker->words(rand(1,5), true));
    return [
        'name'            => $name,
        'slug'            => str_slug($name, "-"),
        'nation'          => $faker->countryCode(),
        'crew'            => $faker->randomDigit(),
        'hp'              => $faker->numberBetween($min = 50, $max = 1500),
        'ammo'            => $faker->numberBetween($min= 5, $max = 100),
        'type'            => $faker->text(3),
        'mainweapon'      => $faker->text(2),
        'secondaryweapon' => $faker->text(2),
        'description'     => $faker->text(250)
    ];
});
