@extends('layouts.insertar')

@section('title')
   insertar un espacio de asesorías
@endsection

@section('descripcion')
    <a href="{{action('AsesoriaController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Formulario para agregar un asesoria</h1>
@endsection

@section('accion')
   action = "{{action('AsesoriaController@store')}}"
@endsection

@section('contenido_formulario')
   	@component("layouts.select_input")
        @slot("nombre_input", "aula")
        @slot("tooltip_input", "En que aula se imparte")
        @slot("label_input", "Código del aula")
        @slot("extra", "required")
        @slot('opciones')
             @foreach($aulas as $aula)
                <option value="{{$aula->nombre}}">
                    {{$aula->nombre}}
                </option>
            @endforeach
        @endslot
    @endcomponent

@endsection
