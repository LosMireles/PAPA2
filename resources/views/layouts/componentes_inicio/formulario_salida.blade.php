@component("layouts.componentes.tabla_general")
	@slot("cabeza_tabla")
		<tr>
			<th class="text-center">Visualización de la información capturada en 'Formulario: entrada'</th>
			<th></th>
		</tr>
	@endslot

	@slot("cuerpo_tabla")
		<tr>
			<td>9.1</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="#">9.1.x</a></li>
					<li><a href="#">9.1.x</a></li>
					<li><a href="#">9.1.x</a></li>
					<li><a href="#">9.1.x</a></li>
					<li><a href="#">9.1.x</a></li>
					<li><a href="#">9.1.x</a></li>
				</ul>
			</td>
		</tr>

		<tr>
			<td>9.2</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="#">9.2.x</a></li>
					<li><a href="#">9.2.x</a></li>
					<li><a href="#">9.2.x</a></li>
					<li><a href="#">9.2.x</a></li>
					<li><a href="#">9.2.x</a></li>
					<li><a href="#">9.2.x</a></li>
				</ul>
			</td>
		</tr>


		<!--<tr>
			<td>
				<a href="{{ url('/infraestructura') }}">9.1 Infraestructura</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="{{ url('/equipamiento') }}">9.2 Equipamiento</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="{{ url('/asignaturas') }}">Asignaturas</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="{{ url('/tecnicos_academicos') }}">Técnico académico</a>
			</td>
		</tr>-->
	@endslot
@endcomponent