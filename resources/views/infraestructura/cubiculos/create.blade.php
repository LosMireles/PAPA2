@extends('layouts.formulario_create_general')

@section('title' , "Agregar cubiculo")
@section("objeto_informacion", "un cubiculo")

@section('ruta_regresar')
    {{action('CubiculoController@index')}}
@endsection

@section('accion')
    {{action('CubiculoController@store')}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "Tipo")
        @slot("tooltip_input", "Nombre escrito en las puertas")
        @slot("label_input", "Código del cubiculo")
        @slot("placeholder_input", "Código de cubiculo")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "superficie")
        @slot("tooltip_input", "Superficie en metros cuadrados que abarca el aula")
        @slot("label_input", "Superficie")
        @slot("placeholder_input", "100")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "Profesor")
        @slot("tooltip_input", "El encargado del cubículo")
        @slot("label_input", "Profesor")
        @slot("placeholder_input", "Nombre del profesor")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "CantidadEquipo")
        @slot("tooltip_input", "Cantidad de computadoras hay en el cubículo")
        @slot("label_input", "Cantidad de equipo")
        @slot("placeholder_input", "CantidadEquipo")
        @slot("extra", "required")
    @endcomponent

  <div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
			<input type='file' class="form-control" name='Fotografias' id="Fotografias" accept=".jpg, .png, .jpeg">
		</div>
	</div>
@endsection

