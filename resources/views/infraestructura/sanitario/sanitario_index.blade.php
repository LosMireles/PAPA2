@extends('layouts.menus')

@section('title')
	gestión de espacios para los sanitarios
@endsection

@section('descipcion')
	<a href="/infraestructura/">Regresar</a>
	<h1 class="text-center">Sanitarios</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarSanitarios">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarSanitario">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verSanitario">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarSanitario">Borrar</a>
		</td>
	</tr>
@endsection