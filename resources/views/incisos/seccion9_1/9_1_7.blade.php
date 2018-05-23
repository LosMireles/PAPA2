@extends('layouts.inciso')

@section('title')
  Inciso 9.1.7
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.7: El número de aulas habrá de ser suficiente
   para antender la impartición de cursos que se programen en cada periodo escolar</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_7Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}"required>
			</div>
		</div>
	@endforeach

@endsection

@section('cabeza_tabla')
    <tr>
        <th>Nombre</th>
        <th>periodo</th>
	<th>No. de estudiantes</th>	
	<th>Aula</th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->nombre}}</td>
            <td>{{$curso->periodo}}</td>
	    <td>{{$curso->noEstudiantes}}</td>
	    <td>{{$curso->tipoAula}}</td>
        </tr>
    @endforeach
@endsection
