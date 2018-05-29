@extends('layouts.formulario_general')

@section('title')
	@yield('title')
@endsection

@section('javascripts')
	@yield('javascripts')
@endsection

@section('ruta_regresar')
    @yield('ruta_regresar')
@endsection

@section('objeto_informacion')
    editar @yield('objeto_informacion')
@endsection

@section('metodo_envio_formulario')
    @yield('formopen')
    {{ Form::hidden('_method', 'PATCH') }}
@endsection

@section('contenido_formulario')
    @yield('contenido_formulario')
@endsection

@section('boton_submit_formulario')
    <div class="col-sm-offset-4 col-sm-8">
        {{ Form::submit('Editar', ['class' => 'btn btn-warning']) }}
        {{ Form::close() }}
    </div>
@endsection

