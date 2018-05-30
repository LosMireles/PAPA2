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
@php
    $variable = "inciso_9_1_13";
@endphp
@section('evidencias_tabla')
  <h3 class="text-center">Listado de sanitarios</h3>
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('SanitarioController@create', $variable) }}" class="btn btn-success">Agregar sanitario</a>
  	</div>
	@component('layouts.componentes.tabla_incisos_agregar')

		<!-- Tabla de todos los grupos -->
		@slot('cabeza_tabla')
			<th>Nombre</th>
			<th>Sexo</th>
      <th></th>
		@endslot

		@slot('cuerpo_tabla')
		  @foreach ($sanitarios as $sanitario)
			<tr>
			  	<td>{{ $sanitario->nombre }}</td>
			  	<td>{{ $sanitario->sexo }}</td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{Form::open(['action' => ['SanitarioController@edit',
                                                   $sanitario->nombre,
                                                   $variable]])}}
                    @endslot
                @endcomponent

				@component('layouts.boton_borrar')
	              @slot('controlador_borrar')
	                {{ Form::open(['action' => ['SanitarioController@destroy', $sanitario->nombre, $variable]]) }}
	              @endslot
	            @endcomponent

              <!--Boton ver fotos-->
              <td class="text-center">
                  <a href="{{action('SanitarioController@viewImg', [ 'nombre' => $sanitario->nombre])}}" class="btn btn-warning">
                      Fotografías
                  </a>
              </td>


			</tr>
		  @endforeach
		@endslot
	  @endcomponent
    @if(count($sanitarios) == 0)
      <h2 class="text-center">No hay registros en la base de datos</h2>
    @endif
@endsection
<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
  <style type='text/css'>
    .img_div {
      float: left;
      margin-right: 10px;
      margin-bottom: 15px;
    }

    img{
      width: auto;
      max-height: 100%
    }
    .line
    { border-top: 1px solid #111;
      display: block;
      margin-top: 60px;
      padding-top: 10px;
      position: relative; }


  </style>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/sanitarios/*'), 'is_dir');
    $hayImagen = 0;
    foreach ($dirs as $path) {
      $dir = $path.'/';
      $imagenes= glob($dir . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
      if (sizeof($imagenes) != 0) {
        $hayImagen = 1;
        break;
      }
    }
  ?>
  @if($hayImagen == 1)
    <h3 align="center">
        Fotografias del inciso 9.1.13
    </h3>
    @foreach($dirs as $path)
      <?php
        $dirname = $path.'/';
        $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
        $sanitarioID = substr($path, strlen('storage/infraestructura/sanitarios/'));
        $sanitarioReg = App\Sanitario::where('id', $sanitarioID)->first();
        $sanitarioNombre = $sanitarioReg->nombre;
      ?>
      @if(sizeof($images) != 0)
        <h3  class="line">Aula <?php echo $sanitarioNombre ?> </h3>
      @endif

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
      <br clear='all'/>
    @endforeach
  @else
    <h3 align="center">No hay imagenes </h3>
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
