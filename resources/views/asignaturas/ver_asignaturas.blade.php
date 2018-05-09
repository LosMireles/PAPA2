@extends('layouts.app')

@section('title', 'ver asignaturas')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Asignaturas registradas</h1>
	<table border="1">
		<tr>
			<th>
				<div class="tooltip">
					Nombre:
					<span class="tooltiptext">Nombre de la asignatura</span>	
				</div>
			</th>
			<th>
				<div class="tooltip">
					Descripción
					<span class="tooltiptext">Descripción de la asignatura</span>
				</div>
			</th>
		</tr>
		@foreach($asignaturas as $asignatura)
			<tr>
				<td>{{$asignatura->nombre}}</td>
				<td>{{$asignatura->descripcion}}</td>
			</tr>
		@endforeach
	</table>
@endsection
