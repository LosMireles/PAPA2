@extends('layouts.formulario_create_general')

@section('title' , "Agregar software")
@section("objeto_informacion", "agregar software")

@section('ruta_regresar')
    {{action('SoftwareController@index')}}
@endsection

@section('accion')
    {{action('SoftwareController@store', $url_regreso)}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del software")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre del software")
        @slot("extra", "maxlength=80 required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "version")
        @slot("tooltip_input", "Versión  del software")
        @slot("label_input", "Versión ")
        @slot("placeholder_input", "1.0")
        @slot("extra", "maxlength=80")
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "clase")
        @slot("tooltip_input", "Si el software es un lenguaje, una herramienta case, un manejador de bases de datos, paqueteria o algun otro")
        @slot("label_input", "Clase")
        @slot('opciones')
            @foreach($clases as $clase)
                @component('layouts.option_general')
                    @slot('var', $clase)
                @endcomponent
            @endforeach
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "disponibilidad")
        @slot("tooltip_input", "Como fue que se consiguio el software. Si se tiene licencia o si es libre")
        @slot("label_input", "Disponibilidad")
        @slot("placeholder_input", "Libre")
        @slot("extra", "maxlength=80")
    @endcomponent

@endsection

