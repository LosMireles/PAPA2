<?php

use Faker\Generator as Faker;

$factory->define(App\Asignatura::class, function (Faker $faker) {
    return [
        'nombre'      => $faker                    -> unique()  -> word(12),
        'descripcion' => $faker                    -> word(12),

        'curso_id'     => factory(App\Curso::class) -> create()  -> id,
    ];
});

