<?php

use Faker\Generator as Faker;

$factory->define(App\Province::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement([
          'CHACHAPOYAS ',
          'BAGUA',
          'BONGARA',
          'CONDORCANQUI',
          'LUYA',
          'RODRIGUEZ DE MENDOZA',
          'UTCUBAMBA',
          'HUARAZ',
          'AIJA']),
        'department_id' => $faker->numberBetween(1,4)
    ];
});
