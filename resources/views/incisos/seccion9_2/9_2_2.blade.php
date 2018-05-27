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
    {{Form::open(['class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="control-label">
			    {{$pregunta->titulo}}
			</label>

			<div class="col-sm-8">
				<input type="hidden" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">
			</div>
		</div>
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
    @component('layouts.componentes.tabla_incisos_agregar')
        @slot('controlador_agregar')
            {{Form::open(['action' => ['SoftwareController@create']])}}
        @endslot

        <h4>Tabla de lenguajes, herramientas case, manejadores de bases de datos y paqueteria</h4>
        @slot('cabeza_tabla')
            <th>Lenguajes de programación</th>
            <th>Herramientas CASE</th>
            <th>Manejadores de base de datos</th>
            <th>Paquetería general</th>
        @endslot

        @slot('cuerpo_tabla')
            @for($i = 0; $i < max(array(sizeof($lenguajes),
                                        sizeof($cases),
                                        sizeof($bds),
                                        sizeof($paqueterias))); $i++)
            <tr>
            @if($i < sizeof($lenguajes))
                <td>
                    {{$lenguajes[$i]}} <br>
                </td>
            @endif

            @if($i < sizeof($cases))
                <td>
                    {{$cases[$i]}} <br>
                </td>
            @endif

            @if($i < sizeof($bds))
                <td>
                    {{$bds[$i]}} <br>
                </td>
            @endif

            @if($i < sizeof($paqueterias))
                <td>
                    {{$paqueterias[$i]}} <br>
                </td>
            @endif
            </tr>
            @endfor
        @endslot
    @endcomponent
@endsection

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

