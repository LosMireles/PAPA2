@extends('layouts.formulario_edit_general')

@section('title' , "Editar software")
@section("objeto_informacion", "editar software")

@section('ruta_regresar')
    {{action('SoftwareController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['SoftwareController@update', $software->nombre, $url_regreso],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del software")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre del software")
        @slot("valor_default", $software->nombre)
        @slot("extra", "maxlength=80 required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "version")
        @slot("tooltip_input", "Versión del software")
        @slot("label_input", "Versión")
        @slot("placeholder_input", "1.0")
        @slot("valor_default", $software->version)
        @slot("extra", "maxlength=80")
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "clase")
        @slot("tooltip_input", "Si el software es un lenguaje, una herramienta case, un manejador de bases de datos, paqueteria o algun otro")
        @slot("label_input", "Clase")
        @slot("opciones")
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $clases)
                @slot('var', $software->clase)
            @endcomponent
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "disponibilidad")
        @slot("tooltip_input", "Como fue que se consiguio el software. Si se tiene licencia o si es libre")
        @slot("label_input", "Disponibilidad")
        @slot("placeholder_input", "Libre")
        @slot("valor_default", $software->disponibilidad)
        @slot("extra", "maxlength=80")
    @endcomponent

@endsection

