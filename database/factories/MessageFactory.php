<?php

use Aurawindsurfing\Messenger\Message;

$factory->define(Message::class, function (Faker\Generator $faker) {
    return [
        'thread_id' => $faker->randomElement([2, 3, 4, 5, 6, 7, 8, 9, 10]),
        'user_id'   => $faker->randomElement([1, 2]),
        'body'      => $faker->sentences($nb = 1, $asText = true),
        'read_at'   => $faker->optional()->date(),
    ];
});
