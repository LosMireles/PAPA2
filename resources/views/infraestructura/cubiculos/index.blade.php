@extends('layouts.index_general')
@section('title')
   Cubículos
@endsection

@section('ruta_regresar', '/infraestructura')

@section('controlador_crear')
    {{action('CubiculoController@create')}}
@endsection

@section('titulo_boton_agregar', 'Agregar nueva cubiculo')

@section('objeto_informacion', 'cubiculos')


@section('cabeza_tabla')
   <tr>
        @component('layouts.header_tabla')
            @slot("tooltip_header_tabla", "Número del cubículo")
            @slot("titulo_header_tabla", "Código del cubículo")
        @endcomponent

        @component('layouts.header_tabla')
            @slot("tooltip_header_tabla", "El encargado del cubículo")
            @slot("titulo_header_tabla", "Profesor")
        @endcomponent

        @component('layouts.header_tabla')
            @slot("tooltip_header_tabla", "Cantidad de computadoras hay en el cubículo")
            @slot("titulo_header_tabla", "Cantidad de equipo")
        @endcomponent

        <td></td>
        <td></td>

   </tr>
@endsection

@section('cuerpo_tabla')
   @foreach ($cubiculos as $cubiculo)
	<tr>
		<td>{{ $cubiculo->Tipo }}</td>
		<td>{{ $cubiculo->Profesor }}</td>
		<td>{{ $cubiculo->CantidadEquipo }}</td>

        @component('layouts.boton_editar')
            @slot("controlador_editar")
                {{action('CubiculoController@edit', [ 'tipo' => $cubiculo->Tipo])}}
            @endslot
        @endcomponent

        @component('layouts.boton_borrar')
            @slot("controlador_borrar")
                {{ Form::open(['action' => ['CubiculoController@destroy', $cubiculo->Tipo]]) }}
            @endslot
        @endcomponent

        <!--Boton ver fotos-->
        <td class="text-center">
            <a href="{{action('CubiculoController@viewImg', [ 'tipo' => $cubiculo->Tipo])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>

	</tr>
	@endforeach
@endsection
