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
    <div class="row text-right" style="margin: 2px;">
    	 <a href="{{ action('CubiculoController@create') }}" class="btn btn-success">Agregar</a>
    </div>
    @component('layouts.componentes.tabla_incisos_agregar')

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Cubiculo</th>
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
                        {{ Form::open(['action' => ['CubiculoController@edit', $cubiculo->nombre]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['CubiculoController@edit', $cubiculo->nombre]]) }}
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
        Fotografias del inciso 9.2.11
    </h3>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/cubiculos/*'), 'is_dir');
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
