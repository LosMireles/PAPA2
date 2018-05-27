@component("layouts.componentes.tabla_general")
	@slot("cabeza_tabla")
		<th>Criterio de evaluación</th>
		<th>Incisos relacionados</th>
	@endslot

	@slot("cuerpo_tabla")
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con las aulas y los laboratorios en el programa educativo')
					@slot('mensaje', 'Aulas y laboratorios')
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
							@slot('mensaje', '9.1.6 (Características de las aulas)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con los cubículos en el programa educativo')
					@slot('mensaje', 'Cubículos')
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
							@slot('mensaje', '9.1.9 (Cubículos y áreas de profesores)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_11') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.11 (Equipo de cómputo de maestros)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con los espacios para asesorías en el programa educativo')
					@slot('mensaje', 'Espacios de asesorías')
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
							@slot('mensaje', '9.1.10 (Espacios para asesoría y características)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con los sanitarios en el programa educativo')
					@slot('mensaje', 'Sanitarios')
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
							@slot('mensaje', '9.1.13 (Características de los Sanitarios)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con los auditorios en el programa educativo')
					@slot('mensaje', 'Auditorios')
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
							@slot('mensaje', '9.1.11 (Auditorios y actividades que ocurren en ellos)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_12') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.12 (Auditorios y su higiene)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con el software en el programa educativo')
					@slot('mensaje', 'Software')
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
							@slot('mensaje', '9.2.5 (Plataformas de cómputo (Sistemas operativos))')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_2') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.2 (Tipos de Software del programa (case, lenguajes, manejadores de BD, paquetería en general))')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_1') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.1 (Software usados por asignatura)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con el equipo en el programa educativo')
					@slot('mensaje', 'Equipo')
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
							@slot('mensaje', '9.2.7 (Redes disponibles para el programa)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_8') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.8 (Equipo de cómputo y audiovisual en las aulas)')
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
							@slot('mensaje', '9.1.4 (Perfil y experiencia de los responsables de los servicios de cómputo)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_12') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.12 (Soporte técnico)')
						@endcomponent
					</li>
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_14') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.14 (Currículum del personal técnico)')
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				@component("layouts.componentes.tooltip_general")
					@slot('titulo', 'Incisos relacionados con los cursos del programa educativo')
					@slot('mensaje', 'Cursos')
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
