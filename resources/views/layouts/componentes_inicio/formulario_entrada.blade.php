@component("layouts.componentes.tabla_general")
	@slot("cabeza_tabla")
		<th>Áreas</th>
		<th>Incisos</th>
	@endslot

	@slot("cuerpo_tabla")
		<tr>
			<td><a href="{{ url('/aulas') }}">Aulas y laboratorios</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/cubiculos') }}">Cubículos</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/asesorias') }}">Espacios de asesorías</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/sanitarios') }}">Sanitarios</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/auditorios') }}">Auditorios</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/softwares') }}">Software</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/equipos') }}">Equipo</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/tecnicos_academicos') }}">Técnicos académicos</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td><a href="{{ url('/cursos') }}">Cursos</a></td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.x.x (Descripción)</a></li>
					<li><a href="">9.x.x (Descripción)</a></li>
				</ul>
			</td>
		</tr>
	@endslot
@endcomponent