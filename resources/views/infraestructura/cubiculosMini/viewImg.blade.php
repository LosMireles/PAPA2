<?php namespace App; ?>
@extends('layouts.verImagenes')

@section('title')
	 Fotografias cubiculo <?php $nombre; ?>
@endsection

@section('descripcion')
    <a href="/inciso_9_1_9" class="btn btn-primary">
        Regresar
    </a>

		<div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
				<form class="form-horizontal" action = "{{action('CubiculoMiniController@guardarImg',['nombre'=>$nombre])}}" method="POST" enctype="multipart/form-data">
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
	<h1 class="text-center">Fotografías de <?php echo $nombre; ?></h1>

  <?php
		$cubiculo = Cubiculo::where('nombre', $nombre)->first();
		$id = $cubiculo->id;
    $dirname = 'storage/infraestructura/cubiculosMini/' . $id . '/';
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
			img{
				width: auto;
				max-height: 100%
			}
		</style>
	</head>

    @foreach ($images as $image)

			<body>
				<figure>
					<div class='buttonimg'>
						<div class="img_div">
							<img src="<?php echo asset($image)?>" height="220"
								alt="<?php echo $image?>"/>
							<figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
							<div class="row text-center">
								<form action="{{ route('borrarImgCubiculoMini', ['nombre'=> $nombre, 'imagen' => pathinfo($image)['basename']]) }}" method="post">
                  {{ csrf_field() }}
                  <button class="btn btn-danger" onclick="return confirm('¿Estas seguro que deseas borrar esta fotografía?')" type="submit" name="button">Borrar</button>
								</form>
							</div>
						</div>
					</div>
				</figure>
			</body>
		@endforeach

@endsection
