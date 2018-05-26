@extends('layouts.actualizar')

@section('title')
	Técnico académico editar
@endsection

@section('descripcion')
	<a href="{{ url('/tecnicos_academicos') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Formulario de edición del técnico académico {{$tecnico->nombre}}</h1>
@endsection



@section('formopen')
    {{Form::open( array( 'action' => ['TecnicoAcademicoController@update', $tecnico->id], 'class' => 'form-horizontal',
    'files' => true ) )}}
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre completo del técnico">Nombre: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="{{$tecnico->nombre}}">
		</div>
	</div>

	<div class="form-group">
		<label for="grado" class="col-sm-4 control-label" data-toggle="tooltip" title="Grado académico alcanzado por el técnico">Grado académico: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" name="grado" value="{{$tecnico->grado_academico}}" required >
		</div>
	</div>

	<div class="form-group">
		<label for="certificados" class="col-sm-4 control-label" data-toggle="tooltip" title="Certificados obtenidos por el técnico">Certificados: </label>

		<div class="col-sm-8">
			<textarea name="certificados" class="form-control">{{$tecnico->certificados}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="exp" class="col-sm-4 control-label" data-toggle="tooltip" title="Años de experiencia del técnico en el área">Años de experiencia: </label>

		<div class="col-sm-8">
            <input type='text' class="form-control" name='exp' placeholder="" value="{{$tecnico->anios_exp}}" required>
		</div>
	</div>
@endsection

