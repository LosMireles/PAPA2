@extends('layouts.ver')
@section('title')
	Espacios
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EspacioController@create')}}"class="btn btn-warning">
            Agregar nuevo espacio
        </a>
    </td>

    <h1 class="text-center">Listado de espacio</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th>Nombre del espacio</th>
		<th>Superficie</th>
		<th>Cantidad</th>
		<th>Clase</th>
        <th>Cursos</th>
        <th></th>
        <th></th>
	</tr>
@endsection


@section('cuerpo_tabla')
	@foreach ($espacios as $espacio)
		<tr>
			<td>{{ $espacio->tipo }}</td>
			<td>{{ $espacio->superficie }}</td>
			<td>{{ $espacio->cantidad }}</td>
			<td>{{ $espacio->clase }}</td>


            <td>
                @if(!empty($espacio->cursos))
                    @foreach($espacio->cursos as $curso)
                        {{$curso->nombre}} <br>
                    @endforeach
                @endif
            </td>

            <!--Boton editar-->
            <td class="text-center">
                <a href="{{action('EspacioController@edit', [ 'tipo' => $espacio->tipo])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

            <!--Boton borrar-->
            <td>
                {{ Form::open(['action' => ['EspacioController@destroy', $espacio->tipo]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>

		</tr>
	@endforeach
@endsection

