@extends('layouts.formulario_edit_general')

@section('title' , "Agregar cubiculo")
@section("objeto_informacion", "editar un cubículo")

@section('ruta_regresar')
    {{action('CubiculoController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['CubiculoController@update', $cubiculo->nombre, $url_regreso],
                'class' => 'form-horizontal'])}}
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

    @component("layouts.text_input")
        @slot("tipo", "number")
        @slot("nombre_input", "cantidad_equipo")
        @slot("tooltip_input", "Cantidad de computadoras que hay en el cubículo")
        @slot("label_input", "Cantidad de equipo")
        @slot("placeholder_input", "1")
        @slot("valor_default", $cubiculo->cantidad_equipo)
        @slot("extra", "min=0")
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

