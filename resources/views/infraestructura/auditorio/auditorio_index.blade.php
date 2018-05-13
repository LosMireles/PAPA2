@extends('layouts.menus')

@section('title')
	gestión de espacios para los auditorios
@endsection

@section('descipcion')
	<a href="/infraestructura/">Regresar</a>
	<h1 class="text-center">Auditorio</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Seleccione una opción</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/insertarAuditorios">Insertar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/editarAuditorio">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/verAuditorio">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="/borrarAuditorio">Borrar</a>
		</td>
	</tr>
@endsection