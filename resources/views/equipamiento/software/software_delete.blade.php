@extends('layouts.ver')
@section('title')
    Eliminar software
@endsection

@section('descripcion')
    <a href="/equipamiento/software" class="btn btn-primary">Regresar</a>

    <form action = "/deleteSoftware" method="POST" class="form-horizontal">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <div class="form-group">
             <label for="nombre" class="col-sm-2 control-label">Nombre del software: </label>

             <div class="col-sm-10">
                  <input type='text' name='nombre' class="form-control" placeholder="Nombre" required>
             </div>
         </div>

         <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Borrar</button>
             </div>
         </div>
    </form>

    <h1 class="text-center">Listado de software</h1>
@endsection

@section('cabeza_tabla')
    <tr>
        <th>Nombre</th>
        <th>Se cuenta con manual</th>
        <th>Licencia</th>
        <th>Lugar de obtención</th>
        <th>Clase</th>
        <th>Equipos</th>
    </tr>
@endsection


@section('cuerpo_tabla')
    @foreach ($softwares as $software)
        <tr>
            <td>{{ $software->nombre }}</td>
            <td>{{ $software->manualUsuario }}</td>
            <td>{{ $software->licencia }}</td>
            <td>{{ $software->disponibilidad }}</td>
            <td>{{ $software->clase }}</td>

            <td>
                @if(!empty($software->equipos))
                    @foreach($software->equipos as $equipo)
                        {{$equipo->serial}} <br>
                    @endforeach
                @endif
            </td>

        </tr>
    @endforeach
@endsection