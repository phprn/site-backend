<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'localization' => $faker->streetAddress,
        'description' => $faker->text(200),
        'data_in' => $faker->dateTimeThisMonth
    ];
});
