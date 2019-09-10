<?php

use Aurawindsurfing\Messenger\Tests\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->userName,
    ];
});
