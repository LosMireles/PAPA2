@extends('layouts.inciso')

@section('title')
  Inciso 9.2.14
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.14: Especificamente, el personal técnico,
    es suficiente y cuenta con el perfil adecuado para dar soporte, no solo a la
     infraestructura de telecomunicaciones y redes, sino también para el desarrollo
     de aplicaciones, incorporación de tecnologías emergentes, administración y
     hospedaje, desarrollo web, minería de datos, soluciones inteligentes, reingeniería
     de procesos mediante el use de las TIC y la administracion de la propia
     plataforma tecnológica y de aprendizaje que soporta el modelo educativo, ya
      sea a distancia o presencial. </h3>
@endsection

@section('formopen')
    {{Form::open(['class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">
			</div>
		</div>
	@endforeach

@endsection
