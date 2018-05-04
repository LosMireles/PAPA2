@extends('layouts.app')

@section('title', 'infraestructura')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Curso</h1>
	<ul>
		<li> <a href="/insertarCurso">Insertar</a> </li>
		<li> <a href="/editarCurso">Editar</a> </li>
		<li> <a href="/verCurso">Ver</a> </li>
		<li> <a href="/borrarCurso">Borrar</a> </li>
	</ul>
@endsection
