@extends('layouts.formulario_create_general')

@section('title' , "Agregar un aula")
@section("objeto_informacion", "crear un aula")

@section('accion')
    {{action('AulaController@store', $url_regreso)}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre escrito en las puertas")
        @slot("label_input", "Código del aula")
        @slot("placeholder_input", "Código de aula")
        @slot("extra", "maxlength=80 required")
    @endcomponent

    @component("layouts.text_input")
        @slot("tipo", "number")
        @slot("nombre_input", "superficie")
        @slot("tooltip_input", "Superficie en metros cuadrados que abarca el aula")
        @slot("label_input", "Superficie")
        @slot("placeholder_input", "100")
        @slot("extra", "step=0.1 min=0 max=10000")
    @endcomponent

    @component("layouts.text_input")
        @slot("tipo", "number")
        @slot("nombre_input", "capacidad")
        @slot("tooltip_input", "Capacidad máxima de personas que caben en el aula")
        @slot("label_input", "Capacidad")
        @slot("placeholder_input", "10")
        @slot("extra", "min=0 max=10000")
    @endcomponent

	<div class="form-group">
		<h3 class="text-center">En una escala del 1 al 4 (1 es peor, 4 es mejor), califique la calidad de:</h3>
	</div>

    @component("layouts.select_input")
        @slot("nombre_input", "pizarron")
        @slot("tooltip_input", "Calidad en la que se encuentra el pizarrón")
        @slot("label_input", "Pizarrón")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "iluminacion")
        @slot("tooltip_input", "Calidad de la Illuminación en el aula")
        @slot("label_input", "Iluminación")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "aislamiento_ruido")
        @slot("tooltip_input", "Que tan aislado está del ruido anterior")
        @slot("label_input", "Aislamiento ruido")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "ventilacion")
        @slot("tooltip_input", "Califique la ventilación en el aula")
        @slot("label_input", "Ventilación")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "temperatura")
        @slot("tooltip_input", "Califique la calidad de la temperatura en el aula")
        @slot("label_input", "Temperatura")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "espacio")
        @slot("tooltip_input", "Califique el espacio en el aula")
        @slot("label_input", "Espacio")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "mobilario")
        @slot("tooltip_input", "Califique la calidad del mobiliario en el aula")
        @slot("label_input", "Mobiliario")
        @slot('opciones')
            @foreach($calificaciones as $numero)
                <option value="{{$numero}}">
                    {{$numero}}
                </option>
            @endforeach
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "conexiones")
        @slot("tooltip_input", "Califique la calidad de las conexiones de todo tipo en el aula")
        @slot("label_input", "Conexiones")
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
        @slot("nombre_input", "sillas_paleta")
        @slot("tooltip_input", "Sillas con paleta")
        @slot("label_input", "Sillas con paleta")
    @endcomponent

    @component("layouts.checkbox_input")
        @slot("nombre_input", "mesas_trabajo")
        @slot("tooltip_input", "Mesas donde se puede trabajar")
        @slot("label_input", "Mesas de trabajo")
    @endcomponent

    @component("layouts.checkbox_input")
        @slot("nombre_input", "isotopica")
        @slot("tooltip_input", "Vista")
        @slot("label_input", "Isotópica")
    @endcomponent

    @component("layouts.checkbox_input")
        @slot("nombre_input", "estrado")
        @slot("tooltip_input", "Elevación para el profesor")
        @slot("label_input", "Estrado")
    @endcomponent

	<div class="form-group">
		<h3 class="text-center">Evidencias fotográficas: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
			<input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
	</div>
@endsection
