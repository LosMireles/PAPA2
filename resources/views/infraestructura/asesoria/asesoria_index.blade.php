@extends('layouts.menus')

@section('title')
	gestión de espacios para asesorias
@endsection

@section('descipcion')
	<a href="/infraestructura/" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Asesorías</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarAsesorias">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarAsesoria">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verAsesoria">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarAsesoria">Borrar</a>
		</td>
	</tr>
@endsection
