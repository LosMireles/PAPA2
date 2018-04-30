@extends('layouts.app')

@section('title', 'cubiculo')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Cubiculo</h1>
	<ul>
		<li> <a href="/insertarCubiculo">Insertar</a> </li>
		<li> <a href="/editarCubiculo">Editar</a> </li>
		<li> <a href="/verCubiculo">Ver</a> </li>
		<li> <a href="/borrarCubiculo">Borrar</a> </li>
	</ul>
@endsection
