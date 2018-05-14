@extends('layouts.insertar')

@section('title')
	insertar un equipo
@endsection

@section('descripcion')
	<a href="/equipamiento/equipos/">Regresar</a>
	<h1 class="text-center">Formulario para agregar un equipo</h1>
@endsection

@section('accion')
	action="{{ url('/gestion_equipo_agregar') }}"
@endsection

@section('contenido_formulario')
	<tr>
		<div class="form-group">
		    <td>
		    	<label for="serial" data-toggle="tooltip" title="Ingrese el serial del equipo">Serial: </label>	
		    </td>
		    <td>
		    	<input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo">	
		    </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
			<td>
				<label for="manual" data-toggle="tooltip" title="Indique si el equipo cuenta con manual de usuario">Manual de usuario: </label>
			</td>
			<td>
				<input type="radio" name="manual" value="1" checked="">Sí <br>
				<input type="radio" name="manual" value="0"> No
			</td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
			<td>
				<label for="operable" data-toggle="tooltip" title="Indique si el equipo se encuentra operable actualmente">Operable:  </label>
			</td>
			<td>
				<input type="radio" name="operable" value="1" checked="">Sí <br>
				<input type="radio" name="operable" value="0"> No	
			</td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
			<td>
				<label for="localizacion" data-toggle="tooltip" title="Seleccione la ubicación del equipo">Lozalización:  </label>
			</td>
			<td>
				<select name="localizacion" class="form-control">
					@foreach($espacios as $espacio)
						<option value="{{$espacio->clase}}">{{$espacio->clase}}</option>
					@endforeach
				</select>	
			</td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
			<td>
				<label for="nombres" data-toggle="tooltip" title="Seleccione el software que se encuentra instalado en el equipo">Software:  </label>
			</td>

            <td>
                @foreach($softwares as $single_software)
                    <input type="checkbox" name="nombres[]" value="{{$single_software->nombre}}">
                    {{$single_software->nombre}}<br>
                @endforeach
            </td>
		</div>
	</tr>
@endsection

