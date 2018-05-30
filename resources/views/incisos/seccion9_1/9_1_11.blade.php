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
<!-- ------------ -->
@php
    $variable = "inciso_9_1_11";
@endphp
<!-- ------------ -->
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
      <!-- ------------ -->
    <a href="{{ action('AuditorioController@create',$variable) }}" class="btn btn-success">Agregar auditorio</a>
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

            @component('layouts.boton_editar')
                @slot('controlador_editar')
                <!-- ------------ -->
                    {{Form::open(['action' => ['AuditorioController@edit',
                                               $auditorio->nombre,
                                               $variable]])}}
                @endslot
            @endcomponent

              @component('layouts.boton_borrar')
                @slot('controlador_borrar')
                <!-- ------------ -->
                  {{Form::open(['action' => ['AuditorioController@destroy', $auditorio->nombre, $variable ]])}}
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
  @if(count($auditorios) == 0)
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
  .line{
    border-bottom: 1px solid #111;
    display: block;
    margin-top: 60px;
    padding-top: 10px;
    position: relative;
  }
  </style>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/auditorios/*'), 'is_dir');
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
        Fotografías del inciso 9.1.11
    </h3>

    @foreach($dirs as $path)
      <?php
        $dirname = $path.'/';
        $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
        $auditorioID = substr($path, strlen('storage/infraestructura/auditorios/'));
        $auditorioReg = App\Auditorio::where('id', $auditorioID)->first();
        $auditorioNombre = $auditorioReg->nombre
      ?>

      @if(sizeof($images) != 0)
        <h2 class="line"><?php echo $auditorioNombre ?></h2>
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
