@extends('layouts.formulario_general')

@section('title')
	@yield('title')
@endsection

@section('javascripts')
	@yield('javascripts')
@endsection

@section('objeto_informacion')
    agregar @yield('objeto_informacion')
@endsection

@section('metodo_envio_formulario')
    <form class="form-horizontal" action = "@yield('accion')" method="POST" enctype="multipart/form-data">
@endsection

@section('contenido_formulario')
    @yield('contenido_formulario')
@endsection

@section('boton_submit_formulario')
    <div class="col-sm-offset-4 col-sm-8">
        {{ Form::submit('Agregar', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
@endsection

