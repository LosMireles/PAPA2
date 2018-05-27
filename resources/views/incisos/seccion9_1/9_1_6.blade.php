@extends('layouts.inciso_general_igual')

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
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}"></textarea>
			</div>
		</div>
	@endforeach
@endsection

@section('boton_guardar')
  <div class="containerdivNewLine">
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
  </div>
@endsection

@section('evidencias_tabla')
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('AulaController@create') }}" class="btn btn-success">Agregar</a>
  	</div>
<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->
	@component('layouts.componentes.tabla_incisos_agregar')
		slot('cabeza_tabla')
		<tr>
		    <th>Nombre</th>
		    <th>Superfice</th>
		    <th>Cap. máxima</th>
		</tr>
		@endslot

		@slot('cuerpo_tabla')
			@foreach ($aulas as $aula)
			<tr>
				<td>{{ $aula->nombre}}</td>
				<td>{{ $aula->superficie }}</td>
				<td>{{ $aula->capacidad }}</td>
			<td>
				<td>  
				      <a href="{{ action('AulaController@edit', $aula->nombre) }}" class="btn btn-warning">Editar</a>
				    </td>
			</td>
			<td>
				@component('layouts.boton_borrar')
				    @slot("controlador_borrar")
				        {{ Form::open(['action' => ['AulaController@destroy', $aula->nombre]]) }}
				    @endslot
				@endcomponent
			</td>


				<!--Boton ver fotos-->
				<td class="text-center">
				    <a href="{{action('AulaController@viewImg', [ 'nombre' => $aula->nombre])}}" class="btn btn-warning">
				        Fotografías
				    </a>
				</td>

			</tr>
			@endforeach
		@endslot
	@endcomponent
@endsection


