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
    $variable = "inciso_9_2_2";
@endphp
<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
    <h3 class="text-center">Listado de software</h3>
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('SoftwareController@create', $variable) }}" class="btn btn-success">Agregar software</a>
  	</div>

    <table class="table table-hover">
        <caption>Softwares acomodados por su clase: lenguajes, herramientas CASE,
                 manejadores de bases de datos o de paqueteria general
        </caption>
        <!-- Estilo del subtitulo de las tablas -->
        <style type="text/css">
            caption {
              background-color: white;
              color: black;
              font-weight: bold;
            }
        </style>

        <thead style="background-color: #1b70f9; color: white;">
            <th>Lenguajes de programación</th>
            <th>Herramientas CASE</th>
            <th>Manejadores de base de datos</th>
            <th>Paquetería general</th>
            <th></th> <!-- Espacio para el boton de editar -->
            <th></th> <!-- Espacio para el boton eliminar -->
        </thead>
        <tbody>
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
        </tbody>
    </table>

    @if(count($lenguajes) == 0 && count($cases) == 0 && count($bds) == 0 && count($paqueterias) == 0)
      <h2 class="text-center">No hay registros en la base de datos</h2>
    @endif


    <table class="table table-hover">
        <caption>Softwares registrados</caption>
        <!-- Estilo del subtitulo de las tablas -->
        <style type="text/css">
            caption {
              background-color: white;
              color: black;
              font-weight: bold;
            }
        </style>

        <thead style="background-color: #1b70f9; color: white;">
            <th>Software</th>
            <th>Versión</th>
            <th>Clase</th>
            <th>Disponibilidad</th>
            <th></th> <!-- Espacio para el boton de editar -->
            <th></th> <!-- Espacio para el boton eliminar -->
        </thead>
        <tbody>
            @foreach($softwares as $software)
            <tr>
            	<td>{{$software->nombre}}</td>
                <td>{{$software->version}}</td>
            	<td>{{$software->clase}}</td>
                <td>{{$software->disponibilidad}}</td>


                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{Form::open(['action' => ['SoftwareController@edit',
                                                   $software->nombre,
                                                   $variable]])}}
                    @endslot
                @endcomponent


                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                      {{Form::open(['action' => ['SoftwareController@destroy', $software->nombre, $variable]])}}
                    @endslot
                @endcomponent

            </tr>
            @endforeach
        </tbody>
    </table>

    @if(count($softwares) == 0)
      <h2 class="text-center">No hay registros en la base de datos</h2>
    @endif

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
