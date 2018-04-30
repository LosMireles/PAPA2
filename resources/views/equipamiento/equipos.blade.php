@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="{{ url('/') }}">Home</a>
	<br>
	
	<h1>Equipos</h1>
	<ul>
		<li><a href="{{ url('/equipamiento/equipos/agregar_equipo') }}">Insertar</a></li>
		<li><a href="{{ url('/equipamiento/equipos/actualizar_equipos') }}">Editar</a></li>
		<li><a href="{{ url('/equipamiento/equipos/ver_equipos') }}">Ver</a></li>
		<li><a href="{{ url('/equipamiento/equipos/eliminar_equipos') }}">Borrar</a></li>
	</ul>
@endsection
