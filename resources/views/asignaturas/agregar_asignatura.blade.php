@extends('layouts.insertar')

@section('title')
   agregar una asignatura
@endsection

@section('descripcion')
   	<a href="{{ url('/asignaturas') }}" class="btn btn-primary">Regresar</a>
   	<h1 class="text-center">Formulario para agregar una asignatura</h1>
@endsection

@section('accion')
   action="{{ url('/asignaturas/agregar_asignatura/agregar') }}"
@endsection

@section('contenido_formulario')
   	<div class="form-group">
		<label for="asignatura" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre de la asigatura">Nombre</label>
		
		<div class="col-sm-8">
			<input type='text' class="form-control" name="asignatura" id="asignatura" placeholder="Asignatura" required>
		</div>
	</div>

	<div class="form-group">
		<label for="descripcion" class="col-sm-4 control-label" data-toggle="tooltip" title="Descripción de la asignatura">Descripción</label>
		
		<div class="col-sm-8">
			<!--<input type='text' class="form-control" name='descripcion' placeholder="Descripción" required>-->
			<textarea name="descripcion" class="form-control" rows="5" placeholder="Descripción" required=""></textarea>
		</div>
	</div>
@endsection