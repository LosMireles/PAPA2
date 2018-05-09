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
					<div class="tooltip">
						<label for="asignatura">Nombre de la asigatura: </label>
						<span class="tooltiptext">Nombre de la asignatura</span>	
					</div>	
				</td>
				<td>
					<input type="text" name="asignatura" placeholder="Asigatura">
				</td>
			</tr>
			<tr>
				<td>
					<div class="tooltip">
						<label for="descripcion">Descripción: </label>
						<span class="tooltiptext">Descripción para la asignatura</span>
					</div>
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
