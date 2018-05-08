@extends('layouts.app')

@section('title', 'eliminar')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<br>
	<form action="{{ url('/asignaturas/eliminar_asignatura/eliminar') }}" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<label for="nombre">Nombre: </label><br>
		<input type="text" name="nombre" placeholder="nombre">
		<input type = 'submit' value = "Eliminar equipo"/>	
	</form>
	
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
