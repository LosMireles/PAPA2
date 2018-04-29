<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Equipo::class, function (Faker $faker) {
    return [
        'serial' => $faker->word(12),
        'manualUsuario' => $faker->numberBetween(0, 1),
        'operable' => $faker->numberBetween(0, 1),
        'inicioHora' => $faker->time(),
        'finHora' => $faker->time(),
        'inicioDia' => $faker->date(),
        'finDia' => $faker->date(),
    ];
});
