@extends('layouts.menus')

@section('title')
	gestión de espacios para los cubículos
@endsection

@section('descipcion')
	<a href="/infraestructura/">Regresar</a>
	<h1 class="text-center">Cubículo</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarCubiculos">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarCubiculo">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verCubiculo">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarCubiculo">Borrar</a>
		</td>
	</tr>
@endsection