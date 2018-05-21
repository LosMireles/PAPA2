@extends('layouts.actualizar')

@section('title')
   Editar sanitario
@endsection

@section('descripcion')
    <a href="{{action('SanitarioController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del sanitario {{$sanitario->Tipo}}</h1>
@endsection

@section('accion')
    action = "{{action('SanitarioController@update', $sanitario->Tipo)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['SanitarioController@update', $sanitario->Tipo],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    <div class="form-group">
      <label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Un identificador único (por ejemplo A202)">Nombre: </label>

      <div class="col-sm-8">
         <input type="text" class="form-control" name='Tipo' placeholder="Nombre" value ="{{$sanitario->Tipo}}"required>
      </div>
    </div>

    <div class="form-group">
         <label for="InicioHora" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora desde la que los sanitarios estan disponibles">Hora inicio: </label>

         <div class="col-sm-8">
            <input type='time' class="form-control" name='InicioHora' placeholder="" value = "{{$sanitario->InicioHora}}" required>
         </div>
    </div>

    <div class="form-group">
         <label for="FinHora" class="col-sm-4 control-label" data-toggle="tooltip" title="Hora hasta la que los sanitarios estan disponibles">Hora fin: </label>

         <div class="col-sm-8">
            <input type='time' class="form-control" name='FinHora' placeholder="" value = "{{$sanitario->FinHora}}" required>
         </div>
    </div>

    <div class="form-group">
         <label for="InicioDia" class="col-sm-4 control-label" data-toggle="tooltip" title="Día desde el cual los sanitarios estan disponibles">Día inicio: </label>

         <div class="col-sm-8">
            <input type='date' class="form-control" name='InicioDia' placeholder="" value = "{{$sanitario->InicioDia}}" required>
         </div>
    </div>

    <div class="form-group">
         <label for="FinDia" class="col-sm-4 control-label" data-toggle="tooltip" title="Día hasta el cual los sanitarios estan disponibles">Día fin: </label>

         <div class="col-sm-8">
            <input type='date' class="form-control" name='FinDia' placeholder="" value = "{{$sanitario->FinDia}}" required>
         </div>
    </div>

    <div class="form-group">
         <label for="Limpieza" class="col-sm-4 control-label" data-toggle="tooltip" title="Si hay limpieza en los baños">Limpieza: </label>

         <div class="col-sm-8">
            <input type='text' class="form-control" name='Limpieza' placeholder="" value = "{{$sanitario->Limpieza}}" required>
         </div>
    </div>

    <div class="form-group">
         <label for="CantidadPersonal" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de personal que atiende el sanitario">Cantidad de personal: </label>

         <div class="col-sm-8">
            <input type='text' class="form-control" name='CantidadPersonal' placeholder="" value = "{{$sanitario->CantidadPersonal}}" required>
         </div>
    </div>

    <div class="form-group">
  		<h3 class="text-center">Evidencias: </h3>
  	</div>

  	<div class="form-group">
  		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

  		<div class="col-sm-8">
  			<input type='file' class="form-control" name='Fotografias' id="Fotografias" accept=".jpg, .png, .jpeg">
  		</div>
  	</div>
@endsection
