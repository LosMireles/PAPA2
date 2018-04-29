@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
	<h1>PROTOTIPO PAPA</h1>
	<h3>Descripción: Esta es la descripción para el proyecto de ingeniería</h3>
	<a href="{{ url('/infraestructura') }}">9.1 Infraestructura</a>
	<br>
	<a href="{{ url('/equipamiento') }}">9.2 Equipamiento</a>
@endsection

