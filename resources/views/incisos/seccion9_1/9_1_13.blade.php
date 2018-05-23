@extends('layouts.inciso')

@section('title')
  Inciso 9.1.13
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.13: Las facilidades sanitarias para los estudiantes
   y profesores del programa deben ser adecuadas</h3>
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

@section('Fotografias')
  <h3 class="text-center">Evidencias de 9.1.3</h3>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/sanitarios/*'), 'is_dir');
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
    <th>Tipo</th>
    <th>Hora de inicio del servicio</th>
    <th>Hora de fin del servicio</th>
    <th>Laborable desde</th>
    <th>Laborable hasta</th>
    <th>Limpieza</th>
    <th>Cantidad de personal de limpieza</th>
  </tr>
@endsection

@section('cuerpo_tabla')
  @foreach($sanitarios as $sanitario)
  <tr>
      <td>{{ $sanitario->Tipo }}</td>
      <td>{{ $sanitario->InicioHora }}</td>
      <td>{{ $sanitario->FinHora }}</td>
      <td>{{ $sanitario->InicioDia }}</td>
      <td>{{ $sanitario->FinDia }}</td>
      <td>{{ $sanitario->Limpieza }}</td>
      <td>{{ $sanitario->CantidadPersonal }}</td>
  </tr>
  @endforeach
@endsection
