@extends('layouts.formulario_create_general')

@section('title' , "Formulario 9.1.7")
@section("objeto_informacion", "agregar un curso")

@section('ruta_regresar')
    {{action('Inciso9_1_7Controller@index')}}
@endsection

@section('accion')
    {{action('CursoController@store', $url_regreso)}}
@endsection


@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del Curso")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre")
        @slot("extra", "maxlength=80 required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "periodo")
        @slot("tooltip_input", "Ciclo en el que se imparte")
        @slot("label_input", "Periodo")
        @slot("placeholder_input", "2018-2")
        @slot("extra", "maxlength=80")
    @endcomponent

	@component("layouts.text_input")
	    @slot("tipo", "number")
        @slot("nombre_input", "no_grupo")
        @slot("tooltip_input", "Número de grupo dado por la universidad")
        @slot("label_input", "Número grupo")
        @slot("placeholder_input", "1")
        @slot("extra", "min=0 max=1000")
    @endcomponent

	@component("layouts.text_input")
	    @slot("tipo", "number")
        @slot("nombre_input", "no_estudiantes")
        @slot("tooltip_input", "Número de estudiantes de LCC")
        @slot("label_input", "Número de estudiantes en el curso que pertenecen a LCC")
        @slot("placeholder_input", "1")
        @slot("extra", "min=0 max=40")
    @endcomponent

	@component("layouts.select_input")
        @slot("nombre_input", "departamento")
        @slot("tooltip_input", "A que licenciatura pertenece la materia")
        @slot("label_input", "Licenciatura")
        @slot("extra", "required")
        @slot('opciones')
             @foreach($licenciaturas as $licenciatura)
                <option value="{{$licenciatura}}">
                    {{$licenciatura}}
                </option>
            @endforeach
        @endslot
    @endcomponent

	@component("layouts.select_input")
        @slot("nombre_input", "donde")
        @slot("tooltip_input", "Aula donde se imparte")
        @slot("label_input", "Aula")
        @slot("extra", "required")
        @slot('opciones')
            @if(!$aulas->isEmpty())
                @foreach($aulas as $aula)
                    <option value="{{$aula->nombre}}">
                        {{$aula->nombre}}
                    </option>
                @endforeach
            @else
                <option value="no hay aulas">
                    No hay aulas
                </option>
            @endif
        @endslot
    @endcomponent
@endsection
