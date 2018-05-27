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
	@component('layouts.componentes.tabla_incisos_agregar')
      @slot('controlador_agregar')
        {{Form::open(['action' => ['CursoController@create']])}}
      @endslot


	<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

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
		  	<td>{{ $curso->grupo }}</td>
		  	<td>{{ $curso->no_estudiantes }}</td>
		  	<td>{{ $curso->departamento }}</td>
			<td>{{ $curso->aulas[0]->nombre}}</td> <!--Solo para uno, cambiar foreach en caso de mas-->

		    <td>@component('layouts.boton_editar')
		        @slot("controlador_editar")
		            {{ Form::open(['action' => ['CursoController@edit', $curso->nombre]])}}
		        @endslot
		    @endcomponent</td>
			
			@component('layouts.boton_borrar')
              @slot('controlador_borrar')
                {{ Form::open(['action' => ['CursoController@destroy', $curso->nombre]]) }}
              @endslot
            @endcomponent


		</tr>
	  @endforeach
	@endslot
  @endcomponent
@endsection
@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

