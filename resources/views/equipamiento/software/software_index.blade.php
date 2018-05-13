@extends('layouts.menus')

@section('title')
	gestión de software
@endsection

@section('descipcion')
	<a href="{{ url('/equipamiento') }}">Regresar</a>
	<h1 class="text-center">Gestión de software</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarSoftware">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarSoftware">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verSoftware">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarSoftware">Borrar</a>
		</td>
	</tr>
@endsection