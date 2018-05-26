@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.10
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.10: Debe existir espacios para asesorías a estudiantes</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_10Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

<!-------------- LAS PREGUNTAS Y SUS RESPUESTAS--------------->

@section('contenido_formulario')

    <!--Pregunta 1-->
    <div class="form-group">
        <label for="{{$preguntas[0]->id}}" class="control-label">
            {{$preguntas[0]->titulo}}
        </label>

        <div class="col-sm-8">
            <input type="text" class="form-control" id="{{$preguntas[0]->id}}" name="{{$preguntas[0]->id}}" value="{{$preguntas[0]->respuesta}}">
        </div>
    </div>

    <!--Pregunta 2-->
    <div class="form-group">
        <label for="{{$preguntas[1]->id}}" class="control-label">
            {{$preguntas[1]->titulo}}
        </label>

        <div>
            <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}"value="{{$preguntas[1]->respuesta}}"></textarea>
        </div>
    </div>

@endsection


<!-------------- LAS TABLAS QUE CORRESPONDAN--------------->

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

<!-------------- SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC--------------->

@section('Fotografias')
    <h3 align="center">
        Fotografias del inciso 9.1.10
    </h3>


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

@section('boton_guardar')
    <div class="col-md-4 text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

