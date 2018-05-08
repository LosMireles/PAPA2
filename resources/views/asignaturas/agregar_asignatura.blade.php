@extends('layouts.app')

@section('title', 'agregar')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Formulario para agregar una asignatura</h1>
	<form action="{{ url('/asignaturas/agregar_asignatura/agregar') }}" method="POST">
		
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<table>
			<tr>
				<td>
					<label for="asignatura">Nombre de la asigatura: </label>
				</td>
				<td>
					<input type="text" name="asignatura" placeholder="asigatura"> <br><br>			
				</td>
			</tr>
			<tr>
				<td>
					<label for="descripcion">Descripción: </label>			
				</td>
				<td>
					<textarea rows="4" cols="45" name="descripcion" placeholder="Inserte una descripción"></textarea>			
				</td>
			</tr>
			<tr></tr>
		</table>

		<input type = 'submit' value = "Agregar equipo"/>
	
	</form>
@endsection
