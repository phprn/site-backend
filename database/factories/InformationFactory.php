<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Information;
use Faker\Generator as Faker;

$factory->define(Information::class, function (Faker $faker) {
    return [
        'title' => $faker->text(200),
        'content' => $faker->text(2000),
        'active' => $faker->boolean(85)
    ];
});
