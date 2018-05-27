@extends('layouts.formulario_create_general')

@section('title' , "Formulario 9.1.11")
@section("objeto_informacion", "un curso")

@section('ruta_regresar')
    {{action('AuditorioController@index')}}
@endsection

@section('accion')
    {{action('AuditorioController@store')}}
@endsection


@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del auditorio")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "Capacidad")
        @slot("tooltip_input", "Maxima")
        @slot("label_input", "Capacidad")
        @slot("placeholder_input", "100")
        @slot("extra", "required")
    @endcomponent
<!--
    <div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
    </div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
      <input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
  </div>
-->
@endsection
