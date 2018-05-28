@extends('layouts.formulario_create_general')

@section('title', 'relacion cursos software')

@section('objeto_informacion', 'relacionar cursos y software')

@section('accion')
	{{action('CursoController@crear_relacion', $software->id)}}
@endsection

@section('contenido_formulario')
	<table class="table">
		<thead>
			<th>Software</th>
			<th>Cursos disponibles</th>
		</thead>
			<tr>
				<td>{{$software->nombre}}</td>

				<td>
					@foreach($cursos as $curso)
						@if(in_array($curso, (array) $software->cursos))
							<input type="checkbox" name="cursos[]" value="{{$curso->id}}" checked> {{$curso->nombre}} <br>
						@else
							<input type="checkbox" name="cursos[]" value="{{$curso->id}}"> {{$curso->nombre}} <br>
						@endif
					@endforeach
				</td>
			</tr>
	</table>
@endsection