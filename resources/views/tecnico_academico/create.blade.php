@extends('layouts.formulario_create_general')

@section('title' , "Registrar técnico académico")
@section("objeto_informacion", "un técnico académico")

@section('accion')
    {{action('TecnicoAcademicoController@store')}}
@endsection

@section('contenido_formulario')
    <div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="">Nombre: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
		</div>
	</div>

	<div class="form-group">
		<label for="grado" class="col-sm-4 control-label" data-toggle="tooltip" title="">Grado académico: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="grado" value="" placeholder="Licenciatura" required>
		</div>
	</div>

	<div class="form-group">
		<label for="certificados" class="col-sm-4 control-label" data-toggle="tooltip" title="">Certificados: </label>

		<div class="col-sm-8">
			<textarea name="certificados" class="form-control"></textarea>
		</div>
	</div>

	@component('layouts.componentes.input_text_script')
		@slot('nombre_input', 'exp')
		@slot('tooltip_input', 'Años de experiencia del técnico en el área')
		@slot('label_input', 'Años de experiencia')
		@slot('placeholder_input', '1')
		@slot('nombre', 'text')
		@slot('patron', '.{1,2}')
		@slot('titulo_error', 'El número debe contener entre 1 y 2 dígitos')
	@endcomponent

@endsection

