<?php

use Faker\Generator as Faker;

$factory->define(App\TecnicoAcademico::class, function (Faker $faker) {
	return [
		'nombre' 		=> $faker->name(),
		'hora_inicio'	=> $faker->time($format = 'H:i:s', $max = 'now'),
		'hora_termino'	=> $faker->time($format = 'H:i:s', $max = 'now'),
		'dia_inicio'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'dia_termino'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'curriculum' 	=> $faker->name(),
		'localizacion' 	=> factory(App\Espacio::class)->create()-> tipo,
	];
});
