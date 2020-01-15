<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
          'AMAZONAS',//1
          'ANCASH',//2
          'APURIMAC',//3
          'AREQUIPA',//4
          'AYACUCHO',//5
          'CAJAMARCA',//6
          'CALLAO',//7
          'CUSCO',//8
          'HUANCAVELICA',//9
          'HUANUCO',//10
          'ICA',//11
          'JUNIN',//12
          'LA LIBERTAD',//13
          'LAMBAYEQUE',//14
          'LIMA',//15
          'LORETO',//16
          'MADRE DE DIOS',//17
          'MOQUEGUA',//18
          'PASCO',//19
          'PIURA',//20
          'PUNO',//21
          'SAN MARTIN',//22
          'TACNA',//23
          'TUMBES',//24
          'UCAYALI'])//25
    ];
});
