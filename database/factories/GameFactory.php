<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    $status = array('pregame', 'adjudicating', 'orders', 'finished');
    return [
        //
        'start_mode' => 'sufficient_players',
        'start_datetime' => $faker->dateTime(),
        'title' => $faker->streetName(),
        'eog' => $faker->randomDigitNotNull(),
        'variant_id' => $faker->randomDigitNotNull(),
        'status' => $status[$faker->numberBetween(0,2)]
    ];
});
