@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('estilo_personalizado')
	<style type="text/css">
		table tr td {
			padding: : 15px;
		}
	</style>
	@yield('javascripts')
@endsection

@section('content')
    <br>
    <a href="/" class="btn btn-primary">Regresar</a>
	@yield('descripcion')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <!-- Se abre el formulario -->
            @yield('formopen')
            {{ Form::hidden('_method', 'PATCH') }}

            <div class="form-group">
                <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
            </div>

            @yield('contenido_formulario')

		</div>
	</div>

    @yield('boton_guardar')

    <hr>

    @yield('extra_inciso_general')

    <!-- Cierra el formulario -->
    {{ Form::close() }}

    @yield('tablas_inciso_general')
    @yield('evidencias_tabla')

    <hr>

    @yield('Fotografias')
    <br>
    <br>

@endsection

