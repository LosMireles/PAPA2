@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.6
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.6: Las aulas deben ser funcionales, disponer
   de espacio suficiente para cada estudiante y tener las condiciones adecuadas de
  higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido
 y mobiliario</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_6Controller@update', $id],
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
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}"></textarea>
			</div>
		</div>
	@endforeach

  @component('layouts.componentes.tabla_incisos_agregar_igual')

    @slot('cabeza_tabla')
      <th>Hola</th>
      <th>Hola</th>
      <th>Hola</th>
    @endslot

    @slot('cuerpo_tabla')
      <tr>
        <td>HOLA</td>
        <td>HOLA</td>
        <td>HOLA</td>
        <td>HOLA</td>
        <td>HOLA</td>
        <td>HOLA</td>
      </tr>
    @endslot

  @endcomponent
  
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@component('layouts.componentes.tabla_incisos_agregar_igual')
  @slot('cabeza_tabla')
    <th>Nombre</th>
    <th>Superfice</th>
    <th>Cap. máxima</th>
    <th>Pizarron</th>
  @endslot

  @slot('cuerpo_tabla')
    @foreach ($aulas as $aula)
      <tr>
      <td>{{ $aula->nombre}}</td>
      <td>{{ $aula->capacidad }}</td>

          @component('layouts.boton_editar')
              @slot("controlador_editar")
                  {{action('AulaController@edit', [ 'nombre' => $aula->nombre])}}
              @endslot
          @endcomponent

          @component('layouts.boton_borrar')
              @slot("controlador_borrar")
                  {{ Form::open(['action' => ['AulaController@destroy', $aula->nombre]]) }}
              @endslot
          @endcomponent


          <!--Boton ver fotos-->
          <td class="text-center">
              <a href="{{action('AulaController@viewImg', [ 'nombre' => $aula->nombre])}}" class="btn btn-warning">
                  Fotografías
              </a>
          </td>

    </tr>
    @endforeach
  @endslot
@endcomponent
<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC ------------- -->

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
    <h3 align="center">
        Fotografias del inciso 9.1.6
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

  		<figure>
  				<div class="img_div">
  					<img src="<?php echo asset($image)?>" height="220"
  						alt="<?php echo $image?>"/>
  					<figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
  				</div>
  		</figure>
		@endforeach
  @endforeach

@endsection

@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection
