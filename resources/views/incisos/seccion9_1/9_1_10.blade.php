@extends('layouts.inciso')

@section('title')
  Inciso 9.1.10
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.10: Debe existir espacios para asesorías a estudiantes</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_10Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}" value="{{$pregunta->respusta}}">
			</div>
		</div>
	@endforeach

@endsection

@section('botonGuardar')
  {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
  {{ Form::close() }}
@endsection

@section('cabeza_tabla')
  <tr>
    <td data-toggle="tooltip" title="Identificador de la asesoria">Tipo</td>
    <td data-toggle="tooltip" title="Hora de inicio">Hora de inicio</td>
    <td data-toggle="tooltip" title="Hora de finalización">Hora de finalizacion</td>
    <td data-toggle="tooltip" title="Día de inicio">Dia de inicio</td>
    <td data-toggle="tooltip" title="Día de finalización">Dia de finalizacion</td>
    <td data-toggle="tooltip" title="Asignatura que se imparte">Materia</td>
  </tr>
@endsection

@section('cuerpo_tabla')
  @foreach ($asesorias as $asesoria)
  <tr>
    <td>{{ $asesoria->Tipo }}</td>
    <td>{{ $asesoria->InicioHora }}</td>
    <td>{{ $asesoria->FinHora }}</td>
    <td>{{ $asesoria->InicioDia }}</td>
    <td>{{ $asesoria->FinDia }}</td>
    <td>{{ $asesoria->Materia }}</td>
   </tr>
   @endforeach
@endsection

@section('Fotografias')
  <h3 class="text-center">Evidencias de 9.1.10</h3>

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
