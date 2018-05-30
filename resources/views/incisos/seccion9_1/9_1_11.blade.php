@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.11
@endsection

@section('descripcion')
    <h3 class="text-justify">Inciso 9.1.11: El programa debe disponer de auditorios
   y/o salas debidamente acondicionadas para actividades académicas, investigación,
  y de preservación y difusión de la cultura</h3>
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
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}">{{$pregunta->respuesta}}</textarea>
			</div>
		</div>
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('evidencias_tabla')
  <h3 class="text-center">Listado de auditorios</h3>
  <div class="row text-right" style="margin: 2px;">
    <a href="{{ action('AuditorioController@create') }}" class="btn btn-success">Agregar auditorio</a>
  </div>
  @component('layouts.componentes.tabla_incisos_agregar')
	@section('cabeza_tabla')
	  <tr>
	    <td>Nombre</td>
	    <td>Capacidad</td>
	</tr>
	@endsection

	@slot('cabeza_tabla')
        <th>Nombre</th>
        <th>Capacidad</th>
        <th></th>
    @endslot

	@slot('cuerpo_tabla')
        @foreach($auditorios as $auditorio)
      <tr>
        <td>{{ $auditorio->nombre }}</td>
        <td>{{ $auditorio->Capacidad }}</td>

		<td>
              <a href="{{ action('AuditorioController@edit', $auditorio->nombre) }}" class="btn btn-warning">Editar</a>
        </td>

              @component('layouts.boton_borrar')
                @slot('controlador_borrar')
                  {{Form::open(['action' => ['AuditorioController@destroy', $auditorio->nombre]])}}
                @endslot
              @endcomponent

              <td class="text-center">
                  <a href="{{action('AuditorioController@viewImg', [ 'nombre' => $auditorio->nombre])}}" class="btn btn-warning">
                      Fotografías
                  </a>
              </td>
      </tr>
    @endforeach
      @endslot
	@endcomponent
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
        Fotografias del inciso 9.1.11
    </h3>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/auditorios/*'), 'is_dir');
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
