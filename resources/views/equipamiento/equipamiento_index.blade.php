@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/">Regresar</a>
	<h1>Equipamiento</h1>
	<ul>
		<li> <a href="{{ url('/equipamiento/software') }}">Software</a> </li>
		<li> <a href="{{ url('/equipamiento/equipos') }}">Equipos</a> </li>
	</ul>
@endsection
