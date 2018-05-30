@extends('layouts.formulario_edit_general')

@section('title' , "Editar equipo")
@section("objeto_informacion", "editar el equipo $equipo->serial")

@section('ruta_regresar')
    {{action('EquipoController@index')}}
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

    @component("layouts.select_input")
        @slot("nombre_input", "tipo")
        @slot("tooltip_input", "Que tipo de equipo es, de computo, redes, audiovisual o de servidor")
        @slot("label_input", "tipo")
        @slot("opciones")
            @foreach($tipos as $tipo)
                @if($equipo->tipo == $tipo)
                    @component('layouts.option_general')
                        @slot('var', $tipo)
                        @slot('extra', "selected")
                    @endcomponent
                @else
                    @component('layouts.option_general')
                        @slot('var', $tipo)
                    @endcomponent
                @endif
            @endforeach
        @endslot
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
        @slot("tooltip_input", "Marca del manufacturador. Ejemplo LANIX")
        @slot("label_input", "Marca")
        @slot("placeholder_input", "LANIX")
        @slot("valor_default", $equipo->marca)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "cpu")
        @slot("tooltip_input", "Que especificaciones tiene la CPU del equipo")
        @slot("label_input", "CPU")
        @slot("placeholder_input", "Qualcorexeon X5460 2X 6MB Cache")
        @slot("valor_default", $equipo->cpu)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "ram")
        @slot("tooltip_input", "Que especificaciones tiene la memoria RAM del equipo")
        @slot("label_input", "RAM")
        @slot("placeholder_input", "8GB 667 MHZ (4X2 GB)")
        @slot("valor_default", $equipo->ram)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "almacenamiento")
        @slot("tooltip_input", "Que especificaciones tiene la memoria de almacenamiento del equipo")
        @slot("label_input", "Memoria almacenamiento")
        @slot("placeholder_input", "HDD 300 GB")
        @slot("valor_default", $equipo->almacenamiento)
    @endcomponent

    @component("layouts.textarea_input")
        @slot("nombre_input", "otras_caracteristicas")
        @slot("tooltip_input", "Alguna otra caracteristica importante a tomar en cuenta")
        @slot("label_input", "Otras caracteristicas")
        @slot("placeholder_input", "Tarjeta grafica")
        @slot("valor_default", $equipo->otras_caracteristicas)
    @endcomponent

@endsection

