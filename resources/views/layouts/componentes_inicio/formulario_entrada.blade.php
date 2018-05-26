@component("layouts.componentes.tabla_general")
	@slot("cabeza_tabla")
		<th>Criterio de evaluación</th>
		<th>Incisos relacionados</th>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_6') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.6 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_9') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.9 (Descripción)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_11') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.11 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_10') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.10 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_13') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.13 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_11') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.11 (Descripción)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_12') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.12 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_5') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.5 (Descripción)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_2') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.2 (Descripción)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_1') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.1 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_7') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.7 (Descripción)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_8') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.8 (Descripción)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con los técnicos académicos en el programa educativo')
					@slot('mensaje', 'Técnicos académicos')
				@endcomponent
			</td>
			<td>
				<ul class="list-unstyled">
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_4') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.4 (Descripción general del perfil del técnico académico)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_12') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.12 (Descripción)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_14') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.14 (Descripción)')
						@endcomponent
					</li>
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
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_7') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.7 (Descripción)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
	@endslot
@endcomponent