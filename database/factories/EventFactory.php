<?php

use App\Event;
use Faker\Generator as Faker;


$factory->define(Event::class, function (Faker $faker) {
    $nameEvent = $faker->words(rand(1,10), true);
    return [
        'nameEvent'      => $nameEvent,
        'slug'      => str_slug($nameEvent, "-"),
        'year'      => $faker->year(),
        'description' => $faker->text(250)
    ];
});
