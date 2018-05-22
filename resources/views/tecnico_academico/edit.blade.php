@extends('layouts.actualizar')

@section('title')
	Técnico académico editar
@endsection

@section('descripcion')
	<a href="{{ url('/tecnicos_academicos') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Formulario de edición del técnico académico {{$tecnico->nombre}}</h1>
@endsection



@section('formopen')
    {{Form::open( array( 'action' => ['TecnicoAcademicoController@update', $tecnico->id], 'class' => 'form-horizontal',
    'files' => true ) )}}
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre completo del técnico">Nombre: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="{{$tecnico->nombre}}">
		</div>
	</div>

	<div class="form-group">
		<label for="localizacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Dónde se encuentra ubicado el técnico">Localización</label>

		<div class="col-sm-8">
			<select class="form-control" name="localizacion">
				@foreach($espacios as $espacio)
					@if($tecnico->localizacion == $espacio->tipo)
						<option value="{{$espacio->tipo}}" selected>{{$espacio->tipo}}</option>
					@else
						<option value="{{$espacio->tipo}}">{{$espacio->tipo}}</option>
					@endif
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="hora_inicio" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de inicio de los servicios del técnico">Hora de inicio: </label>

		<div class="col-sm-8">
			<input type="time" class="form-control" name="hora_inicio" value="{{$tecnico->hora_inicio}}" required >
		</div>
	</div>

	<div class="form-group">
		<label for="hora_termino" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de término de los servicios del técnico">Hora de término: </label>

		<div class="col-sm-8">
			<input type="time" class="form-control" name="hora_termino" value="{{$tecnico->hora_termino}}" required >
		</div>
	</div>

	<div class="form-group">
		<label for="dia_inicio" class="col-sm-4 control-label" data-toggle="tooltip" title="Día de inicio de los servicios del técnico">Día de inicio: </label>

		<div class="col-sm-8">
            <input type='date' class="form-control" name='dia_inicio' placeholder="" value = "{{$tecnico->dia_inicio}}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="dia_termino" class="col-sm-4 control-label" data-toggle="tooltip" title="Día de térmico de los servicios del técnico">Día de termino: </label>

		<div class="col-sm-8">
            <input type='date' class="form-control" name='dia_termino' placeholder="" value = "{{$tecnico->dia_termino}}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="curriculo" class="col-sm-4 control-label" data-toggle="tooltip" title="Currículum del técnico académico">Currículum: </label>

		<div class="col-sm-8">
			<input type="file" class="form-control" name="curriculo" accept=".pdf">
			<p>* Si no se desea editar el currículo se mantendrá el último agregado</p>
		</div>
	</div>
@endsection

