@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.13
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.13: Las facilidades sanitarias para los estudiantes
   y profesores del programa deben ser adecuadas</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_13Controller@update', $id],
                  'class'  => 'form'])}}
@endsection


<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')

    <!--Pregunta 1-->
    <div class="form-group">
        <label for="{{$preguntas[0]->id}}" class="control-label">
            {{$preguntas[0]->titulo}}
        </label>

        <div>
            <input type="text" class="form-control" id="{{$preguntas[0]->id}}" name="{{$preguntas[0]->id}}" value="{{$preguntas[0]->respuesta}}">
        </div>
    </div>

    <!--Pregunta 2-->
    <div class="form-group">
        <label for="{{$preguntas[1]->id}}" class="control-label">
            {{$preguntas[1]->titulo}}
        </label>

        <div>
            <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}">{{$preguntas[1]->respuesta}}</textarea>
        </div>
    </div>

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('cabeza_tabla')
  <tr>
    <th>Tipo</th>
    <th>Hora de inicio del servicio</th>
    <th>Hora de fin del servicio</th>
    <th>Laborable desde</th>
    <th>Laborable hasta</th>
    <th>Limpieza</th>
    <th>Cantidad de personal de limpieza</th>
    <th></th>
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
      <td class="text-center">
          <a href="{{action('SanitarioController@viewImg', [ 'nombre' => $sanitario->nombre])}}" class="btn btn-warning">
              Fotografías
          </a>
      </td>
  </tr>
  @endforeach
@endsection
<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
  <style type='text/css'>
    .img_div {
      float: left;
      margin-right: 10px;
      margin-bottom: 15px;

    }
    .trailer_button{
      z-index:999;
      margin:1 20 -20 20;
      width:120px;
      border-radius:10px;
      margin-bottom: 15px;

    }
    .buttonimg{
      width:auto;
      height:auto;

    }

    img{
      width: auto;
      max-height: 100%
    }
  </style>
    <h3 align="center">
        Fotografias del inciso 9.1.13
    </h3>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/sanitarios/*'), 'is_dir');
  ?>
  @foreach($dirs as $path)
    <?php
      $dirname = $path.'/';
      $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
    ?>

    @foreach ($images as $image)
    <figure>
      <div class="buttonimg">
        <div class="img_div">
          <img src="<?php echo asset($image)?>" height="220"
                alt="<?php echo $image?>"/>
          <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
        </div>
      </div>
    </figura>

		@endforeach
  @endforeach
@endsection

@section('boton_guardar')
    <div class="text-center">
      <div>
        <label for="terminado" class="control-label">
          Marque esta casilla si termino de responder:
        </label>
        @if ( $preguntas[0]->estado == 1)
          <input type="checkbox" name="terminado" value="si" checked>
        @else
          <input type="checkbox" name="terminado" value="si">
        @endif
      </div>

        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection
