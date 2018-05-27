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
	@yield('descripcion')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            @yield('formopen')
            {{ Form::hidden('_method', 'PATCH') }}
            {{ Form::close() }}

            <div class="form-group">
                <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
            </div>

            @yield('contenido_formulario')

		</div>
	</div>

    <hr>

    @yield('tablas_inciso_general')

    <table class="table table-hover">
        <thead style="background-color: #ed2a2a; color: white;">
            @yield('cabeza_tabla')
        </thead>
        <tbody>
            @yield('cuerpo_tabla')
        </tbody>
    </table>

    <hr>

    @yield('Fotografias')

    @yield('boton_guardar')

    @yield('extra_inciso_general')

@endsection

