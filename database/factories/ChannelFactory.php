<?php

use Faker\Generator as Faker;
use App\Channel;

$factory->define(Channel::class, function (Faker $faker) {
    return [
        'title'  => $faker->name
    ];
});
