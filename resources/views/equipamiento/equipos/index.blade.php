@extends('layouts.ver')
@section('title')
	Equipos
@endsection

@section('descripcion')
    <a href="/equipamiento" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EquipoController@create')}}"class="btn btn-warning">
            Agregar nuevo equipo
        </a>
    </td>

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

			<!--Softwares-->
			<td>
			    @if(!empty($equipo->softwares))
                    @foreach($equipo->softwares as $software)
                        {{ $software->nombre }} <br>
                    @endforeach
				@endif
				</ul>
			</td>

			<!--Boton editar-->
            <td class="text-center">
                <a href="{{action('EquipoController@edit', [ 'serial' => $equipo->serial])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

			<!--Boton borrar-->
            <td>
                {{ Form::open(['action' => ['EquipoController@destroy', $equipo->serial]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>
		</tr>
	@endforeach
@endsection

