<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rooms;
use Faker\Generator as Faker;

$factory->define(Rooms::class, function (Faker $faker) {
    $minValPin = 10000;
    $maxValPin = 9999999999;
    return [
        'PIN' => rand($minValPin, $maxValPin),
        'creator_id' => rand(1, 100),
        'is_lock' => rand(0, 1),
        'is_finish' => rand(0, 1)
    ];
});
