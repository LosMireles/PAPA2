@extends('layouts.ver')
@section('title')
    editar equipos
@endsection

@section('descripcion')
    <a href="/equipamiento/equipos/" class="btn btn-primary">Regresar</a>
    <h1 class="text-center">Listado de equipos</h1>
@endsection

@section('cabeza_tabla')
    <tr>
		<th>Serial del equipo</th>
		<th>Dispone de manual de usuario</th>
		<th>Se encuentra operable</th>
		<th>Localización</th>
		<th>Software</th>
		<th></th>
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
			<td class="text-center"><a href="{{ url('/equipamiento/equipos/actualizar_equipos/'.$equipo->serial ) }}" class="btn btn-warning">Editar</a></td>
		</tr>
	@endforeach
@endsection
