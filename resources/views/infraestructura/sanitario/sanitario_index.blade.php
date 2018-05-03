@extends('layouts.app')

@section('title', 'Sanitario')

@section('content')
	<a href="/infraestructura/">Regresar</a>
	<h1>Sanitario</h1>
	<ul>
		<li> <a href="/insertarSanitarios">Insertar</a> </li>
		<li> <a href="/editarSanitario">Editar</a> </li>
		<li> <a href="/verSanitario">Ver</a> </li>
		<li> <a href="/borrarSanitario">Borrar</a> </li>
	</ul>
@endsection
