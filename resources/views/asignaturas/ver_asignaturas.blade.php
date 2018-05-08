@extends('layouts.app')

@section('title', 'ver asignaturas')

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
			</tr>
		@endforeach
	</table>
@endsection
