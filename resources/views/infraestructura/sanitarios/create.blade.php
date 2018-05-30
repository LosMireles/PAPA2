@extends('layouts.formulario_create_general')

@section('title' , "Agregar Sanitario")
@section("objeto_informacion", "agregar un sanitario")

@section('ruta_regresar')
    {{action('Inciso9_1_13Controller@index')}}
@endsection

@section('accion')
    {{action('SanitarioController@store', $url_regreso)}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Identificador del sanitario")
        @slot("label_input", "Nombre sanitario")
        @slot("placeholder_input", "Sanitario planta superior hombres")
        @slot("extra", "maxlength=80 required")
    @endcomponent

    <div class="form-group">
        <label for="sexo" class="col-sm-4 control-label" data-toggle="tooltip" title="Si el sanitario es para hombre, mujeres o es unisex">
            Sexo
        </label>

        <div class="col-sm-8">
            <select class="form-control" name="sexo">
                <option value="hombres">Hombres</option>
                <option value="mujeres">Mujeres</option>
                <option value="unisex">Unisex</option>
            </select>
        </div>
    </div>

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
