@extends('layouts.ver')
@section('title')
	Asignaturas
@endsection

@section('descripcion')
    <a href="/" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('AsignaturaController@create')}}"class="btn btn-warning">
            Agregar nueva asignatura
        </a>
    </td>

    <h1 class="text-center">Listado de asignaturas</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th data-toggle="tooltip"
            title="Nombre de la asigatura">
           Nombre de la asignatura
       </th>
		
        <th data-toggle="tooltip"
            title="Descripción de la asignatura">
            Descripción de la asignatura
        </th>
        
        <th data-toggle="tooltip"
            title="Curso que le corresponde a la asignatura">
            Curso de la asignatura
        </th>

        <th data-toggle="tooltip" 
            title="softwares que usa la asignatura">
            Softwares
        </th>
        
        <th></th>
        <th></th>
	</tr>
@endsection

@section('cuerpo_tabla')
	@foreach($asignaturas as $asignatura)
		<tr>
			<td>{{$asignatura->nombre}}</td>
			<td>{{$asignatura->descripcion}}</td>
            <td>{{$asignatura->curso->nombre}}</td>

            <td>
                @if(!empty($asignatura->softwares))
                    @foreach($asignatura->softwares as $software)
                        {{$software->nombre}} <br>
                    @endforeach
                @endif
            </td>


            <td class="text-center">
                <a href="{{action('AsignaturaController@edit', [ 'nombre' => $asignatura->nombre])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

            <td>
                {{ Form::open(['action' => ['AsignaturaController@destroy', $asignatura->nombre]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>

		</tr>
	@endforeach
@endsection

