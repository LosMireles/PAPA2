@extends('layouts.app')

@section('title', 'actualizar asignaturas')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Edición de asignaturas</h1>
	<br>
	<table border="1">
		<tr>
			<th>
				<div class="tooltip">
					Nombre de la asigatura:
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
				<td><a href="{{ url('/asignaturas/actualizar_asignatura/'.$asignatura->id ) }}">Editar</a>
			</tr>
		@endforeach
	</table>
@endsection
