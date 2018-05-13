@extends('layouts.ver')
@section('title')
   	editar auditorios
@endsection

@section('descripcion')
   	<a href="/infraestructura/auditorio" class="btn btn-primary">Regresar</a>
   	<h1 class="text-center">Listado de auditorios</h1>
@endsection

@section('cabeza_tabla')
   	<tr>
	  	<td>IdAuditorio</td>
	   	<td>Tipo</td>
		<td>CantidadEquipo</td>
	   	<td>CantidadAV</td>
	   	<td>Capacidad</td>
	   	<td>CantidadSanitarios</td>
	   	<td></td>
   	</tr>
@endsection

@section('cuerpo_tabla')
   	@foreach ($auditorios as $auditorio)
	<tr>
		<td>{{ $auditorio->IdAuditorio }}</td>
		<td>{{ $auditorio->Tipo }}</td>
		<td>{{ $auditorio->CantidadEquipo }}</td>
	   	<td>{{ $auditorio->CantidadAV }}</td>
	   	<td>{{ $auditorio->Capacidad }}</td>
	   	<td>{{ $auditorio->CantidadSanitarios }}</td>
	   	<td class="text-center" ><a href = 'editAuditorio/{{ $auditorio->IdAuditorio }}' class="btn btn-warning">Editar</a></td>
	</tr>
	@endforeach
@endsection