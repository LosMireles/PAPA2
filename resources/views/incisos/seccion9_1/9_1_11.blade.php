@extends('layouts.inciso')

@section('title')
  Inciso 9.1.11
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.11: El programa debe disponer de auditorios
   y/o salas debidamente acondicionadas para actividades académicas, investigación,
  y de preservación y difusión de la cultura</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_1_11Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}" value="{{$pregunta->respuesta}}">
			</div>
		</div>
	@endforeach

@endsection

@section('botonGuardar')
  {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
  {{ Form::close() }}
@endsection

@section('Fotografias')
  <h3 class="text-center">Evidencias de 9.1.11</h3>

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

@section('cabeza_tabla')
  <tr>
    <td>Tipo</td>
    <td>CantidadEquipo</td>
    <td>CantidadAV</td>
    <td>Capacidad</td>
    <td>CantidadSanitarios</td>
</tr>
@endsection

@section('cuerpo_tabla')
    @foreach($auditorios as $auditorio)
      <tr>
        <td>{{ $auditorio->Tipo }}</td>
        <td>{{ $auditorio->CantidadEquipo }}</td>
        <td>{{ $auditorio->CantidadAV }}</td>
        <td>{{ $auditorio->Capacidad }}</td>
        <td>{{ $auditorio->CantidadSanitarios }}</td>
      </tr>
    @endforeach
@endsection

