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

<!-------------- LAS PREGUNTAS Y SUS RESPUESTAS--------------->

@section('contenido_formulario')

	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[0]->id}}" class="control-label">{{$preguntas[0]->titulo}}</label>

		<div>
			<input type="text" class="form-control" name="{{$preguntas[0]->id}}" value="{{$preguntas[0]->respuesta}}">
		</div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[1]->id}}" class="control-label text-center">{{$preguntas[1]->titulo}}</label>

		<div>
			<input type="text" class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}" value="{{$preguntas[1]->respuesta}}">
		</div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[2]->id}}" class="control-label">{{$preguntas[2]->titulo}}</label>

		<div>
			<input type="text" class="form-control" id="{{$preguntas[2]->id}}" name="{{$preguntas[2]->id}}" value="{{$preguntas[2]->respuesta}}">
		</div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[3]->id}}" class="control-label">{{$preguntas[3]->titulo}}</label>

		<div>
			<input type="text" class="form-control" id="{{$preguntas[3]->id}}" name="{{$preguntas[3]->id}}" value="{{$preguntas[3]->respuesta}}">
		</div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas[4]->id}}" class="control-label">{{$preguntas[4]->titulo}}</label>

		<div>
			<input type="text" class="form-control" id="{{$preguntas[4]->id}}" name="{{$preguntas[4]->id}}" value="{{$preguntas[4]->respuesta}}">
		</div>
	</div>

@endsection

<!-------------- LAS TABLAS QUE CORRESPONDAN--------------->

@section('tablas_inciso_general')
    @component('layouts.componentes.tabla_incisos_agregar')
        @slot('controlador_agregar')
            {{Form::open(['action' => ['EquipoController@create']])}}
        @endslot

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Serial equipo</th>
            <th>CPU</th>
            <th>Almacenamiento</th>
            <th>RAM</th>
            <th>Otras caracteristicas</th>
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
                        {{ Form::open(['action' => ['EquipoController@edit', $equipo->serial]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['EquipoController@edit', $equipo->serial]]) }}
                    @endslot
                @endcomponent

            </tr>
            @endforeach
        @endslot
    @endcomponent
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
