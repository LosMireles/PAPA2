@extends('layouts.menus')

@section('title')
	gestión de equipos
@endsection

@section('descipcion')
	<a href="{{ url('/equipamiento') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Gestión de equipos</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="{{ url('/equipamiento/equipos/agregar_equipo') }}">Insertar</a>		
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/equipamiento/equipos/actualizar_equipos') }}">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/equipamiento/equipos/ver_equipos') }}">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/equipamiento/equipos/eliminar_equipos') }}">Borrar</a>
		</td>
	</tr>
@endsection