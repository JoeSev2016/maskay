<?php

use Faker\Generator as Faker;

$factory->define(App\District::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement([
          'CHORRILLOS',
          'MIRAFLORES',
          'BARRANCO',
          'COMAS',
          'CARABAYLLO',
          'SANTIAGO DE SURCO',
          'LINCE',
          'SAN JUAN DE MIRAFLORES',
          'VILLA EL SALVADOR']),
        'province_id' => $faker->numberBetween(1,3)
    ];
});
