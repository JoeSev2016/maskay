<?php

use Faker\Generator as Faker;

$factory->define(App\AdvertImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(250,250),
        'advert_id' => $faker->numberBetween(1,50)
    ];
});
