@extends('layouts.menus')

@section('title')
	gestión de espacios para las aulas
@endsection

@section('descipcion')
	<a href="/infraestructura/" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Aula</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarAulas">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarAula">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verAula">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarAula">Borrar</a>
		</td>
	</tr>
@endsection