@extends('layouts.inciso')

@section('title')
  Inciso 9.1.8
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.8: El programa debe disponer de al menos una
  aula con equipo de cómputo y audiovisual permanentemente instalado que podrá ser
 utilizada para cursos normales y especializados</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_8Controller@update', $id],
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

@section('Fotografias')
  <h3 class="text-center">Evidencias de 9.1.3</h3>

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
        <th>Aula</th>
        <th>Equipo</th>
	<th>Audiovisual</th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach($aulas as $aula)
        <tr>
            <td>{{$aula->Tipo}}</td>
            <td>{{$aula->CantidadEquipo}}</td>
	    <td>{{$aula->CantidadAV}}</td>
        </tr>
    @endforeach
@endsection

