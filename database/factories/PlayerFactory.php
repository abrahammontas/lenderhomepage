<?php

use Faker\Generator as Faker;
use App\Team;

$factory->define(App\Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'team_id' => Team::get()->first()
    ];
});
