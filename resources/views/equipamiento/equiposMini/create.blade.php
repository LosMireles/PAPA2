@extends('layouts.formulario_create_general')

@section('title' , "Agregar equipo")
@section("objeto_informacion", "agregar un equipo")

@section('ruta_regresar')
    {{action('Inciso9_2_5Controller@index')}}
@endsection

@section('accion')
    {{action('EquipoMiniController@store')}}
@endsection

@section('contenido_formulario')

    @component("layouts.text_input")
        @slot("nombre_input", "serial")
        @slot("tooltip_input", "Serial del equipo. Identificador del equipo")
        @slot("label_input", "Serial")
        @slot("placeholder_input", "NA00013")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "sistema_operativo")
        @slot("tooltip_input", "Sistema operativo principal que tiene el equipo")
        @slot("label_input", "Sistema operativo")
        @slot("placeholder_input", "Windows 10")
    @endcomponent

	@component("layouts.text_input")
        @slot("nombre_input", "marca")
        @slot("tooltip_input", "Fabricante del equipo")
        @slot("label_input", "Marca")
        @slot("placeholder_input", "Lanix")
    @endcomponent

@endsection

