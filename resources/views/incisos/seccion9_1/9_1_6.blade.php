@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.6
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.6: Las aulas deben ser funcionales, disponer
   de espacio suficiente para cada estudiante y tener las condiciones adecuadas de
  higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido
 y mobiliario</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_6Controller@update', $id],
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

@section('boton_guardar')
  <div class="containerdivNewLine">
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
  </div>
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('AulaController@create') }}" class="btn btn-success">Agregar</a>
  	</div>

	@component('layouts.componentes.tabla_incisos_agregar')
		@slot('cabeza_tabla')
		    <th>Titulo</th>
		    <th>Respuesta</th>
		@endslot

		@slot('cuerpo_tabla')
			@foreach ($aulas as $aula)
			<tr>

                <td>
                    Nombre: <br>
                    Superficie: <br>
                    Capacidad: <br>
                    Pizarron: <br>
                    Iluminacion: <br>
                    Aislamiento_ruido: <br>
                    Ventilacion: <br>
                    Temperatura: <br>
                    Espacio: <br>
                    Mobilario: <br>
                    Conexiones: <br>
                    Sillas_paleta: <br>
                    Mesas_trabajo: <br>
                    Isotopica: <br>
                    Estrado: <br>
                    Asesoria:
                </td>

                <td>
                    {{ $aula->nombre}} <br>
                    {{ $aula->superficie }} <br>
                    {{ $aula->capacidad }} <br>
                    {{ $aula->pizarron}} <br>
                    {{ $aula->iluminacion}} <br>
                    {{ $aula->aislamiento_ruido}} <br>
                    {{ $aula->ventilacion}} <br>
                    {{ $aula->temperatura}} <br>
                    {{ $aula->espacio}} <br>
                    {{ $aula->mobilario}} <br>
                    {{ $aula->conexiones}} <br>

                    @if($aula->sillas_paleta)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->mesas_trabajo)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->isotopica)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->estrado)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->asesoria)
                        Si
                    @else
                        No
                    @endif
                        hay <br>
                </td>

                <td>
                    <a href="{{ action('AulaController@edit', $aula->nombre) }}" class="btn btn-warning">Editar</a>
                </td>

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{Form::open(['action' => ['AulaController@destroy', $aula->nombre]])}}
                    @endslot
                @endcomponent

			</tr>
			@endforeach
		@endslot
	@endcomponent
@endsection
