@component("layouts.componentes.tabla_general")
	@slot("cabeza_tabla")
		<tr>
			<th>Sección</th>
			<th>Incisos</th>
			<th>Estado</th>
		</tr>
	@endslot

	@slot("cuerpo_tabla")
		<tr>
			<td>9.1</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="#">9.1.4</a></li>
					<li><a href="#">9.1.6</a></li>
					<li><a href="#">9.1.7</a></li>
					<li><a href="#">9.1.8</a></li>
					<li><a href="#">9.1.9</a></li>
					<li><a href="#">9.1.10</a></li>
					<li><a href="#">9.1.11</a></li>
					<li><a href="#">9.1.12</a></li>
					<li><a href="#">9.1.13</a></li>
				</ul>
			</td>

			<td>
				<ul class="list-unstyled">
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
				</ul>
			</td>
		</tr>

		<tr>
			<td>9.2</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="#">9.2.1</a></li>
					<li><a href="#">9.2.2</a></li>
					<li><a href="#">9.2.5</a></li>
					<li><a href="#">9.2.7</a></li>
					<li><a href="#">9.2.11</a></li>
					<li><a href="#">9.2.12</a></li>
					<li><a href="#">9.2.14</a></li>
				</ul>
			</td>

			<td>
				<ul class="list-unstyled">
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
					<li>Vacio</li>
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