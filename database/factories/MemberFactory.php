<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'github' => 'fsenaweb',
        'linkedin' => $faker->url,
        'site' => $faker->url
    ];
});
