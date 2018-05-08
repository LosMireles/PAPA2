<?php

use Faker\Generator as Faker;

$factory->define(App\Asignatura::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(12),
        'descripcion' => $faker->word(12),
    ];
});
