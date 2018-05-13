@extends('layouts.menus')

@section('title')
	gestión de espacios
@endsection

@section('descipcion')
	<a href="/infraestructura/">Regresar</a>
	<h1 class="text-center">Espacios</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarEspacio">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarEspacio">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verEspacio">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarEspacio">Borrar</a>
		</td>
	</tr>
@endsection