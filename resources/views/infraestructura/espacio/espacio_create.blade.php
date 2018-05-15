@extends('layouts.insertar')

@section('title')
   insertar un espacio
@endsection

@section('descripcion')
   <a href="/infraestructura/espacio" class="btn btn-primary">Regresar</a>
   <h1 class="text-center">Formulario para agregar un espacio</h1>
@endsection

@section('accion')
   action = "/CrearEspacio"
@endsection

@section('contenido_formulario')
   <div class="form-group">
      <label for="tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Un identificador único (por ejemplo A202)">Nombre[?]: </label>

      <div class="col-sm-8">
         <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Nombre" required>
      </div>
   </div>
   <div class="form-group">
   		<label for="superficie" class="col-sm-4 control-label" data-toggle="tooltip" title="Metros cuadrados de superficie que abarca el espacio">Superficie[?]: </label>

   		<div class="col-sm-8">
   			<input type='text' class="form-control" name='superficie' placeholder="mts2" required>
   		</div>
   </div>
   <div class="form-group">
   		<label for="cantidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de espacios con el mismo nombre y características">Cantidad[?]:</label>

   		<div class="col-sm-8">
   			<input type='text' class="form-control" name='cantidad' placeholder="Cantidad" required>
   		</div>
   </div>
   <div class="form-group">
   		<label for="clase" class="col-sm-4 control-label" data-toggle="tooltip" title="Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)">Clase[?]:  </label>

		<div class="col-sm-8">
            <select name="clase" class="form-control">
               <option value="Aula">Aula</option>
               <option value="Cubiculo">Cubiculo</option>
               <option value="Sanitario">Sanitario</option>
               <option value="Asesoria">Asesoria</option>
               <option value="Auditorio">Auditorio</option>
           </select>
   		</div>
   </div>
@endsection
