@extends('layouts.formulario_edit_general')

@section('title' , "Agregar cubiculo")
@section("objeto_informacion", "editar $cubiculo->nombre")

@section('ruta_regresar')
    {{action('CubiculoMiniController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['CubiculoMiniController@update', $cubiculo->nombre, $url_regreso],
                'class' => 'form-horizontal',
                'files' => true])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre escrito en las puertas de los cubiculos")
        @slot("label_input", "Identificador del cubiculo")
        @slot("placeholder_input", "Cubiculo 1 3K-4")
        @slot("valor_default", $cubiculo->nombre)
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "profesor")
        @slot("tooltip_input", "Profesor asignado al cubiculo")
        @slot("label_input", "Profesor")
        @slot("placeholder_input", "Julio Waissman Villanova")
        @slot("valor_default", $cubiculo->profesor)
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
