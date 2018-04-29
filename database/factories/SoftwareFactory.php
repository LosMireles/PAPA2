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

$factory->define(App\Software::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(12),
        'manualUsuario' => $faker->numberBetween(0,1),
        'licencia' => $faker->word(8),
        'disponibilidad' => $faker->word(9),
        'clase' => $faker->word(9),
        'serial' => factory(App\Equipo::class)->create()->serial,
    ];
});
