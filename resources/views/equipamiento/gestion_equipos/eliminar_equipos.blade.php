@extends('layouts.ver')
@section('title')
    Eliminar asignaturas
@endsection

@section('descripcion')
    <a href="/equipamiento/equipos/" class="btn btn-primary">Regresar</a>

    <form action="/gestion_equipo_borrar" method="POST" class="form-horizontal">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <div class="form-group">
             <label for="serial" class="col-sm-2 control-label">Serial del equipo: </label>

             <div class="col-sm-10">
                  <input type='text' name='serial' class="form-control" placeholder="Serial" required>
             </div>
         </div>

         <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Borrar</button>
             </div>
         </div>
    </form>

    <h1 class="text-center">Listado de equipos</h1>
@endsection

@section('cabeza_tabla')
  	<tr>
		<th>Serial del equipo</th>
		<th>Dispone de manual de usuario</th>
		<th>Se encuentra operable</th>
		<th>Localización</th>
		<th>Software</th>
	</tr>
@endsection


@section('cuerpo_tabla')
   @foreach($equipos as $equipo)
		<tr>
			<!--Serial del equipo-->
			<td>{{$equipo->serial}}</td>

			<!--Manual de usuario-->
			@if($equipo->manualUsuario)
				<td>Sí</td>
			@else
				<td>No</td>
			@endif

			<!--Operable-->
			@if($equipo->operable)
				<td>Sí</td>
			@else
				<td>No</td>
			@endif
			<!--Localizacion-->
			<td>{{$equipo->localizacion}}</td>

			<!--Localizacion-->
			<td>
			    @if(!empty($equipo->softwares))
                    @foreach($equipo->softwares as $software)
                        {{ $software->nombre }} <br>
                    @endforeach
				@endif
				</ul>
			</td>
		</tr>
	@endforeach
@endsection