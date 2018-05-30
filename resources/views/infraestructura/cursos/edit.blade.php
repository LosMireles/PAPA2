@extends('layouts.formulario_edit_general')

@section('title' , "Editar curso")
@section("objeto_informacion", "editar un curso")

@section('ruta_regresar')
    {{action('Inciso9_1_7Controller@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['CursoController@update', $curso->nombre],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del Curso")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre")
        @slot("extra", "required")
		@slot("valor_default", $curso->nombre)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "periodo")
        @slot("tooltip_input", "Ciclo en el que se imparte")
        @slot("label_input", "Periodo")
        @slot("placeholder_input", "2018-2")
        @slot("extra", "required")
		@slot("valor_default", $curso->periodo)
    @endcomponent

	@component("layouts.text_input")
        @slot("nombre_input", "no_estudiantes")
        @slot("tooltip_input", "Pertenecientes a LCC")
        @slot("label_input", "Numero de estudiantes")
        @slot("placeholder_input", "1")
        @slot("extra", "required")
		@slot("valor_default", $curso->no_estudiantes)
    @endcomponent

	@component("layouts.text_input")
        @slot("nombre_input", "no_grupo")
        @slot("tooltip_input", "Identificador")
        @slot("label_input", "Numero de grupo ")
        @slot("placeholder_input", "1")
        @slot("extra", "required")
		@slot("valor_default", $curso->no_grupo)
    @endcomponent

	@component("layouts.select_input")
        @slot("nombre_input", "departamento")
        @slot("tooltip_input", "Que lo imparte")
        @slot("label_input", "Departamento")
        @slot("extra", "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $licenciaturas)
                @slot('var', $curso->departamento)
            @endcomponent
        @endslot
    @endcomponent

	@component("layouts.select_input")
        @slot("nombre_input", "donde")
        @slot("tooltip_input", "Donde se da")
        @slot("label_input", "Aula")
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

