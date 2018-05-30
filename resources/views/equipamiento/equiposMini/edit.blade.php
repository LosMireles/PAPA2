@extends('layouts.formulario_edit_general')

@section('title' , "Editar equipo")
@section("objeto_informacion", "editar un equipo")

@section('ruta_regresar')
    {{action('Inciso9_2_5Controller@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['EquipoController@update', $equipo->serial, $url_regreso],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

    @component("layouts.text_input")
        @slot("nombre_input", "serial")
        @slot("tooltip_input", "Serial del equipo. Identificador del equipo")
        @slot("label_input", "Serial")
        @slot("placeholder_input", "NA00013")
        @slot("valor_default", $equipo->serial)
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "sistema_operativo")
        @slot("tooltip_input", "Sistema operativo principal que tiene el equipo")
        @slot("label_input", "Sistema operativo")
        @slot("placeholder_input", "Windows 10")
        @slot("valor_default", $equipo->sistema_operativo)
    @endcomponent

	@component("layouts.text_input")
        @slot("nombre_input", "marca")
        @slot("tooltip_input", "Fabricante del equipo")
        @slot("label_input", "Marca")
        @slot("placeholder_input", "Lanix")
		@slot("valor_default", $equipo->marca)
    @endcomponent

@endsection

