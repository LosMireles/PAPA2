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
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->
@section('cabeza_tabla')
    <tr>
        <th>Titulos</th>
        <th>Respuestas</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
@endsection

@section('cuerpo_tabla')
	@foreach ($aulas as $aula)
    <tr>
		<td>
            Nombre aula:<br>
            Superficie:<br>
            Capacidad maxima de personas:<br>
            Pizarron:<br>
            Iluminacion:<br>
            Aislamiento del ruido:<br>
            Ventilacion:<br>
            Temperatura:<br>
            Espacio:<br>
            Mobiliario:<br>
            Conexiones:<br>
            Sillas con paleta:<br>
            Mesas de trabajo:<br>
            Isotopica:<br>
            Estrado:<br>
            Asesoria:
		</td>

		<td>
            {{$aula->nombre}}<br>
            {{$aula->superficie}}<br>
            {{$aula->capacidad}}<br>
            {{$aula->pizarron}}<br>
            {{$aula->iluminacion}}<br>
            {{$aula->aislamiento_ruido}}<br>
            {{$aula->ventilacion}}<br>
            {{$aula->temperatura}}<br>
            {{$aula->espacio}}<br>
            {{$aula->mobilario}}<br>
            {{$aula->conexiones}}<br>
            {{$aula->sillas_paleta}}<br>
            {{$aula->mesas_trabajo}}<br>
            {{$aula->isotopica}}<br>
            {{$aula->estrado}}<br>
            {{$aula->asesoria}}
		</td>
        @component('layouts.boton_editar')
            @slot("controlador_editar")
                {{ Form::open(['action' => ['AulaController@edit', $aula->nombre]])}}
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
@endsection


<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC ------------- -->

@section('Fotografias')

<style type='text/css'>
  .img_div {
    float: left;
    margin-right: 10px;
    margin-bottom: 15px;

  }
  .containerdivNewLine {
    clear: both;
    display: block;
    position: relative;
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
  <div class="containerdivNewLine">
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
  </div>
@endsection
