<?php

use Aurawindsurfing\Messenger\Thread;

$factory->define(Thread::class, function (Faker\Generator $faker) {
    return [
        'to_user_id'   => 1,
        'from_user_id' => 2,
    ];
});
