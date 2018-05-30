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
        <label for="{{$preguntas[1]->id}}" class="control-label">{{$preguntas[1]->titulo}} Se recomienda anexar fotos como evidencia.</label>

        <div>
            <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}">{{$preguntas[1]->respuesta}}</textarea>
        </div>
    </div>

@endsection


<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
<div class="row text-center">
  <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" action = "{{action('Inciso9_1_10Controller@guardarImg')}}" method="POST" enctype="multipart/form-data">
      <input type = "hidden" name = "_token" value = "{{csrf_token()}}">

      <div class="col-sm-8">
        <input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
      </div>
      <button type='submit' class="btn btn-primary">Agregar fotografía</button>
    </form>
  </div>
</div>
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
    .line{
      border-bottom: 1px solid #111;
      display: block;
      margin-top: 60px;
      padding-top: 10px;
      position: relative;
    }
  </style>

    <?php
      $dirname = 'storage/infraestructura/asesorias/';
      $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
    ?>

    @if(sizeof($images) != 0)
      <h3 align="center">
          Fotografias del inciso 9.1.10
      </h3>
      @foreach ($images as $image)
        <figure>
          <div class='buttonimg'>
            <div class="img_div">
              <img src="<?php echo asset($image)?>" height="220"
                alt="<?php echo $image?>"/>
              <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
              <div class="row text-center">
                <form action="{{ route('borrarImgInciso9_1_10', ['imagen' => pathinfo($image)['basename']]) }}" method="post">
                  {{ csrf_field() }}
                  <button class="btn btn-danger" onclick="return confirm('¿Estas seguro que deseas borrar esta fotografía?')" type="submit" name="button">Borrar</button>
                </form>
              </div>
            </div>
          </div>
        </figure>
  		@endforeach
    @else
      <h2 align="center">No hay imagenes</h2>
    @endif
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
