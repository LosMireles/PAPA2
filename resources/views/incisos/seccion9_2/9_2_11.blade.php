@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.11
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.11: Los profesores del programa deben contar
   con equipo de cómputo que les permita desempeñar adecuadamente su función. En
  el caso de los profesores de tiempo completo, estos deberán de contar con una
 computadora para su uso exclusivo</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_11Controller@update', $id],
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

@section('cabeza_tabla')
    <tr>
        <th>Código cubículo</th>
        <th>Profesor</th>
        <th>Cantidad de equipo</th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach($cubiculos as $cubiculo)
        <tr>
            <td>{{ $cubiculo->Tipo }}</td>
            <td>{{ $cubiculo->Profesor }}</td>
            <td>{{ $cubiculo->CantidadEquipo }}</td>
        </tr>
    @endforeach
@endsection

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
    <h3 align="center">
        Fotografias del inciso 9.2.11
    </h3>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/cubiculos/*'), 'is_dir');
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

@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

