@extends('layouts.menus')

@section('title')
	Cursos
@endsection

@section('descipcion')
	<a href="/infraestructura/" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Cursos</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarCurso">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarCurso">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verCurso">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarCurso">Borrar</a>
		</td>
	</tr>
@endsection