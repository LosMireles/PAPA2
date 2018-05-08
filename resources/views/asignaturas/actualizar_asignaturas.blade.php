@extends('layouts.app')

@section('title', 'actualizar asignaturas')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<br>
	<table border="1">
		<tr>
			<th>Nombre de la asignatura</th>
			<th>Descripción de la asignatura</th>
		</tr>
		@foreach($asignaturas as $asignatura)
			<tr>
				<td>{{$asignatura->nombre}}</td>
				<td>{{$asignatura->descripcion}}</td>
				<td><a href="{{ url('/asignaturas/actualizar_asignatura/'.$asignatura->id ) }}">Editar</a>
			</tr>
		@endforeach
	</table>
@endsection
