@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.2
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.2: Todo programa debe contar como mínimo con
   el siguiente software: Lenguajes de programación, herramientas CASE, manejadores
  de base de datos y paquetería en general</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_2_2Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

@section('contenido_formulario')
	@foreach($preguntas as $pregunta)
	    @component('layouts.textarea_input')
            @slot("nombre_input", $pregunta->id)
            @slot("label_input", $pregunta->titulo)
            @slot("valor_default", $pregunta->respuesta)
        @endcomponent
	@endforeach
@endsection

@php
    $variable = "inciso_9_1_2";
@endphp
<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
    <h3 class="text-center">Listado de software</h3>
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('SoftwareController@create', $variable) }}" class="btn btn-success">Agregar software</a>
  	</div>

    @component('layouts.componentes.tabla_incisos_agregar')

        <h4>Tabla de lenguajes, herramientas case, manejadores de bases de datos y paqueteria</h4>
        @slot('cabeza_tabla')
            <th>Lenguajes de programación</th>
            <th>Herramientas CASE</th>
            <th>Manejadores de base de datos</th>
            <th>Paquetería general</th>
        @endslot

        @slot('cuerpo_tabla')
            @for($i = 0; $i < max(array(sizeof($lenguajes),
                                        sizeof($cases),
                                        sizeof($bds),
                                        sizeof($paqueterias))); $i++)
            <tr>
                <td>
            @if($i < sizeof($lenguajes))
                    {{$lenguajes[$i]}} <br>
            @endif
                </td>

                <td>
            @if($i < sizeof($cases))
                    {{$cases[$i]}} <br>
            @endif
                </td>

                <td>
            @if($i < sizeof($bds))
                    {{$bds[$i]}} <br>
            @endif
                </td>

                <td>
            @if($i < sizeof($paqueterias))
                    {{$paqueterias[$i]}} <br>
            @endif
                </td>
            </tr>
            @endfor
        @endslot
    @endcomponent
@endsection

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

<!-- ------------ FIN SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->
    @section('boton_guardar')
        <div class="text-center">

          <div>
            <label for="terminado" class="control-label">
              Marque esta casilla si termino de responder:
            </label>
            @if ( $preguntas[0]->estado == 1)
              <input type="checkbox" name="terminado" value="si" checked>
            @else
              <input type="checkbox" name="terminado" value="si">
            @endif
          </div>

            {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
            {{ Form::close() }}
        </div>
    @endsection

<!-- ------------ FIN SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->
@section('boton_guardar')
    <div class="text-center">

      <div>
        <label for="terminado" class="control-label">
          Marque esta casilla si termino de responder:
        </label>
        @if ( $preguntas[0]->estado == 1)
          <input type="checkbox" name="terminado" value="si" checked>
        @else
          <input type="checkbox" name="terminado" value="si">
        @endif
      </div>

        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

