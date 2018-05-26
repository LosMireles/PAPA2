@extends('layouts.inciso')

@section('title')
  Inciso 9.1.12
@endsection

@section('descripcion')
    <h3 class="text-center">
      Inciso 9.1.12: En los espacios mencionados en el inciso 9.1.11, se debe
      tener un lugar comodo por cada diez estudiantes inscritos en el programa,
      ofreciendo las condiciones adecuadas de higiene y seguridad.
    </h3>

    <h3 class="text-center">
        De los espacios mencionados anteriormente mencionar:
    </h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_11Controller@update', $id],
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

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
    @component('layouts.inciso_general')
        @slot('num_inciso', '9.1.12')
    @endcomponent

  <?php
    $dirs = array_filter(glob('storage/infraestructura/auditorios/*'), 'is_dir');
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

