@extends('layouts.menus')

@section('title')
	Asignaturas
@endsection

@section('descipcion')
	<a href="{{ url('/') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Asignaturas</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="{{ url('/asignaturas/agregar_asignatura') }}">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/asignaturas/actualizar_asignatura') }}">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/asignaturas/ver_asignaturas') }}">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/asignaturas/eliminar_asignatura') }}">Borrar</a>
		</td>
	</tr>
@endsection
