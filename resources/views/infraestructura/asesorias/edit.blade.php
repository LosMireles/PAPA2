@extends('layouts.actualizar')

@section('title')
   editar espacio de asesoria <?php echo $asesoria->Tipo; ?>
@endsection

@section('descripcion')
    <a href="{{action('AsesoriaController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del asesoria {{$asesoria->Tipo}}</h1>
@endsection

@section('accion')
    action = "{{action('AsesoriaController@update', $asesoria->Tipo)}}"
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
		<label for="InicioHora" class="col-sm-4 control-label" data-toggle="tooltip" title="">Hora de inicio</label>

		<div class="col-sm-8">
			<input type='time' class="form-control" name='InicioHora' placeholder="00:00" value="{{$asesoria->InicioHora}}"  required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinHora" class="col-sm-4 control-label" data-toggle="tooltip" title="">Hora de finalizacion</label>

		<div class="col-sm-8">
			<input type='time' class="form-control" name='FinHora' placeholder="12:00" value="{{$asesoria->FinHora}}"   required>
		</div>
	</div>

	<div class="form-group">
		<label for="InicioDia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Día de inicio</label>

		<div class="col-sm-8">
			<input type='date' class="form-control" name='InicioDia' placeholder="Lunes" value="{{$asesoria->InicioDia}}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinDia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Día de finalización</label>

		<div class="col-sm-8">
			<input type='date' class="form-control" name='FinDia' placeholder="Sábado" value="{{$asesoria->FinDia}}"  required>
		</div>
	</div>

	<div class="form-group">
		<label for="Materia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Asignatura: </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Materia' placeholder="Asignatura" value="{{$asesoria->Materia}}" required>
		</div>
	</div>
@endsection

