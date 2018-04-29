@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<a href="#">Agregar equipo</a>
	<h1>Desplegar los equipos</h1>
	<ul>
		<li> <a href="#">Equipo1</a> </li>
		<li> <a href="#">Equipo2</a> </li>
	</ul>
@endsection
