@extends('layouts.inciso')

@section('title')
  Inciso 9.1.6
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.6: Las aulas deben ser funcionales, disponer
   de espacio suficiente para cada estudiante y tener las condiciones adecuadas de
  higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido
 y mobiliario</h3>
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
        <th>Superficie</th>
	<th>Pizarron</th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach($espacios as $espacio)
        <tr>
            <td>{{$espacio->tipo}}</td>
            <td>{{$espacio->superficie}}</td>
	    <td>{{$espacio->aula->Pizarron}}</td>
        </tr>
    @endforeach
@endsection

