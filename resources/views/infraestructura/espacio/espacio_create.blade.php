@extends('layouts.insertar')

@section('title')
   insertar un espacio
@endsection

@section('descripcion')
   <a href="/infraestructura/espacio">Regresar</a>
   <h1 class="text-center">Formulario para agregar un espacio</h1>
@endsection

@section('accion')
   action = "/CrearEspacio"
@endsection

@section('contenido_tabla')
   <tr>
      <div class="form-group">
          <td>
            <label for="tipo" data-toggle="tooltip" title="Un identificador único (por ejemplo A202)">Nombre del espacio: </label> 
          </td>
          <td>
            <input type="text" class="form-control" id="serial" name="tipo" placeholder="Nombre"> 
          </td>
      </div>
   </tr>

   <tr>
      <div class="form-group">
         <td>
            <label for="superficie" data-toggle="tooltip" title="Metros cuadrados de superficie que abarca el espacio">Superficie: </label>
         </td>
         <td>
            <input type='text' class="form-control" name='superficie' placeholder="mts2" />
         </td>
      </div>
   </tr>

   <tr>
      <div class="form-group">
         <td>
            <label for="cantidad" data-toggle="tooltip" title="Cantidad de espacios con el mismo nombre y características">Cantidad:  </label>
         </td>
         <td>
            <input type='text' class="form-control" name='cantidad' placeholder="Cantidad" />
         </td>
      </div>
   </tr>

   <tr>
      <div class="form-group">
         <td>
            <label for="clase" data-toggle="tooltip" title="Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)">Clase:  </label>
         </td>
         <td>
            <select name="clase">
               <option value="Aula">Aula</option>
               <option value="Cubiculo">Cubiculo</option>
               <option value="Sanitario">Sanitario</option>
               <option value="Asesoria">Asesoria</option>
               <option value="Auditorio">Auditorio</option>
           </select>
         </td>
      </div>
   </tr>
@endsection