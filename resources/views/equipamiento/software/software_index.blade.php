@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Software</h1>
	<ul>
		<li> <a href="/insertarSoftware">Insertar</a> </li>
		<li> <a href="/editarSoftware">Editar</a> </li>
		<li> <a href="/verSoftware">Ver</a> </li>
		<li> <a href="/borrarSoftware">Borrar</a> </li>
	</ul>
@endsection
