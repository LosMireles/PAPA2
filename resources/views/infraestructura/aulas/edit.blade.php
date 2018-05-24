@extends('layouts.formulario_edit_general')

@section('title' , "Editar aula")
@section("objeto_informacion", "un aula")

@section('ruta_regresar')
    {{action('AulaController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['AulaController@update', $aula->Tipo],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "Tipo")
        @slot("tooltip_input", "Nombre escrito en las puertas")
        @slot("label_input", "Código del aula")
        @slot("placeholder_input", "Código de aula")
        @slot("valor_default", $aula->Tipo)
        @section("extra", "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "Capacidad")
        @slot("tooltip_input", "Capacidad máxima del aula")
        @slot("label_input", "Capacidad máxima de personas")
        @slot("placeholder_input", "10")
        @slot("valor_default", $aula->Capacidad)
        @section('extra', "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "CantidadAV")
        @slot("tooltip_input", "Cantidad de equipo audiovisual hay en el aula")
        @slot("label_input", "Cantidad de equipo audiovisual")
        @slot("placeholder_input", "1")
        @slot("valor_default", $aula->CantidadAV)
        @section('extra', "required")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "CantidadEquipo")
        @slot("tooltip_input", "Cantidad de computadoras hay en el aula")
        @slot("label_input", "Cantidad de computadoras")
        @slot("placeholder_input", "1")
        @slot("valor_default", $aula->CantidadEquipo)
        @section('extra', "required")
    @endcomponent

	<div class="form-group">
		<h3 class="text-center">En una escala del 1 al 4 (1 es peor, 4 es mejor), califique la calidad de:</h3>
	</div>

    @component("layouts.select_input")
        @slot("nombre_input", "Pizarron")
        @slot("tooltip_input", "Calidad en la que se encuentra el pizarrón")
        @slot("label_input", "Pizarrón")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                @if($aula->Pizarron == $numero)
                    <option value="{{$numero}}" selected>
                        {{$numero}}
                    </option>
                @else
                    <option value="{{$numero}}">
                        {{$numero}}
                    </option>
                @endif
            @endforeach
        @endslot
    @endcomponent


    @component("layouts.select_input")
        @slot("nombre_input", "Illuminacion")
        @slot("tooltip_input", "Calidad de la Illuminación en el aula")
        @slot("label_input", "Illuminación")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                @if($aula->Illuminacion == $numero)
                    <option value="{{$numero}}" selected>
                        {{$numero}}
                    </option>
                @else
                    <option value="{{$numero}}">
                        {{$numero}}
                    </option>
                @endif
            @endforeach
        @endslot
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "AislamientoR")
        @slot("tooltip_input", "Que tan aislado está del ruido anterior")
        @slot("label_input", "Aislamiento al ruido")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "Ventilacion")
        @slot("tooltip_input", "Califique la ventilación en el aula")
        @slot("label_input", "Ventilación")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent


    @component("layouts.select_input")
        @slot("nombre_input", "Temperatura")
        @slot("tooltip_input", "Califique la calidad de la temperatura en el aula")
        @slot("label_input", "Temperatura")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "Espacio")
        @slot("tooltip_input", "Califique el espacio en el aula")
        @slot("label_input", "Espacio")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "Mobilario")
        @slot("tooltip_input", "Califique la calidad del mobiliari en el aula")
        @slot("label_input", "Mobiliario")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "Conexiones")
        @slot("tooltip_input", "Califique la calidad de las conexiones de todo tipo en el aula")
        @slot("label_input", "Conexiones")
        @section('extra', "required")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent

	<div class="form-group">
		<h3 class="text-center">Mencione si el aula tiene: </h3>
	</div>

    @component("layouts.checkbox_input")
        @slot("nombre_input", "SillasPaleta")
        @slot("tooltip_input", "Sillas con paleta")
        @slot("label_input", "Sillas con paleta")
    @endcomponent

    @component("layouts.checkbox_input")
        @slot("nombre_input", "MesasTrabajo")
        @slot("tooltip_input", "Mesas dondes se puede trabajar")
        @slot("label_input", "Mesas de trabajo")
    @endcomponent

    @component("layouts.checkbox_input")
        @slot("nombre_input", "Isotopica")
        @slot("tooltip_input", "Vista")
        @slot("label_input", "Isotopica")
    @endcomponent

    @component("layouts.checkbox_input")
        @slot("nombre_input", "Estrado")
        @slot("tooltip_input", "Elevación para el profesor")
        @slot("label_input", "Estrado")
    @endcomponent


	<div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
			<input type='file' class="form-control" name='Fotografias' id="Fotografias" accept=".jpg, .png, .jpeg">
		</div>
	</div>
@endsection

