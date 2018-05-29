@extends('layouts.formulario_edit_general')

@section('title')
   Editar sanitario
@endsection

@section('descripcion')
    <a href="{{action('Inciso9_1_13Controller@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del sanitario {{$sanitario->nombre}}</h1>
@endsection

@section('accion')
    action = "{{action('SanitarioController@update', $sanitario->nombre)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['SanitarioController@update', $sanitario->nombre],
                'class' => 'form-horizontal',
                'files' => true])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Identificador")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre")
        @slot("valor_default", $sanitario->nombre)
        @section("extra", "required")
    @endcomponent


	@component("layouts.text_input")
        @slot("nombre_input", "sexo")
        @slot("tooltip_input", "Superficie en metros cuadrados que abarca el aula")
        @slot("label_input", "Sexo")
        @slot("placeholder_input", "Mujer")
		@slot("valor_default", $sanitario->sexo)
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
