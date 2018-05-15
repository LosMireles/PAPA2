@extends('layouts.insertar')

@section('title')
   	agregar software
@endsection

@section('descripcion')
	<a href="/equipamiento/software" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Formulario para agregar un software</h1>
@endsection

@section('accion')
   action = "/CrearSoftware"
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre del software">Nombre: </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='nombre' placeholder="Nombre" required>
		</div>
	</div>

	<div class="form-group">
		<label for="manualUsuario" class="col-sm-4 control-label" data-toggle="tooltip" title="Se cuenta con manual de uso para el software">Se cuenta con manual</label>

		<div class="col-sm-8">
			<input type="radio" name="manualUsuario" value="1" checked="">Sí <br>
			<input type="radio" name="manualUsuario" value="0"> No
		</div>
	</div>

	<div class="form-group">
		<label for="licencia" class="col-sm-4 control-label" data-toggle="tooltip" title="Tipo de licencia que se tiene del software (por ejemplo, libre)">Licencia</label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="licencia" placeholder="Tipo de licencia" required>
		</div>
	</div>

	<div class="form-group">
		<label for="disponibilidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Se refiere a donde se consiguio el software">Lugar de obtención: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="disponibilidad" placeholder="" required>
		</div>
	</div>


	<div class="form-group">
		<label for="clase" class="col-sm-4 control-label" data-toggle="tooltip" title="Si es un lenguaje, una librería o una herramienta CASE">Clase: </label>

		<div class="col-sm-8">
			<select name="clase" class="form-control">
				@foreach($clases as $clase)
					<option value="{{$clase}}">{{$clase}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="" class="col-sm-4 control-label" data-toggle="tooltip" title="Equipos que tienen instalado el software">Equipos</label>

		<div class="col-sm-8">
			@foreach($equipos as $equipo)
				<input type="checkbox" name="equipo[]" value="{{$equipo->serial}}">
				{{$equipo->serial}}<br>
			@endforeach
		</div>
	</div>
@endsection
