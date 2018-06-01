@extends('layouts.formulario_general')

@section('title', 'Vincular cursos software')

@section('objeto_informacion', 'vincular cursos y software')

@section('metodo_envio_formulario')
    <form class="form-horizontal" action = "{{action('CursoController@crear_relacion', $curso->id, $url_regreso)}}" method="POST" enctype="multipart/form-data">
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

					@if(count($softwares) == 0)
						No hay softwares registrados en la base de datos
					@endif
				</td>
			</tr>
	</table>
@endsection

@section('boton_submit_formulario')
    <div class="col-sm-offset-4 col-sm-8">
        {{ Form::submit('Vincular', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
@endsection


