@extends('layouts.formulario_edit_general')

@section('title' , "Editar curso")
@section("objeto_informacion", "un curso")

@section('ruta_regresar')
    {{action('AuditorioController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['AuditorioController@update', $auditorio->nombre],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del Auditorio")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre")
        @slot("extra", "required")
		@slot("valor_default", $auditorio->nombre)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "Capacidad")
        @slot("tooltip_input", "Maxima")
        @slot("label_input", "Capacidad")
        @slot("placeholder_input", "100")
        @slot("extra", "required")
		@slot("valor_default", $auditorio->Capacidad)
    @endcomponent
@endsection
