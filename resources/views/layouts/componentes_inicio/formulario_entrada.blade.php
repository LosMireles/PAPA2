@component("layouts.componentes.tabla_general")
	@slot("cabeza_tabla")
		<th>Áreas</th>
		<th>Incisos</th>
	@endslot

	@slot("cuerpo_tabla")
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
					@slot('url')
						{{ url('/aulas') }}
					@endslot
					@slot('titulo', "Haga clic para ir a la gestión de aulas")
					@slot('mensaje', "Aulas y laboratorios")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.6 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/cubiculos') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de cubículos")
						@slot('mensaje', "Cubículos")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.9 (Descripción)</a></li>
					<li><a href="">9.2.11 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/asesorias') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de espacios de asesorías")
						@slot('mensaje', "Espacios de asesorías")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.10 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/sanitarios') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de sanitarios")
						@slot('mensaje', "Sanitarios")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.13 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/auditorios') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de auditorios")
						@slot('mensaje', "Auditorios")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.11 (Descripción)</a></li>
					<li><a href="">9.1.12 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/softwares') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de software")
						@slot('mensaje', "Software")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.2.5 (Descripción)</a></li>
					<li><a href="">9.2.2 (Descripción)</a></li>
					<li><a href="">9.2.1 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/equipos') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de equipos")
						@slot('mensaje', "Equipo")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.2.7 (Descripción)</a></li>
					<li><a href="">9.1.8 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/tecnicos_academicos') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de técnicos académicos")
						@slot('mensaje', "Técnicos académicos")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.4 (Descripción)</a></li>
					<li><a href="">9.2.12 (Descripción)</a></li>
					<li><a href="">9.2.14 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general_link")
						@slot('url')
							{{ url('/cursos') }}
						@endslot
						@slot('titulo', "Haga clic para ir a la gestión de cursos")
						@slot('mensaje', "Cursos")
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li><a href="">9.1.7 (Descripción)</a></li>
				</ul>
			</td>
		</tr>
	@endslot
@endcomponent