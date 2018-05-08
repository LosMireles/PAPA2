@extends('layouts.app')

@section('title', 'actualizar')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<form action="{{ url('/asignaturas/actualizar_asignatura_actualizar') }}" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<input type="hidden" name="id" value="{{$asignatura->id}}">

		<table>
			<tr>
				<td>
					<label for="nombre">Nombre: </label>
				</td>
				<td>
					<input type="text" name="nombre" value="{{$asignatura->nombre}}"><br>
				</td>
			</tr>
			<tr>
				<td><label for="descripcion">Descripción: </label></td>
				<td><input type="text" name="descripcion" value="{{$asignatura->descripcion}}"><br></td>
			</tr>
		</table>

		<input type = 'submit' value = "Modificar asignatura"/>
	</form>
@endsection