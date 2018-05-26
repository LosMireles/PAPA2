<?php

use Faker\Generator as Faker;

$factory->define(App\TecnicoAcademico::class, function (Faker $faker) {
	return [
		'nombre'			=> $faker->name(),
		'grado_academico' 	=> $faker->word(),
		'certificados'		=> $faker->word(),
		'anios_exp'			=> $faker->randomNumber(2),
		/*'nombre' 		=> $faker->name(),
		'hora_inicio'	=> $faker->time($format = 'H:i:s', $max = 'now'),
		'hora_termino'	=> $faker->time($format = 'H:i:s', $max = 'now'),
		'dia_inicio'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'dia_termino'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'curriculum' 	=> $faker->name(),
		'localizacion' 	=> factory(App\Espacio::class)->create()-> tipo,*/
	];
});
