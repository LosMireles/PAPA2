@extends('layouts.ver')
@section('title')
	ver asignaturas
@endsection

@section('descripcion')
	<a href="{{ url('/asignaturas') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Listado de asignaturas</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th>Nombre de la asignatura</th>
		<th>Descripción de la asignatura</th>
        <th>Curso de la asignatura</th>
	</tr>
@endsection

@section('cuerpo_tabla')
	@foreach($asignaturas as $asignatura)
		<tr>
			<td>{{$asignatura->nombre}}</td>
			<td>{{$asignatura->descripcion}}</td>
			<td>{{$asignatura->curso_id}}</td>
		</tr>
	@endforeach
@endsection

