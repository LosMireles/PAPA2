@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.7
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.7: Debe contarse con al menos una red de área
   local y una amplia, con software adecuado para las aplicaciones más comunes del
  programa.</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_2_7Controller@update', $id]])}}
@endsection

@php
    $variable = "inciso_9_2_7";
@endphp
<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')

	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[0]->id}}" class="control-label">{{$preguntas[0]->titulo}}</label>

        <div>
            @if($preguntas[0]->respuesta == 'Si')
              <input type="radio" name="{{$preguntas[0]->id}}" value="Si" checked> Sí <br>
              <input type="radio" name="{{$preguntas[0]->id}}" value="No"> No
            @elseif($preguntas[0]->respuesta == 'No')
              <input type="radio" name="{{$preguntas[0]->id}}" value="Si"> Sí <br>
              <input type="radio" name="{{$preguntas[0]->id}}" value="No" checked> No
            @else
              <input type="radio" name="{{$preguntas[0]->id}}" value="Si" checked> Sí <br>
              <input type="radio" name="{{$preguntas[0]->id}}" value="No"> No
            @endif
        </div>
    </div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[1]->id}}" class="control-label text-center">{{$preguntas[1]->titulo}}</label>

		<div>
            <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}" >{{$preguntas[1]->respuesta}}</textarea>
		</div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[2]->id}}" class="control-label">{{$preguntas[2]->titulo}}</label>

        <div>
            @if($preguntas[2]->respuesta == 'Si')
              <input type="radio" name="{{$preguntas[2]->id}}" value="Si" checked> Sí <br>
              <input type="radio" name="{{$preguntas[2]->id}}" value="No"> No
            @elseif($preguntas[2]->respuesta == 'No')
              <input type="radio" name="{{$preguntas[2]->id}}" value="Si"> Sí <br>
              <input type="radio" name="{{$preguntas[2]->id}}" value="No" checked> No
            @else
              <input type="radio" name="{{$preguntas[2]->id}}" value="Si" checked> Sí <br>
              <input type="radio" name="{{$preguntas[2]->id}}" value="No"> No
            @endif
        </div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[3]->id}}" class="control-label">{{$preguntas[3]->titulo}}</label>

        <div>
            @if($preguntas[3]->respuesta == 'Si')
              <input type="radio" name="{{$preguntas[3]->id}}" value="Si" checked> Sí <br>
              <input type="radio" name="{{$preguntas[3]->id}}" value="No"> No
            @elseif($preguntas[3]->respuesta == 'No')
              <input type="radio" name="{{$preguntas[3]->id}}" value="Si"> Sí <br>
              <input type="radio" name="{{$preguntas[3]->id}}" value="No" checked> No
            @else
              <input type="radio" name="{{$preguntas[3]->id}}" value="Si" checked> Sí <br>
              <input type="radio" name="{{$preguntas[3]->id}}" value="No"> No
            @endif
        </div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[4]->id}}" class="control-label">{{$preguntas[4]->titulo}}</label>

		<div>
            <textarea class="form-control" id="{{$preguntas[4]->id}}" name="{{$preguntas[4]->id}}">{{$preguntas[4]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[5]->id}}" class="control-label">{{$preguntas[5]->titulo}}</label>

		<div>
            <textarea class="form-control" id="{{$preguntas[5]->id}}" name="{{$preguntas[5]->id}}">{{$preguntas[5]->respuesta}}</textarea>
		</div>
	</div>

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN ------------- -->

@section('tablas_inciso_general')
    <h3 class="text-center">Listado de equipos soportado por la red</h3>
    <div class="row text-right" style="margin: 2px;">
    	 <a href="{{ action('EquipoController@create', $variable) }}" class="btn btn-success">Agregar equipo</a>
    </div>
    @component('layouts.componentes.tabla_incisos_agregar')
        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Serial equipo</th>
            <th>CPU</th>
            <th>Almacenamiento</th>
            <th>RAM</th>
            <th>Otras características</th>
            <th></th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($equipos as $equipo)
            <tr>
                <td>{{$equipo->serial}}</td>
                <td>{{$equipo->cpu}}</td>
                <td>{{$equipo->almacenamiento}}</td>
                <td>{{$equipo->ram}}</td>
                <td>{{$equipo->otras_caracteristicas}}</td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{ Form::open(['action' => ['EquipoController@edit', $equipo->serial, $variable]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['EquipoController@destroy', $equipo->serial, $variable]]) }}
                    @endslot
                @endcomponent

                <td>
                  <a href="{{action('EquipoController@crear_igual', $equipo->serial, $variable)}}" class="btn btn-success">Agregar igual</a>
                </td>

            </tr>
            @endforeach
        @endslot
    @endcomponent
    @if(count($equipos) == 0)
      <h2 class="text-center">No hay registros en la base de datos</h2>
    @endif
@endsection


<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

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
