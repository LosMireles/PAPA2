@extends('layouts.formulario_create_general')

@section('title' , "Agregar cubiculo")
@section("objeto_informacion", "agregar un cubículo")

@section('accion')
    {{action('CubiculoMiniController@store', $url_regreso)}}
@endsection

@section('contenido_formulario')
	@component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre escrito en las puertas de los cubiculos")
        @slot("label_input", "Identificador del cubiculo")
        @slot("placeholder_input", "Cubiculo 1 3K-4")
        @slot("extra", "maxlength=80 required")
    @endcomponent

	@component("layouts.text_input")
        @slot("nombre_input", "profesor")
        @slot("tooltip_input", "Profesor asignado al cubiculo")
        @slot("label_input", "Profesor")
        @slot("placeholder_input", "Julio Waissman Villanova")
        @slot("extra", "maxlength=80")
    @endcomponent

	<div class="form-group">
		<h3 class="text-center">Evidencias fotográficas: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
	<input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
	</div>
@endsection
