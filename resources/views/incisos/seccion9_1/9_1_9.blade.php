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
@section('tablas_inciso_general')
    @component('layouts.componentes.tabla_incisos_agregar')
        @slot('cabeza_tabla')
            <th>Identificador cubiculo</th>
            <th>Profesor</th>
            <th>Cantidad equipo</th>
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

            </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection



<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
    <h3 align="center">
        Fotografias del inciso 9.1.9
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
			<tr>
      <td>
        <img src="<?php echo asset($image)?>" width="320" height="200"
							alt="<?php echo $image?>"></img>
        <figcaption><?php echo pathinfo($image)['filename']?></figcaption>
      </td>

		@endforeach
  @endforeach


    @section('boton_guardar')
        <div class="text-center">
            {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
            {{ Form::close() }}
        </div>
    @endsection

@endsection

