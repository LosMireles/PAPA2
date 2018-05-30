@extends('layouts.actualizar')

@section('title')
   editar un espacio de asesoria
@endsection

@section('descripcion')
    <a href="{{action('AsesoriaController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del asesoria {{$asesoria->Tipo}}</h1>
@endsection

@section('accion')
    action = "{{action('AsesoriaController@update', $asesoria->Tipo, $url_regreso)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['AsesoriaController@update', $asesoria->Tipo],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Identificador de la asesoria">Tipo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Tipo' value ="{{$asesoria->Tipo}}">
		</div>
	</div>

	<div class="form-group">
		<label for="InicioHora" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de inicio">Hora de inicio</label>

		<div class="col-sm-8">
			<input type='time' class="form-control" name='InicioHora' placeholder="00:00" value="{{$asesoria->InicioHora}}"  required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinHora" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de finalización">Hora de finalizacion</label>

		<div class="col-sm-8">
			<input type='time' class="form-control" name='FinHora' placeholder="12:00" value="{{$asesoria->FinHora}}"   required>
		</div>
	</div>

	<div class="form-group">
		<label for="InicioDia" class="col-sm-4 control-label" data-toggle="tooltip" title="Día de inicio">Día de inicio</label>

		<div class="col-sm-8">
			<input type='date' class="form-control" name='InicioDia' placeholder="Lunes" value="{{$asesoria->InicioDia}}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinDia" class="col-sm-4 control-label" data-toggle="tooltip" title="Día de finalización">Día de finalización</label>

		<div class="col-sm-8">
			<input type='date' class="form-control" name='FinDia' placeholder="Sábado" value="{{$asesoria->FinDia}}"  required>
		</div>
	</div>

	<div class="form-group">
		<label for="Materia" class="col-sm-4 control-label" data-toggle="tooltip" title="Asignatura que se imparte">Asignatura: </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Materia' placeholder="Asignatura" value="{{$asesoria->Materia}}" required>
		</div>
	</div>

  <div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
      <input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
	</div>
@endsection
