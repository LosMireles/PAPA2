@extends('layouts.inciso')

@section('title')
  Inciso 9.1.6
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.6: Las aulas deben ser funcionales, disponer
   de espacio suficiente para cada estudiante y tener las condiciones adecuadas de
  higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido
 y mobiliario</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_6Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="hidden" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}">
			</div>
		</div>
	@endforeach

@endsection

@section('Fotografias')
  <h3 class="text-center">Evidencias de 9.1.6</h3>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/aulas/*'), 'is_dir');
  ?>
  @foreach($dirs as $path)
    <?php
      $dirname = $path.'/';
      $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
    ?>

    @foreach ($images as $image)
			<tr>
      <td>
        <img src="<?php echo asset($image)?>" width="320" height="200"
							alt="<?php echo $image?>"></img>
        <figcaption><?php echo pathinfo($image)['filename']?></figcaption>
      </td>

		@endforeach
  @endforeach
@endsection

@section('cabeza_tabla')
    <tr>
        <th>Nombre</th>
        <th>Superfice</th>
        <th>Cap. máxima</th>
        <th>Pizarron</th>
    </tr>
@endsection

@section('cuerpo_tabla')

    @foreach($espacios as $espacio)
        <tr>
            <td>{{$espacio->tipo}}</td>
        <td>{{$espacio->superficie}}</td>
        <td>{{$espacio->aula->Capacidad}}</td>
        <td>{{$espacio->aula->Pizarron}}</td>
        </tr>
    @endforeach
@endsection

