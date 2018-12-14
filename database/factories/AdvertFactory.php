<?php

use Faker\Generator as Faker;

$factory->define(App\Advert::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'extract' => $faker->sentence(5),
        'body' => $faker->text,
        'slug' => $faker->slug(2,'-'),

        'category_id' => $faker->numberBetween(1, 5)
    ];
});
