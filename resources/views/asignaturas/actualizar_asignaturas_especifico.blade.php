@extends('layouts.app')

@section('title', 'actualizar')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Edición de la asignatura {{$asignatura->nombre}}</h1>
	<form action="{{ url('/asignaturas/actualizar_asignatura_actualizar') }}" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<input type="hidden" name="id" value="{{$asignatura->id}}">

		<table>
			<tr>
				<td>
					<div class="tooltip">
						Nombre:
						<span class="tooltiptext">Nombre de la asignatura</span>	
					</div>
				</td>
				<td>
					<input type="text" name="nombre" value="{{$asignatura->nombre}}"><br>
				</td>
			</tr>
			<tr>
				<td>
					<div class="tooltip">
						Descripción
						<span class="tooltiptext">Descripción de la asignatura</span>
					</div>
				</td>
				<td><input type="text" name="descripcion" value="{{$asignatura->descripcion}}"><br></td>
			</tr>
		</table>

		<input type = 'submit' value = "Modificar asignatura"/>
	</form>
@endsection