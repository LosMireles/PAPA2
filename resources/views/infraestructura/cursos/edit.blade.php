@extends('layouts.actualizar')

@section('title')
   editar curso {{$curso->nombre}}
@endsection

@section('descripcion')
    <a href="{{action('CursoController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del curso {{$curso->nombre}}</h1>
@endsection

@section('accion')
    action = "{{action('CursoController@update', $curso->nombre)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['CursoController@update', $curso->nombre],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

    <input type="hidden" name="id" value="{{$curso->id}}">

    <div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre del Curso">Nombre</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='nombre' id='nombre' placeholder="Nombre" required value = "{{$curso->nombre}}">
		</div>
	</div>

	<div class="form-group">
		<label for="periodo" class="col-sm-4 control-label" data-toggle="tooltip" title="Período en el que fue impartido">Período</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='periodo' id="periodo" placeholder="2015-1" required value = "{{$curso->periodo}}">
		</div>
	</div>

	<div class="form-group">
		<label for="grupo" class="col-sm-4 control-label" data-toggle="tooltip" title="Número del grupo">Grupo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='grupo' id="grupo" placeholder="1" required value = "{{$curso->grupo}}">
		</div>
	</div>

	<div class="form-group">
		<label for="noEstudiantes" class="col-sm-4 control-label" data-toggle="tooltip" title="Número de estudiantes de la licenciatura presentes en el curso">Número de estudiantes</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='noEstudiantes' id="noEstudiantes" placeholder="1" required value = "{{$curso->noEstudiantes}}">
		</div>
	</div>

	<div class="form-group">
		<label for="tipoAula" class="col-sm-4 control-label" data-toggle="tooltip" title="Esto es: laboratorio, aula, etc">Tipo de aula</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='tipoAula' id="tipoAula" placeholder="Aula" required value = "{{$curso->tipoAula}}">
		</div>
	</div>

	<div class="form-group">
		<label for="tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Identificador del curso">Tipo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='tipo' id="tipo" placeholder="CALC202-1" required value = "{{$curso->tipo}}">
		</div>
	</div>

	<div class="form-group">
		<label for="espacios" class="col-sm-4 control-label" data-toggle="tooltip" title="Espacios donde se imparte el curso">Espacios</label>

		<div class="col-sm-8">
			@foreach($espacios as $espacio)
				<?php $temp = 0; ?>
				@foreach($curso_espacio as $unidad)
					@if($curso->id == $unidad->curso_id && $espacio->id == $unidad->espacio_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="espacios[]" checked value="{{$espacio->tipo}}"> {{$espacio->tipo}} <br>
				@else
					<input type="checkbox" name="espacios[]" value="{{$espacio->tipo}}"> {{$espacio->tipo}} <br>
				@endif
			@endforeach
		</div>
	</div>


@endsection

