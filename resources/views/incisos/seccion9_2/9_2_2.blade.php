@extends('layouts.inciso')

@section('title')
  Inciso 9.2.2
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.2: Todo programa debe contar como mínimo con
   el siguiente software: Lenguajes de programación, herramientas CASE, manejadores
  de base de datos y paquetería en general</h3>
@endsection

@section('formopen')
    {{Form::open(['class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="hidden" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">
			</div>
		</div>
	@endforeach

@endsection

@section('cabeza_tabla')
    <tr>
        <th>Lenguajes de programación</th>
        <th>Herramientas CASE</th>
        <th>Manejadores de base de datos</th>
        <th>Paquetería general</th>
    </tr>
@endsection

@section('cuerpo_tabla')
        <tr>
        @if(!empty($lenguajes))
            <td>
            @foreach($lenguajes as $lenguaje)
                {{$lenguaje}} <br>
            @endforeach
            </td>
        @endif

        @if(!empty($cases))
            <td>
            @foreach($cases as $case)
                {{$case}} <br>
            @endforeach
            </td>
        @endif

        @if(!empty($bds))
            <td>
            @foreach($bds as $bd)
                {{$bd}} <br>
            </td>
            @endforeach
        @endif

        @if(!empty($paqueterias))
            <td>
            @foreach($paqueterias as $paqueteria)
                {{$paqueteria}} <br>
            @endforeach
            </td>
        @endif
        </tr>
@endsection

