@extends('layouts.formulario_edit_general')

@section('title' , "Agregar software")
@section("objeto_informacion", "un software")

@section('ruta_regresar')
    {{action('SoftwareController@index')}}
@endsection

@section('accion')
    {{action('SoftwareController@update')}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del software")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre del software")
        @slot("valor_default", $software->nombre)
        @slot("extra", "required")
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "clase")
        @slot("tooltip_input", "Si el software es un lenguaje, una herramienta case, un manejador de bases de datos, paqueteria o algun otro")
        @slot("label_input", "clase")
        @slot("opciones")
            @foreach($clases as $clase)
                @component('layouts.option_general')
                    @slot('var', $clase)
                @endcomponent
            @endforeach
        @endslot
    @endcomponent

@endsection

