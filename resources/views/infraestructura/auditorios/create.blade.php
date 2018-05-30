@extends('layouts.formulario_create_general')

@section('title' , "Formulario 9.1.11")
@section("objeto_informacion", "agregar un auditorio")

@section('ruta_regresar')
    {{action('AuditorioController@index')}}
@endsection

@section('accion')
    {{action('AuditorioController@store', $url_regreso)}}
@endsection


@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del auditorio")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre")
        @slot("extra", "maxlength=80 required")
    @endcomponent

    @component("layouts.text_input")
        @slot("tipo", "number")
        @slot("nombre_input", "Capacidad")
        @slot("tooltip_input", "Capacidad máxima del auditorio")
        @slot("label_input", "Capacidad")
        @slot("placeholder_input", "100")
        @slot("extra", "min=0 max=1000000")
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

