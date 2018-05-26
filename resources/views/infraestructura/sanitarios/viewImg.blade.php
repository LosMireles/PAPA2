@extends('layouts.verImagenes')

@section('title')
	 editar sanitario <?php $tipo; ?>
@endsection

@section('descripcion')
    <a href="/sanitarios" class="btn btn-primary">
        Regresar
    </a>

    <h1 class="text-center">Evidencias de sanitario <?php echo $tipo; ?></h1>
@endsection

@section('Fotografias')
  <?php
    $dirname = 'storage/infraestructura/sanitarios/' . $tipo . '/';
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
							<div class="row text-center">
								<form action="{{ route('borrarImgSanitario', ['tipo'=> $tipo, 'imagen' => pathinfo($image)['basename']]) }}" method="post">
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
