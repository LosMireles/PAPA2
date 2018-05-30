@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.1
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.1: Para cada asignatura mencionar el software
   que se utiliza y si está disponible dentro de la institución</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_1Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

@php
    $variable = "inciso_9_2_1";
@endphp
<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')
	@foreach($preguntas as $pregunta)
	    @component('layouts.textarea_input')
            @slot("nombre_input", $pregunta->id)
            @slot("label_input", $pregunta->titulo)
            @slot("valor_default", $pregunta->respuesta)
        @endcomponent
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
    <h3 class="text-center">Listado relación curso-software</h3>
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('CursoController@create', $variable) }}" class="btn btn-success">
    	    Agregar nuevo curso
    	</a>

    	<a href="{{ action('SoftwareController@create', $variable) }}" class="btn btn-success">
    	    Agregar nuevo software
    	</a>
  	</div>

    @component('layouts.componentes.tabla_incisos_agregar')

        <h4>Tabla cursos y los software que utilizan</h4>
        @slot('cabeza_tabla')
            <th>Curso</th>
            <th>Nombre software</th>
			<th>Version</th>
            <th>Disponibilidad software</th>
            <th></th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($softwares as $software)
            <tr>
                <td>
                    @if(!empty($cursos))
                        @foreach($software->cursos as $curso)
                            {{$curso->nombre}} <br>
                        @endforeach
                    @endif
                </td>
                <td>{{$software->nombre}}</td>
				<td>{{$software->version}}</td>
                <td>{{$software->disponibilidad}}</td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{ Form::open(['action' => ['SoftwareController@edit', $software->nombre, $variable]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['SoftwareController@destroy', $software->nombre, $variable]]) }}
                    @endslot
                @endcomponent

                <td>
                    <!--Por que esta en curso controller??????-->
                    <a href="{{action('CursoController@relacionar_cursos_software', $software->id, $variable)}}" class="btn btn-primary">
                        Vicular cursos
                    </a>
                </td>

            </tr>
            @endforeach
        @endslot
    @endcomponent
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
