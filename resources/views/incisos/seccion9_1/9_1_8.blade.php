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

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}"required>
			</div>
		</div>
	@endforeach

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@section('tablas_inciso_general')
    @component('layouts.componentes.tabla_incisos_agregar')
        @slot('controlador_agregar')
            {{Form::open(['action' => ['AulaController@create']])}}
        @endslot

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Aula</th>
            <th>Serial Equipo computo</th>
            <th>Serial equipo audiovisual</th>
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
                    </td>
                    @endforeach
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

            </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection



<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('Fotografias')
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
			<tr>
      <td>
        <img src="<?php echo asset($image)?>" width="320" height="200"
							alt="<?php echo $image?>"></img>
        <figcaption><?php echo pathinfo($image)['filename']?></figcaption>
      </td>

		@endforeach
  @endforeach
@endsection

@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

