@extends('layouts.formulario_edit_general')

@section('title' , "Editar curso")
@section("objeto_informacion", "editar un curso")

@section('ruta_regresar')
    {{action('Inciso9_1_7Controller@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['CursoController@update', $curso->nombre, $url_regreso],
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


    <div class="form-group">
        <label for="donde" class="col-sm-4 control-label" data-toggle="tooltip" title="Donde se da">
            Aula
        </label>

        <?php
            $temp = array();
        ?>
        @foreach($curso->aulas as $aula)
            <?php
                $temp[] = $aula->pivot->aula_id
            ?>
        @endforeach
        
        <div class="col-sm-8">
            <select name="donde" class="form-control">
                @if(!$aulas->isEmpty())
                    @foreach($aulas as $aula)
                        @if(in_array($aula->id, $temp))
                            <option value="{{$aula->nombre}}" selected>{{$aula->nombre}}</option>
                        @else
                            <option value="{{$aula->nombre}}">{{$aula->nombre}}</option>
                        @endif
                    @endforeach
                @else
                    <option value="no hay aulas">
                        No hay aulas
                    </option>
                @endif
            </select>
        </div>
    </div>


	

@endsection
