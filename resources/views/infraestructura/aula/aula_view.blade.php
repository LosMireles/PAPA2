@extends('layouts.ver')
@section('title')
   	ver aulas
@endsection

@section('descripcion')
   	<a href="/infraestructura/aula" class="btn btn-primary">Regresar</a>
   	<h1 class="text-center">Listado de aulas</h1>
@endsection

@section('cabeza_tabla')
   	<tr>
		<td>Codigo del aula</td>
		<td>Cantidad de equipo</td>
		<td>Cantidad de computadoras</td>
		<td>Capacidad</td>
   	</tr>
@endsection

@section('cuerpo_tabla')
   	@foreach ($aulas as $aula)
	<tr>
		<td>{{ $aula->Tipo }}</td>
		<td>{{ $aula->CantidadAV }}</td>
		<td>{{ $aula->CantidadEquipo }}</td>
		<td>{{ $aula->Capacidad }}</td>
	</tr>
	@endforeach
@endsection
