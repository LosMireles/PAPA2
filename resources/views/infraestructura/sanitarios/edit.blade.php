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

@section('objeto_informacion', 'un sanitario')

@section('accion')
    action = "{{action('SanitarioController@update', $sanitario->nombre, $url_regreso)}}"
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


    <div class="form-group">
        <label for="sexo" class="col-sm-4 control-label" data-toggle="tooltip" title="Sexo de los usuarios">
            Sexo
        </label>

        <div class="col-sm-8">
            <select class="form-control" name="sexo">
                @if($sanitario->sexo == 'hombres')
                  <option value="hombres" selected>Hombres</option>
                  <option value="mujeres">Muejes</option>
                  <option value="unisex">Unisex</option>
                @elseif($sanitario->sexo == 'mujeres')
                  <option value="hombres">Hombres</option>
                  <option value="mujeres" selected>Mujeres</option>
                  <option value="unisex">Unisex</option>
                @elseif($sanitario->sexo == 'unisex')
                  <option value="hombres">Hombres</option>
                  <option value="mujeres">Muejes</option>
                  <option value="unisex" selected>Unisex</option>
                @else
                  <option value="hombres">Hombres</option>
                  <option value="mujeres">Muejes</option>
                  <option value="unisex">Unisex</option>
                @endif
            </select>
        </div>
    </div>



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
