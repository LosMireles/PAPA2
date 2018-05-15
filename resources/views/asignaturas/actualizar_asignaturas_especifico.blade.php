@extends('layouts.insertar')

@section('title')
   agregar una asignatura
@endsection

@section('descripcion')
   	<a href="{{ url('/asignaturas/actualizar_asignatura') }}" class="btn btn-primary">Regresar</a>
   	<h1 class="text-center">Edición de la asignatura {{$asignatura->nombre}}</h1>
@endsection

@section('accion')
   action="{{ url('/asignaturas/actualizar_asignatura_actualizar') }}"
@endsection

@section('contenido_formulario')
	<input type="hidden" name="id" value="{{$asignatura->id}}">
   	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre de la asigatura">Nombre</label>
		
		<div class="col-sm-8">
			<input type='text' class="form-control" name="nombre" id="asignatura" placeholder="Asignatura" required value="{{$asignatura->nombre}}">
		</div>
	</div>

	<div class="form-group">
		<label for="descripcion" class="col-sm-4 control-label" data-toggle="tooltip" title="Descripción de la asignatura">Descripción</label>
		
		<div class="col-sm-8">
			<!--<input type='text' class="form-control" name='descripcion' placeholder="Descripción" required>-->
			<textarea name="descripcion" class="form-control" rows="5">{{$asignatura->descripcion}}</textarea>
		</div>
	</div>
@endsection