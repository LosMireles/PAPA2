@extends('layouts.verImagenes')

@section('title')
	 Fotografias asesoria <?php $tipo; ?>
@endsection

@section('descripcion')
    <a href="/asesorias" class="btn btn-primary">
        Regresar
    </a>

		<div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
				<form class="form-horizontal" action = "{{action('AsesoriaController@guardarImg',['tipo'=>$tipo])}}" method="POST" enctype="multipart/form-data">
					<input type = "hidden" name = "_token" value = "{{csrf_token()}}">

					<div class="col-sm-8">
            <input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
					</div>
					<button type='submit' class="btn btn-primary">Agregar fotografía</button>
				</form>
			</div>
		</div>

@endsection

@section('Fotografias')
	<h1 class="text-center">Evidencias de asesoria <?php echo $tipo; ?></h1>

  <?php
    $dirname = 'storage/infraestructura/asesorias/' . $tipo . '/';
    $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
	?>

	<head>
		<style type='text/css'>
			.img_div {
				float: left;
				margin-right: 10px;
				margin-bottom: 15px;}
			.trailer_button{
				z-index:999;
				margin:1 20 -20 20;
				width:181px;
				border-radius:10px;
				margin-bottom: 15px;

			}
			.buttonimg{
				width:auto;
				height:auto;

			}
		</style>
	</head>

    @foreach ($images as $image)

			<body>
				<figure>
					<div class='buttonimg'>
						<div class="img_div">
							<img src="<?php echo asset($image)?>" width="320" height="200"
								alt="<?php echo $image?>"/>
							<figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>

							<!--<a href="{{ url('borrarImg', ['imagen' => $image, 'tipo'=> $tipo]) }}">-->
								<div class="row text-center">
									<!--<td>
										<button class="trailer_button"
											onclick="location.href='{!! route('borrarImg', ['imagen' => $image, 'tipo'=> $tipo]) !!}'">
												Borrar
										</button>
									</td>-->


									<form action="{{ route('borrarImg', ['tipo'=> $tipo, 'imagen' => pathinfo($image)['basename']]) }}" method="post">
                    {{ csrf_field() }}
                    <button class="trailer_button" type="submit" name="button">Borrar</button>
									</form>
								</div>


						</div>
					</div>
				</figure>
			</body>
		@endforeach

@endsection
