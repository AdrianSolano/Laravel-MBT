<?php

use App\Ammo;
use Faker\Generator as Faker;


$factory->define(Ammo::class, function (Faker $faker) {
    $name = $faker->words(rand(1,4), true);
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'typeshells' => $faker->words(rand(1,3), true)
    ];
});
