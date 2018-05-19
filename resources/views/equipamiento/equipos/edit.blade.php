@extends('layouts.actualizar')

@section('title')
	Editar equipo
@endsection

@section('descripcion')
    <a href="{{action('EquipoController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del Equipo {{$equipo->serial}}</h1>
@endsection

@section('accion')
    action = "{{action('EquipoController@update', $equipo->serial)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['EquipoController@update', $equipo->serial],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
	<input type="hidden" name="id" value="{{$equipo->id}}">

	<div class="form-group">
		<label for="serial" class="col-sm-4 control-label" data-toggle="tooltip" title="Ingrese el serial del equipo">Serial: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" required value="{{$equipo->serial}}">
		</div>
	</div>

	<div class="form-group">
		<label for="manual" class="col-sm-4 control-label" data-toggle="tooltip" title="Indique si el equipo cuenta con manual de usuario">Manual de usuario: </label>

		<div class="col-sm-8">
			@if($equipo->manualEquipo == 1)
				<input type="radio" name="manual" value="1" checked>Sí <br>
				<input type="radio" name="manual" value="0"> No
			@else
				<input type="radio" name="manual" value="1">Sí <br>
				<input type="radio" name="manual" value="0" checked> No
			@endif
		</div>
	</div>

	<div class="form-group">
		<label for="operable" class="col-sm-4 control-label" data-toggle="tooltip" title="Indique si el equipo se encuentra operable actualmente">Operable:  </label>

		<div class="col-sm-8">
			@if($equipo->operable == 1)
				<input type="radio" name="operable" value="1" checked>Sí <br>
				<input type="radio" name="operable" value="0"> No
			@else
				<input type="radio" name="operable" value="1">Sí <br>
				<input type="radio" name="operable" value="0" checked> No
			@endif
		</div>
	</div>

	<div class="form-group">
		<label for="localizacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Seleccione la ubicación del equipo">Lozalización:  </label>

		<div class="col-sm-8">
			<select name="localizacion" class="form-control">
				@foreach($espacios as $espacio)
					@if($equipo->localizacion == $espacio->tipo)
						<option value="{{$espacio->tipo}}" selected>{{$espacio->tipo}}</option>
					@else
						<option value="{{$espacio->tipo}}">{{$espacio->tipo}}</option>
					@endif
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="nombres" class="col-sm-4 control-label" data-toggle="tooltip" title="Seleccione el software que se encuentra instalado en el equipo">Software:  </label>

		<div class="col-sm-8">

			@foreach($softwares as $software)
				<?php $temp = 0; ?>
				@foreach($equipo_softwares as $unidad)
					@if($equipo->id == $unidad->equipo_id && $software->id == $unidad->software_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="nombre_software[]" checked value="{{$software->nombre}}"> {{$software->nombre}} <br>
				@else
					<input type="checkbox" name="nombre_software[]" value="{{$software->nombre}}"> {{$software->nombre}} <br>
				@endif
			@endforeach

			<!--@foreach($softwares as $software)
                <input type = 'checkbox' name = 'nombre_software[]'
                checked value = "{{$software->nombre}}">
                {{$software->nombre}} <br>
            @endforeach-->
		</div>
	</div>
@endsection

