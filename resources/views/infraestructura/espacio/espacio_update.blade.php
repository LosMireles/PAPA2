@extends('layouts.insertar')

@section('title')
   editar espacio
@endsection

@section('descripcion')
   <a href="/infraestructura/espacio" class="btn btn-primary">Regresar</a>
   <h1 class="text-center">Formulario para editar un espacio</h1>
@endsection

@section('accion')
   action = "/editEspacio/<?php echo $espacio->tipo; ?>"
@endsection

@section('contenido_formulario')
    <input type="hidden" name="id" value="{{$espacio->id}}">

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
               <option value="Aula" <?php if($espacio->clase == 'Aula'){echo("selected");}?>>Aula</option>
               <option  value="Cubiculo" <?php if($espacio->clase == 'Cubiculo'){echo("selected");}?>>Cubiculo</option>

               <option value="Sanitario" <?php if($espacio->clase == 'Sanitario'){echo("selected");}?>>Sanitario</option>
               <option value="Asesoria" <?php if($espacio->clase == 'Asesoria'){echo("selected");}?>>Asesoria</option>
               <option value="Auditorio <?php if($espacio->clase == 'Auditorio'){echo("selected");}?>">Auditorio</option>
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

