@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('content')
    <a href="@yield('ruta_regresar')" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="@yield('controlador_crear')"class="btn btn-warning">
            @yield('titulo_boton_agregar')
        </a>
    </td>

    <h1 class="text-center">Listado de @yield("objeto_informacion")</h1>

	<table class="table table-hover">
		<thead style="background-color: #ed2a2a; color: white;">
                @yield('cabeza_tabla')
		</thead>

		<tbody>
                @yield('cuerpo_tabla')
		</tbody>

	</table>
@endsection

