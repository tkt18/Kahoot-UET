<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlayerRoom;
use Faker\Generator as Faker;

$factory->define(PlayerRoom::class, function (Faker $faker) {
    return [
        'player_id' => rand(1, 10000),
        'room_id' => rand(1, 100),
        'score_total' => rand(1000, 100000)
    ];
});
