@extends('layouts.insertar')

@section('title')
   Agregar sanitario
@endsection

@section('descripcion')
    <a href="{{action('SanitarioController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Formulario para agregar un sanitario</h1>
@endsection

@section('accion')
   action = "{{action('SanitarioController@store')}}"
@endsection

@section('contenido_formulario')
   	<div class="form-group">
      	<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre clave para el sanitario donde se indica el tipo de sanitario (hombres o mujeres), piso en el que se encuentra, para que personas esta disponible (persona, alumnado).">Tipo[?]: </label>

      	<div class="col-sm-8">
      		<input type="text-center" class="form-control" name="Tipo" placeholder="Nombre sanitarios">

      </div>
   </div>

   <div class="form-group">
      <label for="InicioHora" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora de inicio al que esta disponible el sanitario en el día.">Hora de inicio[?]: </label>

      <div class="col-sm-8">
      	<input type='time' class="form-control" name='InicioHora' placeholder="00:00" required>
      </div>
   </div>

   	<div class="form-group">
      	<label for="FinHora" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora a la que el sanitario deja de estar disponible en el día.">Hora de cierre[?]:</label>

      	<div class="col-sm-8">
      		<input type='time' class="form-control" name='FinHora' placeholder="12:00" required>
      	</div>
   	</div>

   	<div class="form-group">
   		<label for="InicioDia" class="col-sm-4 control-label" data-toggle="tooltip" title="Primer día de la semana en que el sanitario esta disponible.">Día de inicio[?]</label>

   		<div class="col-sm-8">
   			<input type='date' class="form-control" name='InicioDia' placeholder="Lunes" required>
   		</div>
   	</div>

   	<div class="form-group">
   		<label for="FinDia" class="col-sm-4 control-label" data-toggle="tooltip" title="Último día de la semana en que el sanitario esta disponible.">Día de terminación[?]</label>

   		<div class="col-sm-8">
   			<input type='date' class="form-control" name='FinDia' placeholder="Sábado" required>
   		</div>
   	</div>

   	<div class="form-group">
   		<label for="Limpieza" class="col-sm-4 control-label" data-toggle="tooltip" title="Rango de 0 a 5 donde califique el nivel de limpieza del sanitario (siendo 5 el más alto).">Limpieza[?]</label>

   		<div class="col-sm-8">
   			<input type='text' class="form-control" name='Limpieza' placeholder="5" required>
   		</div>
   	</div>

   	<div class="form-group">
   		<label for="CantidadPersonal" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de personal dedicado a dar mantenimiento al sanitario.">Cantidad de personal[?]</label>

   		<div class="col-sm-8">
   			<input type='text' class="form-control" name='CantidadPersonal' placeholder="1" required>
   		</div>
   	</div>

	<div class="form-group">
		<label for="espacio_id" class="col-sm-4 control-label" data-toggle="tooltip" title="Espacio donde se ecuentra el sanitario">Espacio</label>

		<div class="col-sm-8">
			<input type="radio"  name="espacio_id" value="{{$espacio_id}}" checked> {{$espacio_tipo}}
		</div>
	</div>
@endsection

