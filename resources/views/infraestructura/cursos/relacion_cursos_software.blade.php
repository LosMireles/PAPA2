@extends('layouts.formulario_create_general')

@section('title', 'relacion cursos software')

@section('objeto_informacion', 'relacionar cursos y software')

@section('accion')
	{{action('CursoController@crear_relacion', $curso->id, $url_regreso)}}
@endsection

@section('contenido_formulario')
	<table class="table">
		<thead>
			<th>Curso</th>
			<th>Softwares disponibles</th>
		</thead>
			<tr>
				<!-- Obtener las id de los softwares en los que es usado el curso -->
                @php
					$softwares_usados = array();
                    foreach($curso->softwares as $software){
						$softwares_usados[] = $software->pivot->software_id;
                    }
                @endphp

				<td>{{$curso->nombre}}</td>

				<td>
					@foreach($softwares as $software)
						<!-- Si el curso_id esta en los cursos donde el software es usado es checked -->
						@if(in_array($software->id, $softwares_usados))
							<input type="checkbox" name="softwares[]" value="{{$software->id}}" checked> {{$software->nombre}} <br>
						@else
							<input type="checkbox" name="softwares[]" value="{{$software->id}}"> {{$software->nombre}} <br>
						@endif
					@endforeach
				</td>
			</tr>
	</table>
@endsection

