@extends('layouts.formulario_create_general')

@section('title' , "Formulario 9.1.7")
@section("objeto_informacion", "un curso")

@section('ruta_regresar')
    {{action('AulaController@index')}}
@endsection

@section('accion')
    {{action('AulaController@store')}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre del Curso")
        @slot("label_input", "Nombre")
        @slot("placeholder_input", "Nombre del Curso")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "periodo")
        @slot("tooltip_input", "Período en el que fue impartido")
        @slot("label_input", "Periodo")
        @slot("placeholder_input", "100")
        @slot("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "no_grupo")
        @slot("tooltip_input", "Identificador del grupo")
        @slot("label_input", "Numero del grupo")
        @slot("placeholder_input", "1")
        @slot("extra", "required")
    @endcomponent
	
	@component("layouts.text_input")
        @slot("nombre_input", "no_estudiantes")
        @slot("tooltip_input", "De LCC")
        @slot("label_input", "Numero de estudiantes")
        @slot("placeholder_input", "1")
        @slot("extra", "required")
    @endcomponent

	@component("layouts.select_input")
        @slot("nombre_input", "departamento")
        @slot("tooltip_input", "Responsable del curso")
        @slot("label_input", "Departamento")
        @slot("extra", "required")
        @slot('opciones')
            @foreach($carreras as $carrera)
                <option value="{{$carrera}}">
                    {{$carrera}}
                </option>
            @endforeach
        @endslot
    @endcomponent

<!-- **************************** Por si hay relacion **************************** -->
	<div class="form-group">
		<label for="localizacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Seleccione la ubicación del equipo">Localización:  </label>

		<div class="col-sm-8">
			<select name="localizacion" class="form-control">
				@foreach($aulas as $aula)
					<option value="{{$aula->nombre}}">{{$aula->nombre}}</option>
				@endforeach
			</select>
		</div>
	</div>


	<div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
			<input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
	</div>
@endsection
