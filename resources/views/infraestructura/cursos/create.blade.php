@extends('layouts.insertar')

@section('title')
   insertar un curso
@endsection

@section('descripcion')
    <a href="{{action('CursoController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Formulario para agregar un curso</h1>
@endsection

@section('accion')
   action = "{{action('CursoController@store')}}"
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="nombre" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre del Curso">Nombre</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='nombre' id='nombre' placeholder="Nombre" required>
		</div>
	</div>

	<div class="form-group">
		<label for="periodo" class="col-sm-4 control-label" data-toggle="tooltip" title="Período en el que fue impartido">Período</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='periodo' id="periodo" placeholder="2015-1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="grupo" class="col-sm-4 control-label" data-toggle="tooltip" title="Número del grupo">Grupo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='grupo' id="grupo" placeholder="1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="noEstudiantes" class="col-sm-4 control-label" data-toggle="tooltip" title="Número de estudiantes de la licenciatura presentes en el curso">Número de estudiantes</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='noEstudiantes' id="noEstudiantes" placeholder="1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="tipoAula" class="col-sm-4 control-label" data-toggle="tooltip" title="Esto es: laboratorio, aula, etc">Tipo de aula</label>

		<div class="col-sm-8">
            <select name="tipoAula" class="form-control">
            @foreach($tiposAulas as $tipo)
               <option value="{{$tipo}}"> {{$tipo}} </option>
            @endforeach
            </select>
		</div>
	</div>

	<div class="form-group">
		<label for="pertenencia" class="col-sm-4 control-label" data-toggle="tooltip" title="A que licenciatura pertenece la materia (LCC, LM, otro)">Pertenencia</label>

		<div class="col-sm-8">
            <select name="pertenencia" class="form-control">
            @foreach($licenciaturas as $licenciatura)
               <option value="{{$licenciatura}}" > {{$licenciatura}} </option>
            @endforeach
            </select>
		</div>
	</div>

	<div class="form-group">
		<label for="espacios" class="col-sm-4 control-label" data-toggle="tooltip" title="Espacios donde se imparte el curso">Espacios</label>

		<div class="col-sm-8">
			@foreach($espacios as $espacio)
				<input type="checkbox" name="espacios[]" value="{{$espacio->tipo}}">
				{{$espacio->tipo}}<br>
			@endforeach
		</div>
	</div>

@endsection

