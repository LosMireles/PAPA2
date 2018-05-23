@extends('layouts.actualizar')

@section('title')
	Editar software
@endsection

@section('descripcion')
    <a href="{{action('SoftwareController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del software {{$software->nombre}}</h1>
@endsection

@section('accion')
    action = "{{action('SoftwareController@update', $software->nombre)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['SoftwareController@update', $software->nombre],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre del software">Nombre: </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='nombre' placeholder="Nombre" required value = "{{$software->nombre}}">
		</div>
	</div>

	<div class="form-group">
		<label for="manualUsuario" class="col-sm-4 control-label" data-toggle="tooltip" title="Se cuenta con manual de uso para el software">Se cuenta con manual</label>

		<div class="col-sm-8">
			@if($software->manualUsuario == 1)
				<td><input type="radio" name="manualUsuario" value="1" checked>Sí <br>
				<input type="radio" name="manualUsuario" value="0" >No </td>
			@else
				<td><input type="radio" name="manualUsuario" value="1"> Sí <br>
				<input type="radio" name="manualUsuario" value="0" checked>No</td>
			@endif
		</div>
	</div>

	<div class="form-group">
		<label for="licencia" class="col-sm-4 control-label" data-toggle="tooltip" title="Tipo de licencia que se tiene del software (por ejemplo, libre)">Licencia</label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="licencia" placeholder="Tipo de licencia" required value = "{{$software->licencia}}">
		</div>
	</div>

	<div class="form-group">
		<label for="disponibilidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Se refiere a donde se consiguio el software">Lugar de obtención: </label>

    <div class="col-sm-8">
			<input type="text" class="form-control" name="disponibilidad" placeholder="" required value = "{{$software->disponibilidad}}">
		</div>
	</div>


	<div class="form-group">
		<label for="clase" class="col-sm-4 control-label" data-toggle="tooltip" title="Si es un lenguaje, una librería o una herramienta CASE">Clase: </label>

		<div class="col-sm-8">

			<select name="clase" class="form-control">
				@foreach($clases as $clase)
					@if($software->clase == $clase)
						<option value="{{$software->clase}}" selected>
						{{$software->clase}}</option>
					@else
						<option value="{{$clase}}">
						{{$clase}}</option>
					@endif
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
        <label for="" class="col-sm-4 control-label" data-toggle="tooltip" title="Equipos que tienen instalado el software">
            Equipos
        </label>

		<div class="col-sm-8">
			@foreach($equipos as $equipo)
				<?php $temp = 0; ?>
				@foreach($equipo_softwares as $unidad)
					@if($equipo->id == $unidad->equipo_id && $software->id == $unidad->software_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="equipos[]" checked value="{{$equipo->serial}}"> {{$equipo->serial}} <br>
				@else
					<input type="checkbox" name="equipos[]" value="{{$equipo->serial}}"> {{$equipo->serial}} <br>
				@endif
			@endforeach
		</div>
	</div>

	<div class="form-group">
        <label for="" class="col-sm-4 control-label" data-toggle="tooltip" title="Asignaturas que usan el software">
            Asignaturas
        </label>

		<div class="col-sm-8">
			@foreach($asignaturas as $asignatura)
				<?php $temp = 0; ?>
				@foreach($asignaturas_softwares as $unidad)
					@if($asignatura->id == $unidad->asignatura_id && $software->id == $unidad->software_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="asignaturas[]" checked value="{{$asignatura->nombre}}"> {{$asignatura->nombre}} <br>
				@else
					<input type="checkbox" name="asignaturas[]" value="{{$asignatura->nombre}}"> {{$asignatura->nombre}} <br>
				@endif
			@endforeach
		</div>
	</div>

@endsection

