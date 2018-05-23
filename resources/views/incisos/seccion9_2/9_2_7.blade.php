@extends('layouts.inciso')

@section('title')
  Inciso 9.2.7
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.7: Debe contarse con al menos una red de área
   local y una amplia, con software adecuado para las aplicaciones más comunes del
  programa</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_7Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	<div class="form-group">
		<label for="{{$preguntas[0]->id}}" class="col-sm-4 control-label">{{$preguntas[0]->titulo}}</label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="{{$preguntas[0]->id}}" value="{{$preguntas[0]->respuesta}}">
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[1]->id}}" class="col-sm-12 control-label text-center">{{$preguntas[1]->titulo}}</label>

		<div>
			<input type="hidden" class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}" value="{{$preguntas[1]->respuesta}}" hidden>

			<table class="table table-hover">
			<thead>
				<th class="text-center">Serial</th>
				<th class="text-center">Descripción</th>
			</thead>
			@foreach($equipos as $equipo)
				@if($equipo->tipo == "servidor")
					<tr>
						<td>
							{{$equipo->serial}}
						</td>
						<td>
							{{$equipo->descripcion}}
						</td>
					</tr>
				@endif
			@endforeach
		</table>

		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[2]->id}}" class="col-sm-4 control-label">{{$preguntas[2]->titulo}}</label>

		<div class="col-sm-8">
			<input type="text" class="form-control" id="{{$preguntas[2]->id}}" name="{{$preguntas[2]->id}}" value="{{$preguntas[2]->respuesta}}">
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[3]->id}}" class="col-sm-4 control-label">{{$preguntas[3]->titulo}}</label>

		<div class="col-sm-8">
			<input type="text" class="form-control" id="{{$preguntas[3]->id}}" name="{{$preguntas[3]->id}}" value="{{$preguntas[3]->respuesta}}">
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[4]->id}}" class="col-sm-4 control-label">{{$preguntas[4]->titulo}}</label>

		<div class="col-sm-8">
			<input type="text" class="form-control" id="{{$preguntas[4]->id}}" name="{{$preguntas[4]->id}}" value="{{$preguntas[4]->respuesta}}">
		</div>
	</div>

@endsection

