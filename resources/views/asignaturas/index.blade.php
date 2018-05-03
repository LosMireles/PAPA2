@extends('layouts.app')

@section('title', 'asignaturas')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<br>
	
	<h1>Asignaturas</h1>
	<ul>
		<li><a href="{{ url('/asignaturas/agregar_asignatura') }}">Insertar</a></li>
		<li><a href="{{ url('/asignaturas/actualizar_asignatura') }}">Editar</a></li>
		<li><a href="{{ url('/asignaturas/ver_asignaturas') }}">Ver</a></li>
		<li><a href="{{ url('/asignaturas/eliminar_asignatura') }}">Borrar</a></li>
	</ul>
@endsection
