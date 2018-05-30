@extends('layouts.formulario_create_general')

@section('title', 'relacion cursos software')

@section('objeto_informacion', 'relacionar cursos y software')

@section('accion')
	{{action('CursoController@crear_relacion', $software->id, $url_regreso)}}
@endsection

@section('contenido_formulario')
	<table class="table">
		<thead>
			<th>Software</th>
			<th>Cursos disponibles</th>
		</thead>
			<tr>
				<!-- Obtener las id de los cursos en los que es usado el software -->
				<?php
					$temp = array();
				?>
				@foreach($software->cursos as $curso)
					<?php
						$temp[] = $curso->pivot->curso_id
					?>
				@endforeach

				<td>{{$software->nombre}}</td>

				<td>
					@foreach($cursos as $curso)
						<!-- Si el curso_id esta en los cursos donde el software es usado es checked -->
						@if(in_array($curso->id, $temp))
							<input type="checkbox" name="cursos[]" value="{{$curso->id}}" checked> {{$curso->nombre}} <br>
						@else
							<input type="checkbox" name="cursos[]" value="{{$curso->id}}"> {{$curso->nombre}} <br>
						@endif
					@endforeach

					@if(count($cursos) == 0)
						No hay cursos registrados en la base de datos
					@endif
				</td>
			</tr>
	</table>
@endsection
