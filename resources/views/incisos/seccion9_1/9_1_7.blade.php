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
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

<!-- Tabla de todos los grupos -->
@section('cabeza_tabla')
  <h4>Tabla de todos los grupos</h4>
  <tr>
    <th>Nombre</th>
    <th>Período</th>
    <th>Grupo</th>
    <th>Numero de Estudiantes</th>
    <th>Pertenencia</th>
    <th>Espacios</th>
  </tr>
@endsection

@section('cuerpo_tabla')
  @foreach ($cursos as $curso)
    <tr>
      	<td>{{ $curso->nombre }}</td>
      	<td>{{ $curso->periodo }}</td>
      	<td>{{ $curso->grupo }}</td>
      	<td>{{ $curso->no_estudiantes }}</td>
      	<td>{{ $curso->departamento }}</td>
		<td>
            @if(!empty($curso->espacios))
                @foreach($curso->espacios as $espacio)
                    {{$espacio->tipo}} <br>
                @endforeach
            @endif
        </td>

        <td class="text-center">
            <a href="{{action('CursoController@edit', [ 'nombre' => $curso->nombre])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <td>
            {{ Form::open(['action' => ['CursoController@destroy', $curso->nombre]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>

	</tr>

<!--
      <td>
          @if(!empty($curso->aula))
              @foreach($curso->aula as $aula)
                  {{$aula->nombre}} <br>
              @endforeach
          @endif
      </td>
    </tr>
  @endforeach
@endsection

-->

<!-- Tabla de grupos de LCC 
@section('cabeza_tabla2')
  <h4>Tabla de todos los grupos de LCC</h4>
  <tr>
    <th>Nombre</th>
    <th>Período</th>
    <th>Grupo</th>
    <th>Numero de Estudiantes</th>
    <th>Tipo de Aula</th>
    <th>Pertenencia</th>
    <th>Espacios</th>
  </tr>
@endsection

@section('cuerpo_tabla2')
  @foreach ($cursosLCC as $curso)
    <tr>
      <td>{{ $curso->nombre }}</td>
      <td>{{ $curso->periodo }}</td>
      <td>{{ $curso->grupo }}</td>
      <td>{{ $curso->noEstudiantes }}</td>
      <td>{{ $curso->tipoAula }}</td>
      <td>{{ $curso->pertenencia }}</td>

      <td>
          @if(!empty($curso->espacios))
              @foreach($curso->espacios as $espacio)
                  {{$espacio->tipo}} <br>
              @endforeach
          @endif
      </td>
    </tr>
  @endforeach
@endsection
-->
<!-- Tabla de grupos de LM 
@section('cabeza_tabla3')
  <h4>Tabla de todos los grupos de LM</h4>
  <tr>
    <th>Nombre</th>
    <th>Período</th>
    <th>Grupo</th>
    <th>Numero de Estudiantes</th>
    <th>Tipo de Aula</th>
    <th>Pertenencia</th>
    <th>Espacios</th>
  </tr>
@endsection

@section('cuerpo_tabla3')
  @foreach ($cursosLM as $curso)
    <tr>
      <td>{{ $curso->nombre }}</td>
      <td>{{ $curso->periodo }}</td>
      <td>{{ $curso->grupo }}</td>
      <td>{{ $curso->noEstudiantes }}</td>
      <td>{{ $curso->tipoAula }}</td>
      <td>{{ $curso->pertenencia }}</td>

      <td>
          @if(!empty($curso->espacios))
              @foreach($curso->espacios as $espacio)
                  {{$espacio->tipo}} <br>
              @endforeach
          @endif
      </td>
    </tr>
  @endforeach
@endsection
-->
<!-- Tabla de grupos de Otros 
@section('cabeza_tabla4')
  <h4>Tabla de todos los grupos de otros</h4>
  <tr>
    <th>Nombre</th>
    <th>Período</th>
    <th>Grupo</th>
    <th>Numero de Estudiantes</th>
    <th>Tipo de Aula</th>
    <th>Pertenencia</th>
    <th>Espacios</th>
  </tr>
@endsection

@section('cuerpo_tabla4')
  @foreach ($cursosOtros as $curso)
    <tr>
      <td>{{ $curso->nombre }}</td>
      <td>{{ $curso->periodo }}</td>
      <td>{{ $curso->grupo }}</td>
      <td>{{ $curso->noEstudiantes }}</td>
      <td>{{ $curso->tipoAula }}</td>
      <td>{{ $curso->pertenencia }}</td>

      <td>
          @if(!empty($curso->espacios))
              @foreach($curso->espacios as $espacio)
                  {{$espacio->tipo}} <br>
              @endforeach
          @endif
      </td>
    </tr>
  @endforeach
@endsection
-->
<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

