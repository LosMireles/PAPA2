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
		<td>{{ $aula->nombre}}</td>
		<td>{{ $aula->capacidad }}</td>

        @component('layouts.boton_editar')
            @slot("controlador_editar")
                {{action('AulaController@edit', [ 'nombre' => $aula->nombre])}}
            @endslot
        @endcomponent

        @component('layouts.boton_borrar')
            @slot("controlador_borrar")
                {{ Form::open(['action' => ['AulaController@destroy', $aula->nombre]]) }}
            @endslot
        @endcomponent


        <!--Boton ver fotos-->
        <td class="text-center">
            <a href="{{action('AulaController@viewImg', [ 'nombre' => $aula->nombre])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>

	</tr>
	@endforeach
@endsection
