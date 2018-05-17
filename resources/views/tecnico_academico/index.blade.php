@extends('layouts.menus')

@section('title')
	Técnicos académicos
@endsection

@section('descipcion')
	<a href="{{ url('/') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Técnicos académicos</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="{{ url('/tecnico_academico/insertar') }}">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/tecnico_academico/editar') }}">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/tecnico_academico/ver') }}">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/tecnico_academico/borrar') }}">Borrar</a>
		</td>
	</tr>
@endsection
