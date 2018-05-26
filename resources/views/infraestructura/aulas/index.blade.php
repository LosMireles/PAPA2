@extends('layouts.index_general')
@section('title')
   	Aulas
@endsection

@section('ruta_regresar', '/infraestructura')

@section('controlador_crear')
    {{action('AulaController@create')}}
@endsection

@section('titulo_boton_agregar', 'Agregar nueva aula')

@section('objeto_informacion', 'aulas')

@if (session('status'))
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    </script>
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@section('cabeza_tabla')
   	<tr>
        @component('layouts.header_tabla')
            @slot("tooltip_header_tabla", "Nombre escrito en las puertas")
            @slot("titulo_header_tabla", "Código del aula")
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Cantidad de equipo audiovisual hay en el aula")
            @slot('titulo_header_tabla', "Cantidad de equipo")
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Cantidad de computadoras hay en el aula")
            @slot('titulo_header_tabla', "Cantidad de computadoras")
        @endcomponent

        @component('layouts.header_tabla')
            @slot('tooltip_header_tabla', "Número máximo de personas que pueden estar dentro del aula")
            @slot('titulo_header_tabla', "Capacidad")
        @endcomponent
        <td></td>
        <td></td>
        <td></td>
   	</tr>
@endsection

@section('cuerpo_tabla')
   	@foreach ($aulas as $aula)
    <tr>
		<td>{{ $aula->Tipo }}</td>
		<td>{{ $aula->CantidadAV }}</td>
		<td>{{ $aula->CantidadEquipo }}</td>
		<td>{{ $aula->Capacidad }}</td>

        @component('layouts.boton_editar')
            @slot("controlador_editar")
                {{action('AulaController@edit', [ 'tipo' => $aula->Tipo])}}
            @endslot
        @endcomponent

        @component('layouts.boton_borrar')
            @slot("controlador_borrar")
                {{ Form::open(['action' => ['AulaController@destroy', $aula->Tipo]]) }}
            @endslot
        @endcomponent


        <!--Boton ver fotos-->
        <td class="text-center">
            <a href="{{action('AulaController@viewImg', [ 'tipo' => $aula->Tipo])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>

	</tr>
	@endforeach
@endsection
