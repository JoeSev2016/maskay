<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
          'ELECTRICIDAD',
          'GASFITERIA',
          'PANADERIA',
          'POLLERIA',
          'CEVICHERIA',
          'GASOLINERA',
          'LAVANDERIA',
          'CARPINTERIA',
          'DECORACION'])
    ];
});
