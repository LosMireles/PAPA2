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
					<li>9.1.4</li>
					<li>9.1.6</li>
					<li>9.1.7</li>
					<li>9.1.8</li>
					<li>9.1.9</li>
					<li>9.1.10</li>
					<li>9.1.11</li>
					<li>9.1.12</li>
					<li>9.1.13</li>
				</ul>
			</td>

			<td>
				<ul class="list-unstyled">
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.1.4')->first();
							if ($respuesta->estado == 1) {
								$estado = 'Completo';
							}else{
								if ($respuesta->respuesta != '') {
									$estado = 'Incompleto';
								}else{
									$estado = 'Vacío';
								}
							}
						?>
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','El inciso no se ha iniciado')
							@slot('mensaje', $estado )
						@endcomponent
					</li>
					<li>
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje','Incompleto')
						@endcomponent
					</li>

					<li>
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Todas las preguntas han sido respondidas')
							@slot('mensaje','Completo')
						@endcomponent
					</li>

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
					<li>9.2.1</li>
					<li>9.2.2</li>
					<li>9.2.5</li>
					<li>9.2.7</li>
					<li>9.2.11</li>
					<li>9.2.12</li>
					<li>9.2.14</li>
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
	@endslot
@endcomponent
