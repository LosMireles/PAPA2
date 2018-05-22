@extends('layouts.inciso')

@section('accion')
    action = "{{action('Inciso9_2_7Controller@update', $preguntas)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_2_7Controller@update', $preguntas],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	

@endsection
