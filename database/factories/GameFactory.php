<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        //
        'start_mode' => 'after_pregame',
        'start_datetime' => $faker->dateTime(),
        'eog' => $faker->randomDigitNotNull(),
        'variant_id' => $faker->randomDigitNotNull(),
        'status' => 'pregame',
    ];
});
