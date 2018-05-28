@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.8
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.8: El programa debe disponer de al menos una
  aula con equipo de cómputo y audiovisual permanentemente instalado que podrá ser
 utilizada para cursos normales y especializados</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_8Controller@update', $id],
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
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}"required>
			</div>
		</div>
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action('AulaController@create') }}" class="btn btn-success">
    	    Agregar nueva aula
    	</a>

    	<a href="{{ action('EquipoController@create') }}" class="btn btn-success">
    	    Agregar nuevo equipo
    	</a>

  	</div>
    @component('layouts.componentes.tabla_incisos_agregar')

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Aula</th>
            <th>Serial Equipo computo</th>
            <th>Serial equipo audiovisual</th>
            <th></th>
            <th></th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($aulas as $aula)
            <tr>
                <td>{{$aula->nombre}}</td>

                @if(!empty($aula->equipos))
                    <td>
                    @foreach($aula->equipos as $equipo)
                        @if($equipo->tipo == "Computo")
                            {{$equipo->serial}}
                        @endif
                    @endforeach
                    </td>

                    <td>
                    @foreach($aula->equipos as $equipo)
                        @if($equipo->tipo == "Audiovisual")
                            {{$equipo->serial}}
                        @endif
                    @endforeach
                    </td>
                @endif

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{ Form::open(['action' => ['AulaController@edit', $aula->nombre]]) }}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{ Form::open(['action' => ['AulaController@destroy', $aula->nombre]]) }}
                    @endslot
                @endcomponent


                <td>
                <a href="{{ action('AulaController@relacionar_equipos', $aula->id) }}" class="btn btn-primary">
                    Relacionar aulas y equipos
                </a>
                </td>

                <td class="text-center">
                    <a href="{{action('AulaController@viewImg', [ 'nombre' => $aula->nombre])}}" class="btn btn-warning">
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
        Fotografias del inciso 9.1.8
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
