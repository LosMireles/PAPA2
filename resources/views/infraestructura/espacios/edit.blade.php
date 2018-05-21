@extends('layouts.actualizar')

@section('title')
   Editar espacio
@endsection

@section('descripcion')
    <a href="{{action('EspacioController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del espacio {{$espacio->tipo}}</h1>
@endsection

@section('accion')
    action = "{{action('EspacioController@update', $espacio->tipo)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['EspacioController@update', $espacio->tipo],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    <div class="form-group">
      <label for="tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Un identificador único (por ejemplo A202)">Nombre[?]: </label>

      <div class="col-sm-8">
         <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Nombre" value = '<?php echo$espacio->tipo; ?>' required>
      </div>
    </div>
    <div class="form-group">
         <label for="superficie" class="col-sm-4 control-label" data-toggle="tooltip" title="Metros cuadrados de superficie que abarca el espacio">Superficie[?]: </label>

         <div class="col-sm-8">
            <input type='text' class="form-control" name='superficie' placeholder="mts2" value = '<?php echo$espacio->superficie; ?>' required>
         </div>
    </div>
    <div class="form-group">
         <label for="cantidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de espacios con el mismo nombre y características">Cantidad[?]:</label>

         <div class="col-sm-8">
            <input type='text' class="form-control" name='cantidad' placeholder="Cantidad" value = '<?php echo$espacio->cantidad; ?>' required>
         </div>
    </div>
    <div class="form-group">
        <label for="clase" class="col-sm-4 control-label" data-toggle="tooltip" title="Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)">Clase[?]:  </label>

		<div class="col-sm-8">
            <select name="clase" class="form-control">
                @foreach($clases as $clase)
                    @if($espacio->clase == $clase)
                        <option value="{{$clase}}" selected>{{$clase}}</option>
                    @else
                        <option value="{{$clase}}">{{$clase}}</option>
                    @endif
                @endforeach
           </select>
   		</div>
    </div>

    <div class="form-group">
		<label for="cursos" class="col-sm-4 control-label" data-toggle="tooltip" title="Cursos que se imparten en el espacio">Cursos</label>

		<div class="col-sm-8">
			@foreach($cursos as $curso)
				<?php $temp = 0; ?>
				@foreach($curso_espacio as $unidad)
					@if($curso->id == $unidad->curso_id && $espacio->id == $unidad->espacio_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="cursos[]" checked value="{{$curso->nombre}}"> {{$curso->nombre}} <br>
				@else
					<input type="checkbox" name="cursos[]" value="{{$curso->nombre}}"> {{$curso->nombre}} <br>
				@endif
			@endforeach
		</div>
	</div>

@endsection

