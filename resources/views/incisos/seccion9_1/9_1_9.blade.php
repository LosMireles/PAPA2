@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.9
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.9: Los profesores de tiempo completo, tres cuartos
   y medio tiempo deben contar con cubículos. El resto de los profesores deben contar
  con lugares adecuados para su trabajo</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_9Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

@php
    $variable = "inciso_9_1_9";
@endphp
<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')
	@foreach($preguntas as $pregunta)
	    @component('layouts.textarea_input')
            @slot("nombre_input", $pregunta->id)
            @slot("label_input", $pregunta->titulo)
            @slot("valor_default", $pregunta->respuesta)
        @endcomponent
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->


@section('evidencias_tabla')
    <h3 class="text-center">Listado de cubículos y su profesor asignado</h3>

    <div class="row text-right" style="margin: 2px;">
        <a href="{{ action('CubiculoMiniController@create', $variable) }}" class="btn btn-success">
            Agregar nuevo cubículo
        </a>
    </div>

  @component('layouts.componentes.tabla_incisos_agregar')
      @slot('cabeza_tabla')
            <th>Identificador cubículo</th>
            <th>Profesor</th>
            <th></th>
	    	<th></th>
        @endslot

      @slot('cuerpo_tabla')
        @foreach($cubiculos as $cubiculo)
          <tr>
            	<td>{{$cubiculo->nombre}}</td>
                <td>{{$cubiculo->profesor}}</td>


                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{Form::open(['action' => ['CubiculoMiniController@edit',
                                                   $cubiculo->nombre,
                                                   $variable]])}}
                    @endslot
                @endcomponent


              @component('layouts.boton_borrar')
                @slot('controlador_borrar')
                  {{Form::open(['action' => ['CubiculoMiniController@destroy', $cubiculo->nombre, $variable]])}}
                @endslot
              @endcomponent

              <td class="text-center">
                  <a href="{{action('CubiculoMiniController@viewImg', [ 'nombre' => $cubiculo->nombre])}}" class="btn btn-warning">
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
  .line{
    border-bottom: 1px solid #111;
    display: block;
    margin-top: 60px;
    padding-top: 10px;
    position: relative;
  }
</style>

  <?php
    $dirs = array_filter(glob('storage/infraestructura/cubiculosMini/*'), 'is_dir');
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
        Fotografías del inciso 9.1.9
    </h3>
    @foreach($dirs as $path)
      <?php
        $dirname = $path.'/';
        $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
        $cubiculoID = substr($path, strlen('storage/infraestructura/cubiculosMini/'));
        $cubiculoReg = App\Cubiculo::where('id', $cubiculoID)->first();
        $cubiculoNombre = $cubiculoReg->nombre;
      ?>
      @if(sizeof($images) != 0)
        <h2 class="line"><?php echo $cubiculoNombre ?></h2>
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

@endsection
