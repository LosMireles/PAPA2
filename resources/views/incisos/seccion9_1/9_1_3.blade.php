@extends('layouts.inciso')

@section('title')
  Inciso 9.1.3
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.3: El programa debe disponer de los
  servicios de cómputo necesarios para cursos y actividades especializadas,
  relacionadas con el mismo.</h3>
@endsection

@section('formopen')
    {{Form::open([])}}
@endsection

@section('contenido_formulario')
  <div class="form-group">
    <label for="{{$preguntas[0]->id}}" class="control-label">{{$preguntas[0]->titulo}}</label>

    <div>
      <input type="hidden" class="form-control" id="{{$preguntas[0]->id}}" name="{{$preguntas[0]->id}}">
    </div>
  </div>

  @component("layouts.componentes.tabla_general")
    @slot("cabeza_tabla")
      <th class="text-center">Espacio</th>
      <th class="text-center">Cantidad de equipos disponibles</th>
    @endslot

    @slot("cuerpo_tabla")
      @foreach($equipos as $equipo)
        <tr>
          <td>
            {{$equipo->localizacion}}
          </td>
          <td class="text-center">
            {{$equipo->cantidad}}
          </td>
        </tr>
      @endforeach
    @endslot
  @endcomponent


@endsection

@section('Fotografias')
  <h3 class="text-center">Evidencias de 9.1.3</h3>

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
