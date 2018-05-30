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
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">{{$pregunta->respuesta}}</textarea>
			</div>
		</div>
	@endforeach
@endsection

@section('boton_guardar')
  <div class="containerdivNewLine">
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
  </div>
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

@php
    $variable = "inciso_9_1_6"
@endphp
@section('tablas_inciso_general')
	<h3 class="text-center">Listado de aulas y sus características</h3>

	<div class="row text-right" style="margin: 2px;">
    	<a href="{{ action($controlador_objeto_informacion.'@create', $variable) }}" class="btn btn-success">
    	    Agregar nueva aula
    	</a>
  </div>

	@component('layouts.componentes.tabla_incisos_agregar')
		@slot('cabeza_tabla')
		    <th>Titulo</th>
		    <th>Respuesta</th>
            <th></th>
            <th></th>
            <th></th>
		@endslot

		@slot('cuerpo_tabla')
			@foreach ($aulas as $aula)
			<tr>

                <td>
                    Nombre: <br>
                    Superficie: <br>
                    Capacidad: <br>
                    Pizarron: <br>
                    Iluminacion: <br>
                    Aislamiento ruido: <br>
                    Ventilacion: <br>
                    Temperatura: <br>
                    Espacio: <br>
                    Mobilario: <br>
                    Conexiones: <br>
                    Sillas paleta: <br>
                    Mesas trabajo: <br>
                    Isotopica: <br>
                    Estrado:
                </td>

                <td>
                    {{ $aula->nombre}} <br>
                    {{ $aula->superficie }} <br>
                    {{ $aula->capacidad }} <br>
                    {{ $aula->pizarron}} <br>
                    {{ $aula->iluminacion}} <br>
                    {{ $aula->aislamiento_ruido}} <br>
                    {{ $aula->ventilacion}} <br>
                    {{ $aula->temperatura}} <br>
                    {{ $aula->espacio}} <br>
                    {{ $aula->mobilario}} <br>
                    {{ $aula->conexiones}} <br>

                    @if($aula->sillas_paleta)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->mesas_trabajo)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->isotopica)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->estrado)
                        Si
                    @else
                        No
                    @endif
                        hay

                </td>

                @component('layouts.boton_editar')
                    @slot('controlador_editar')
                        {{Form::open(['action' => [$controlador_objeto_informacion.'@edit',
                                                   $aula->nombre,
                                                   $variable]])}}
                    @endslot
                @endcomponent

                @component('layouts.boton_borrar')
                    @slot('controlador_borrar')
                        {{Form::open(['action' => [$controlador_objeto_informacion.'@destroy',
                                                   $aula->nombre,
                                                   $variable]])}}
                    @endslot
                @endcomponent

                <!--Boton ver fotos-->
                <td class="text-center">
                    <a href="{{action('AulaController@viewImg', [ 'nombre' => $aula->nombre, 'uurl' => '916'])}}" class="btn btn-warning">
                        Fotografías
                    </a>
                </td>

			</tr>
			@endforeach
		@endslot
	@endcomponent
  @if(count($aulas) == 0)
    <h2 class="text-center">No hay registros en la base de datos</h2>
  @endif
@endsection

<!--Fotossss -->

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
    $dirs = array_filter(glob('storage/infraestructura/aulas/*'), 'is_dir');
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
        Fotografías del inciso 9.1.6
    </h3>
    @foreach($dirs as $path)
      <?php
        $dirname = $path.'/';
        $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
        $aulaID = substr($path, strlen('storage/infraestructura/aulas/'));
        $aulaReg = App\Aula::where('id', $aulaID)->first();
        $aulaNombre = $aulaReg->nombre;
      ?>

      @if(sizeof($images) != 0)
        <h2 class="line"><?php echo $aulaNombre ?></h2>
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
