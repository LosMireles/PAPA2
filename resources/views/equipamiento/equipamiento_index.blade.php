@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Equipamiento</h1>
	<ul>
		<li> <a href="#">Software</a> </li>
		<li> <a href="#">Equipos</a> </li>
	</ul>
@endsection