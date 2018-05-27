@extends('layouts.formulario_edit_general')

@section('title' , "Editar software")
@section("objeto_informacion", "un software")

@section('ruta_regresar')
    {{action('SoftwareController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['SoftwareController@update', $software->nombre],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del software")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre del software")
        @slot("valor_default", $software->nombre)
        @section("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "version")
        @slot("tooltip_input", "Version del software")
        @slot("label_input", "Version")
        @slot("placeholder_input", "1.0")
        @slot("valor_default", $software->version)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "disponibilidad")
        @slot("tooltip_input", "Como fue que se consiguio el software. Si se tiene licencia o si es libre")
        @slot("label_input", "Disponibilidad")
        @slot("placeholder_input", "Libre")
        @slot("valor_default", $software->disponibilidad)
    @endcomponent

@endsection

