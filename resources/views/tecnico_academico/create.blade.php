@extends('layouts.formulario_create_general')

@section('title' , "Registrar técnico académico")
@section("objeto_informacion", "agregar un técnico académico")

@section('accion')
    {{action('TecnicoAcademicoController@store', $url_regreso)}}
@endsection

@section('contenido_formulario')
    <div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre de la persona">Nombre: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
		</div>
	</div>

	<div class="form-group">
		<label for="grado" class="col-sm-4 control-label" data-toggle="tooltip" title="Grado académico alcanzado">Grado académico: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="grado" value="" placeholder="Licenciatura">
		</div>
	</div>

	<div class="form-group">
		<label for="certificados" class="col-sm-4 control-label" data-toggle="tooltip" title="Certificados obtenidos">Certificados: </label>

		<div class="col-sm-8">
			<textarea name="certificados" class="form-control" placeholder="Certificaciones del técnico"></textarea>
		</div>
	</div>

    @component("layouts.text_input")
        @slot("tipo", "number")
        @slot("nombre_input", "exp")
        @slot("tooltip_input", "Años de experiencia del técnico en el área")
        @slot("label_input", "Años de experiencia")
        @slot("placeholder_input", "2")
        @slot("extra", "min=0 max=100")
    @endcomponent


@endsection

