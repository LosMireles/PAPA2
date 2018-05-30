@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.7
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.7: El número de aulas habrá de ser suficiente
   para antender la impartición de cursos que se programen en cada periodo escolar</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_7Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

@php
    $variable = "inciso_9_1_7";
@endphp
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

@section('evidencias_tabla')
	<h3 class="text-center">Listado de cursos impartidos</h3>
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('AulaController@create', $variable) }}" class="btn btn-success">
		    Agregar nueva aula
		</a>
    	<a href="{{ action('CursoController@create', $variable) }}" class="btn btn-success">
    	    Agregar nuevo curso
    	</a>
  	</div>
	@component('layouts.componentes.tabla_incisos_agregar')

		<!-- Tabla de todos los grupos -->
		@slot('cabeza_tabla')
			<th>Nombre</th>
			<th>Período</th>
			<th>Grupo</th>
			<th>Numero de Estudiantes</th>
			<th>Pertenencia</th>
			<th>Espacios</th>
		@endslot

		@slot('cuerpo_tabla')
		  @foreach ($cursos as $curso)
			<tr>
			  	<td>{{ $curso->nombre }}</td>
			  	<td>{{ $curso->periodo }}</td>
			  	<td>{{ $curso->no_grupo }}</td>
			  	<td>{{ $curso->no_estudiantes }}</td>
			  	<td>{{ $curso->departamento }}</td>

                <td>
                    @if(!empty($curso->aulas))
                        @foreach($curso->aulas as $aula)
                            {{$aula->nombre}} <!--Solo para uno, cambiar foreach en caso de mas-->
                        @endforeach
                    @endif
                </td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                    <!-- ------------ -->
                        {{Form::open(['action' => ['CursoController@edit',
                                                   $curso->nombre,
                                                   $variable]])}}
                    @endslot
                @endcomponent

				@component('layouts.boton_borrar')
	              @slot('controlador_borrar')
	                {{ Form::open(['action' => ['CursoController@destroy', $curso->nombre, $variable]]) }}
	              @endslot
	            @endcomponent


			</tr>
		  @endforeach
		@endslot
	  @endcomponent
@endsection
