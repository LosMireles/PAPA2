@extends('layouts.menus')

@section('title')
	infraestructura
@endsection

@section('descipcion')
	<a href="/" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Infraestructura</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th class="text-center">Gestionar</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="{{action('EspacioController@index')}}" data-toggle="tooltip" title="Espacios físicos en general con los que cuenta la licenciatura">Espacio físico[?]</a>

			<ul class="list-unstyled" style="margin-left: 25px;">
				<li> <a href="/infraestructura/aula" data-toggle="tooltip" title="Aulas de las que dispone la licenciatura. Subcategoría de 'Espacio'">Aula [?]</a> </li>

				<li> <a href="/infraestructura/cubiculo" data-toggle="tooltip" title="Cubículos con los que cuenta la licenciatura para los profesores. Subcategoría de 'Espacio'">Cubículo [?]</a> </li>

				<li> <a href="/infraestructura/asesoria" data-toggle="tooltip" title="Espacios físicos donde se imparten las asesorias. Subcategoría de 'Espacios'">Asesoría [?]</a> </li>

				<li> <a href="/infraestructura/sanitario" data-toggle="tooltip" title="Sanitarios de la licenciatura. Subcategoría de 'Espacio'">Sanitario [?]</a> </li>

				<li> <a href="/infraestructura/auditorio" data-toggle="tooltip" title="Auditorios con los que cuenta la licenciatura. Subcategoría de 'Espacio'">Auditorios [?]</a> </li>
			</ul>
		</td>
	</tr>

	<tr>
		<td><a href="{{action('CursoController@index')}}">Cursos</a></td>
	</tr>
@endsection
