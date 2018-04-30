@extends('layouts.app')

@section('title', 'Aula')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Aula</h1>
	<ul>
		<li> <a href="/insertarAula">Insertar</a> </li>
		<li> <a href="/editarAula">Editar</a> </li>
		<li> <a href="/verAula">Ver</a> </li>
		<li> <a href="/borrarAula">Borrar</a> </li>
	</ul>
@endsection
