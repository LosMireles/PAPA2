@extends('layouts.formulario_edit_general')

@section('title' , "Editar aula")
@section("objeto_informacion", "editar un aula")

@section('ruta_regresar')
    {{action('AulaController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['AulaController@update', $aula->nombre, $url_regreso],
                'class' => 'form-horizontal',
                'files' => true])}}
@endsection

@section('contenido_formulario')
    @component("layouts.text_input")
        @slot("nombre_input", "nombre")
        @slot("tooltip_input", "Nombre escrito en las puertas")
        @slot("label_input", "Código del aula")
        @slot("placeholder_input", "Código de aula")
        @slot("valor_default", $aula->nombre)
        @section("extra", "required")
    @endcomponent

	@component("layouts.text_input")
	    @slot("tipo", "number")
        @slot("nombre_input", "superficie")
        @slot("tooltip_input", "Superficie en metros cuadrados que abarca el aula")
        @slot("label_input", "Superficie")
        @slot("placeholder_input", "100")
		@slot("valor_default", $aula->superficie)
        @slot("extra", "slot=0.1 min=0")
    @endcomponent

    @component("layouts.text_input")
	    @slot("tipo", "number")
        @slot("nombre_input", "capacidad")
        @slot("tooltip_input", "Capacidad máxima del aula")
        @slot("label_input", "Capacidad máxima de personas")
        @slot("placeholder_input", "10")
        @slot("valor_default", $aula->capacidad)
        @slot("extra", "min=0")
    @endcomponent


	<div class="form-group">
		<h3 class="text-center">En una escala del 1 al 4 (1 es peor, 4 es mejor), califique la calidad de:</h3>
	</div>

    @component("layouts.select_input")
        @slot("nombre_input", "pizarron")
        @slot("tooltip_input", "Calidad en la que se encuentra el pizarrón")
        @slot("label_input", "Pizarrón")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->pizarron)
            @endcomponent
        @endslot
    @endcomponent


    @component("layouts.select_input")
        @slot("nombre_input", "iluminacion")
        @slot("tooltip_input", "Calidad de la Illuminación en el aula")
        @slot("label_input", "Iluminación")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->iluminacion)
            @endcomponent
        @endslot
    @endcomponent

    @component("layouts.select_input")
        @slot("nombre_input", "aislamiento_ruido")
        @slot("tooltip_input", "Que tan aislado está del ruido anterior")
        @slot("label_input", "Aislamiento al ruido")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->aislamiento_ruido)
            @endcomponent
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "ventilacion")
        @slot("tooltip_input", "Califique la ventilación en el aula")
        @slot("label_input", "Ventilación")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->ventilacion)
            @endcomponent
        @endslot
    @endcomponent


    @component("layouts.select_input")
        @slot("nombre_input", "temperatura")
        @slot("tooltip_input", "Califique la calidad de la temperatura en el aula")
        @slot("label_input", "Temperatura")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->temperatura)
            @endcomponent
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "espacio")
        @slot("tooltip_input", "Califique el espacio en el aula")
        @slot("label_input", "Espacio")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->espacio)
            @endcomponent
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "mobilario")
        @slot("tooltip_input", "Califique la calidad del mobiliari en el aula")
        @slot("label_input", "Mobiliario")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->mobilario)
            @endcomponent
        @endslot
    @endcomponent



    @component("layouts.select_input")
        @slot("nombre_input", "conexiones")
        @slot("tooltip_input", "Califique la calidad de las conexiones de todo tipo en el aula")
        @slot("label_input", "Conexiones")
        @section('extra', "required")
        @slot('opciones')
            @component('layouts.option_foreach_if')
                @slot('conjunto_variables', $calificaciones)
                @slot('var', $aula->conexiones)
            @endcomponent
        @endslot
    @endcomponent

	<div class="form-group">
		<h3 class="text-center">Mencione si el aula tiene: </h3>
	</div>

    @component("layouts.checkbox_input2")
        @slot("nombre_input", "sillas_paleta")
        @slot("tooltip_input", "Sillas con paleta")
        @slot("label_input", "Sillas con paleta")
        @slot("variable", $aula->sillas_paleta)
    @endcomponent

    @component("layouts.checkbox_input2")
        @slot("nombre_input", "mesas_trabajo")
        @slot("tooltip_input", "Mesas dondes se puede trabajar")
        @slot("label_input", "Mesas de trabajo")
        @slot("variable", $aula->mesas_trabajo)
    @endcomponent

    @component("layouts.checkbox_input2")
        @slot("nombre_input", "isotopica")
        @slot("tooltip_input", "Vista")
        @slot("label_input", "Isotopica")
        @slot("variable", $aula->isotopica)
    @endcomponent

    @component("layouts.checkbox_input2")
        @slot("nombre_input", "estrado")
        @slot("tooltip_input", "Elevación para el profesor")
        @slot("label_input", "Estrado")
        @slot("variable", $aula->estrado)
    @endcomponent


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
