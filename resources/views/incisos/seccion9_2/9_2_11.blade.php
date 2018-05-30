@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.11
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.11: Los profesores del programa deben contar
   con equipo de cómputo que les permita desempeñar adecuadamente su función. En
  el caso de los profesores de tiempo completo, estos deberán de contar con una
 computadora para su uso exclusivo</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_11Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

@php
    $variable = "inciso_9_2_11";
@endphp
<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="control-label">
			    {{$pregunta->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">{{$pregunta->respuesta}}</textarea>
			</div>
		</div>
	@endforeach
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
    <h3 class="text-center">Cantidad de equipo en los cubículos de maestros</h3>
    <div class="row text-right" style="margin: 2px;">
    	 <a href="{{ action('CubiculoController@create', $variable) }}" class="btn btn-success">Agregar cubículo</a>
    </div>
    @component('layouts.componentes.tabla_incisos_agregar')

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Cubículo</th>
            <th>Profesor</th>
            <th>Cantidad equipo</th>
            <th></th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($cubiculos as $cubiculo)
            <tr>
                <td>{{$cubiculo->nombre}}</td>
                <td>{{$cubiculo->profesor}}</td>
                <td>{{$cubiculo->cantidad_equipo}}</td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{ Form::open(['action' => ['CubiculoController@edit',
                                                    $cubiculo->nombre,
                                                    $variable]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['CubiculoController@destroy',
                                                    $cubiculo->nombre,
                                                    $variable]]) }}
                    @endslot
                @endcomponent

                <td class="text-center">
                    <a href="{{action('CubiculoController@viewImg', [ 'nombre' => $cubiculo->nombre])}}" class="btn btn-warning">
                        Fotografías
                    </a>
                </td>

            </tr>
            @endforeach
        @endslot
    @endcomponent
    @if(count($cubiculos) == 0)
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
</style>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/cubiculos/*'), 'is_dir');
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
        Fotografias del inciso 9.2.11
    </h3>
    @foreach($dirs as $path)
      <?php
        $dirname = $path.'/';
        $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
        $cubiculoID = substr($path, strlen('storage/infraestructura/cubiculos/'));
        $cubiculoReg = App\Cubiculo::where('id', $cubiculoID)->first();
        $cubiculoNombre = $cubiculoReg->nombre;
      ?>

      @if(sizeof($images) != 0)
        <h2>Aula <?php echo $cubiculoNombre ?></h2>
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
