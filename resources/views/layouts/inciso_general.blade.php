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
	Inciso @yield('descripcion')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            @yield('formopen')
            {{ Form::hidden('_method', 'PATCH') }}

            <div class="form-group">
                <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
            </div>

            @yield('contenido_formulario')

            <div class="col-sm-offset-4 col-sm-8">
                @yield('botonGuardar')
                {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
                {{ Form::close() }}
            </div>
		</div>
	</div>

    <hr>

    <table class="table table-hover">
        <thead style="background-color: #ed2a2a; color: white;">
            @yield('cabeza_tabla')
        </thead>
        <tbody>
            @yield('cuerpo_tabla')
        </tbody>
    </table>

    <hr>

    <h3 align="center">
        Fotografias del inciso {{$num_inciso or ""}}
    </h3>
    @yield('Fotografias')

@endsection

