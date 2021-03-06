@extends('layouts.actualizar')

@section('title')
   Editar asignatura
@endsection

@section('descripcion')
    <a href="{{action('AsignaturaController@index')}}" class="btn btn-primary"> Regresar
    </a>
	<h1 class="text-center">Edición de asignatura {{$asignatura->nombre}}</h1>
@endsection

@section('accion')
    action = "{{action('AsignaturaController@update', $asignatura->nombre)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['AsignaturaController@update', $asignatura->nombre],
                'class' => 'form-horizontal'])}}
@endsection


@section('contenido_formulario')
   	<div class="form-group">
        <label for="nombre"
               class="col-sm-4 control-label"
               data-toggle="tooltip"
               title="Nombre de la asigatura">
            Nombre
        </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name="nombre" id="nombre" placeholder="Asignatura" required value="{{$asignatura->nombre}}">
		</div>
	</div>

	<div class="form-group">
        <label for="descripcion"
               class="col-sm-4 control-label"
               data-toggle="tooltip"
               title="Descripción de la asignatura">
            Descripción
        </label>

		<div class="col-sm-8">
			<textarea name="descripcion" class="form-control" rows="5">{{$asignatura->descripcion}}</textarea>
		</div>
	</div>

	<div class="form-group">
        <label for="curso_id"
               class="col-sm-4 control-label"
               data-toggle="tooltip"
               title="Curso que le corresponde a la asignatura">
            Curso
        </label>

		<div class="col-sm-8">
            <select name="curso_id" class="form-control">
            @foreach($cursos as $curso)
                @if($curso->id == $asignatura->curso_id)
                    <option value="{{$curso->id}}" checked>
                @else
                    <option value="{{$curso->id}}">
                @endif
                {{$curso->nombre}} <br>
            @endforeach
            </select>
		</div>
	</div>

	<div class="form-group">
        <label for="" class="col-sm-4 control-label" data-toggle="tooltip" title="softwares que usa la asignatura">
            Softwares
        </label>

		<div class="col-sm-8">
			@foreach($softwares as $software)
				<?php $temp = 0; ?>
				@foreach($asignaturas_softwares as $unidad)
					@if($asignatura->id == $unidad->asignatura_id && $software->id == $unidad->software_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="softwares[]" checked value="{{$software->nombre}}"> {{$software->nombre}} <br>
				@else
					<input type="checkbox" name="softwares[]" value="{{$software->nombre}}"> {{$software->nombre}} <br>
				@endif
			@endforeach
		</div>
	</div>

@endsection

