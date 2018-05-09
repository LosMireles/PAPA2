@extends('layouts.app')

@section('title', 'eliminar')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Borrar asignaturas</h1>
	<form action="{{ url('/asignaturas/eliminar_asignatura/eliminar') }}" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<div class="tooltip">
    		<label for="nombre">Nombre: </label>
         	<span class="tooltiptext">Nombre de la materia que desea borrar</span>
         </div>

         <br>

		<input type="text" name="nombre" placeholder="nombre">
		<input type = 'submit' value = "Borrar asignatura"/>	
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
