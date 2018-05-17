@extends('layouts.insertar')

@section('title')
   agregar a un técnico académico
@endsection

@section('descripcion')
   	<a href="{{ url('/tecnico_academico') }}" class="btn btn-primary">Regresar</a>
   	<h1 class="text-center">Formulario para agregar a un técnico académico</h1>
@endsection

@section('accion')
   action="{{ url('/tecnico_academico/insertar_tecnico') }}"
@endsection

@section('contenido_formulario')

	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre completo del técnico">Nombre: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>	
		</div>
	</div>

	<div class="form-group">
		<label for="localizacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Donde se encuentra el técnico">Localización:</label>

		<div class="col-sm-8">
			<select class="form-control" name="localizacion">
				@foreach($espacios as $espacio)
					<option value="{{$espacio->tipo}}">{{$espacio->tipo}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="hora_inicio" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de inicio de los servicios del técnico">Hora de inicio: </label>

		<div class="col-sm-8">
			<input type="time" class="form-control" name="hora_inicio" value="07:00" required>
		</div>
	</div>

	<div class="form-group">
		<label for="hora_termino" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de término de los servicios del técnico">Hora de término: </label>

		<div class="col-sm-8">
			<input type="time" class="form-control" name="hora_termino" value="17:00" required>
		</div>
	</div>

	<div class="form-group">
		<label for="dia_inicio" class="col-sm-4 control-label" data-toggle="tooltip" title="Día de inicio de los servicios del técnico">Día de inicio: </label>

		<div class="col-sm-8">
			<select class="form-control" name="dia_inicio">
				@foreach($dias_semana as $dia)
					<option value="{{$dia}}">{{$dia}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="dia_termino" class="col-sm-4 control-label" data-toggle="tooltip" title="Día de térmico de los servicios del técnico">Día de termino: </label>

		<div class="col-sm-8">
			<select class="form-control" name="dia_termino">
				@foreach($dias_semana as $dia)
					<option value="{{$dia}}">{{$dia}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="curriculo" class="col-sm-4 control-label" data-toggle="tooltip" title="Currículum del técnico académico">Currículum: </label>

		<div class="col-sm-8">
			<input type="file" class="form-control" name="curriculo" accept=".pdf">
		</div>
	</div>
@endsection
