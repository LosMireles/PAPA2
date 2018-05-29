@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.5
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.5: Se debe contar con al menos tres plataformas
   de cómputo diferentes que estén disponibles y accesibles para los estudiantes y
  el personal docente del programa</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_2_5Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="control-label">
			    {{$pregunta->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">{{$pregunta->respuesta}}</textarea>
			</div>
		</div>
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->
@section('tablas_inciso_general')
    <h3 class="text-center">Listado de plataformas</h3>
    <div class="row text-right" style="margin: 2px;">
    	 <a href="{{ action('EquipoMiniController@create') }}" class="btn btn-success">Agregar plataforma</a>
    </div>
    @component('layouts.componentes.tabla_incisos_agregar')
        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Serial equipo</th>
            <th>Sistema Operativo</th>
			<th>Marca</th>
            <th></th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($equipos as $equipo)
            <tr>
                <td>{{$equipo->serial}}</td>
                <td>{{$equipo->sistema_operativo}}</td>
				<td>{{$equipo->marca}}</td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{ Form::open(['action' => ['EquipoMiniController@edit', $equipo->serial]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['EquipoMiniController@destroy', $equipo->serial]]) }}
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
