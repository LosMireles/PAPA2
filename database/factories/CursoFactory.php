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

$factory->define(App\Curso::class, function (Faker $faker) {
    return [
        'nombre'        => $faker                      -> unique()         -> word(12),
        'periodo'       => $faker                      -> word(10),
        'grupo'         => $faker                      -> randomNumber(8),
        'noEstudiantes' => $faker                      -> randomNumber(9),
        'tipoAula'      => $faker                      -> word(9),
        'tipo'          => factory(App\Espacio::class) -> create()         -> tipo,
    ];
});
