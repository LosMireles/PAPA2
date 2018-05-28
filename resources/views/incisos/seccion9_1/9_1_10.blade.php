@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.10
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.10: Debe existir espacios para asesorías a estudiantes</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_10Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')

    <!-- Pregunta 1 -->
    <div class="form-group">
        <label for="{{$preguntas[0]->id}}" class="control-label">{{$preguntas[0]->titulo}}</label>

        <div>
          @if($preguntas[0]->respuesta == 'Si')
            <input type="radio" name="{{$preguntas[0]->id}}" value="Si" checked> Sí <br>
            <input type="radio" name="{{$preguntas[0]->id}}" value="No"> No
          @elseif($preguntas[0]->respuesta == 'No')
            <input type="radio" name="{{$preguntas[0]->id}}" value="Si"> Sí <br>
            <input type="radio" name="{{$preguntas[0]->id}}" value="No" checked> No
          @else
            <input type="radio" name="{{$preguntas[0]->id}}" value="Si" checked> Sí <br>
            <input type="radio" name="{{$preguntas[0]->id}}" value="No"> No
          @endif
        </div>
    </div>

    <!--Pregunta 2-->
    <div class="form-group">
        <label for="{{$preguntas[1]->id}}" class="control-label">{{$preguntas[1]->titulo}}</label>

        <div>
            <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}">{{$preguntas[1]->respuesta}}</textarea>
        </div>
    </div>

@endsection


<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

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
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection



@section('Fotografias')
  
@endsection