@extends('layouts.insertar')

@section('title')
   agregar una asignatura
@endsection

@section('descripcion')
    <a href="{{action('AsignaturaController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Formulario para agregar una asignatura</h1>
@endsection

@section('accion')
   action = "{{action('AsignaturaController@store')}}"
@endsection

@section('contenido_formulario')
   	<div class="form-group">
        <label for="nombre"
               class="col-sm-4 control-label"
               data-toggle="tooltip"
               title="Nombre de la asigatura">
            Nombre
        </label>

		<div class="col-sm-8">
            <input type='text'
                   class="form-control"
                   name="nombre"
                   placeholder="Nombre" required>
		</div>
	</div>

	<div class="form-group">
        <label for="descripcion"
               class="col-sm-4 control-label"
               data-toggle="tooltip"
               title="Descripción de la asignatura">
            Descripción
        </label>

		<div class="col-sm-8">
            <textarea name="descripcion"
                      class="form-control"
                      rows="5"
                      placeholder="Descripción" required="">
            </textarea>
		</div>
	</div>

	<div class="form-group">
        <label for="curso_id"
               class="col-sm-4 control-label"
               data-toggle="tooltip"
               title="Nombre del curso de la asignatura">
            Curso
        </label>

		<div class="col-sm-8">
            <select name="curso_id" class="form-control">
            @foreach($cursos as $curso)
                <option value="{{$curso->id}}">
                    {{$curso->nombre}} <br>
            @endforeach
            </select>
		</div>
	</div>

@endsection

