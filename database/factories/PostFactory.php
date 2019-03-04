<?php

use Faker\Generator as Faker;

$factory->define(\Orm\Post::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence(8),
        'subtitle' => $faker->sentence(16),
        'description' => $faker->paragraph(10)
    ];

});
