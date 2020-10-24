<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reports;
use Faker\Generator as Faker;

$factory->define(Reports::class, function (Faker $faker) {
    return [
        'room_id' => rand(1, 100),
        'name' => $faker->text,
        'owner_id' => rand(1, 10),
        'game_mode' => $faker->companySuffix
    ];
});
