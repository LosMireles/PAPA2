@extends('layouts.insertar')

@section('title')
	agregar un equipo
@endsection

@section('descripcion')
	<a href="/equipamiento/equipos/" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Formulario para agregar un equipo</h1>
@endsection

@section('accion')
   	action="{{ url('/gestion_equipo_agregar') }}"
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="serial" class="col-sm-4 control-label" data-toggle="tooltip" title="Ingrese el serial del equipo">Serial: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" required>	
		</div>
	</div>

	<div class="form-group">
		<label for="manual" class="col-sm-4 control-label" data-toggle="tooltip" title="Indique si el equipo cuenta con manual de usuario">Manual de usuario: </label>
		
		<div class="col-sm-8">
			<input type="radio" name="manual" value="1" checked="">Sí <br>
			<input type="radio" name="manual" value="0"> No
		</div>
	</div>

	<div class="form-group">
		<label for="operable" class="col-sm-4 control-label" data-toggle="tooltip" title="Indique si el equipo se encuentra operable actualmente">Operable:  </label>

		<div class="col-sm-8">
			<input type="radio" name="operable" value="1" checked="">Sí <br>
			<input type="radio" name="operable" value="0"> No
		</div>
	</div>

	<div class="form-group">
		<label for="localizacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Seleccione la ubicación del equipo">Lozalización:  </label>

		<div class="col-sm-8">
			<select name="localizacion" class="form-control">
				@foreach($espacios as $espacio)
					<option value="{{$espacio->tipo}}">{{$espacio->tipo}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="nombres" class="col-sm-4 control-label" data-toggle="tooltip" title="Seleccione el software que se encuentra instalado en el equipo">Software:  </label>

		<div class="col-sm-8">
			@foreach($softwares as $single_software)
				<input type="checkbox" name="nombres[]" value="{{$single_software->nombre}}">
				{{$single_software->nombre}}<br>
			@endforeach
		</div>	
	</div>
@endsection