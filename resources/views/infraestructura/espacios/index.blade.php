@extends('layouts.index_general')

@section('title')
	Espacios
@endsection

@section('ruta_regresar', '/infraestructura')

@section('controlador_crear')
    {{action('EspacioController@create')}}
@endsection

@section('titulo_boton_agregar', 'Agregar nuevo espacio')

@section('objeto_informacion', 'espacios')

@section('cabeza_tabla')
        @component('layouts.header_tabla')
            @slot("tooltip_header_tabla", "Un identificador único por ejemplo A202")
            @slot("titulo_header_tabla", "Nombre del espacio")
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Metros cuadrados de superficie que abarca el espacio")
            @slot('titulo_header_tabla', 'Superficie')
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Cantidad de espacios con el mismo nombre y características")
            @slot('titulo_header_tabla', "Cantidad")
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)")
            @slot('titulo_header_tabla', "Clase")
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Cursos que se imparten en el espacio")
            @slot('titulo_header_tabla', "Cursos")
        @endcomponent

        <th></th>
        <th></th>
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


            @component('layouts.boton_editar')
                @slot("controlador_editar")
                    {{action('EspacioController@edit', [ 'tipo' => $espacio->tipo])}}
                @endslot
            @endcomponent

            @component('layouts.boton_borrar')
                @slot("controlador_borrar")
                    {{ Form::open(['action' => ['EspacioController@destroy', $espacio->tipo]]) }}
                @endslot
            @endcomponent

		</tr>
	@endforeach
@endsection

