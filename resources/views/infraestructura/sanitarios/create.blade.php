@extends('layouts.formulario_create_general')

@section('title' , "Agregar Sanitario")
@section("objeto_informacion", "un sanitario")

@section('ruta_regresar')
    {{action('Inciso9_1_13Controller@index')}}
@endsection

@section('accion')
    {{action('SanitarioController@store')}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre escrito en las puertas")
        @slot("label_input", "Código del sanitario")
        @slot("placeholder_input", "Código de sanitario")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "sexo")
        @slot("tooltip_input", "Sexo de los usuarios")
        @slot("label_input", "Sexo")
        @slot("placeholder_input", "Hombres")
        @slot("extra", "required")
    @endcomponent

  <div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
      <input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
	</div>
@endsection



