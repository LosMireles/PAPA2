<?php namespace App; ?>
@extends('layouts.verImagenes')

@section('title')
	 Fotografias aula <?php $nombre; ?>
@endsection


@section('descripcion')
<?php
	if ($uurl == '916') {
		$urlRegreso = "\inciso_9_1_6";
	}elseif ($uurl == '918') {
		$urlRegreso = "\inciso_9_1_8";
	}

 ?>
    <a href=<?php echo $urlRegreso; ?> class="btn btn-primary">
        Regresar
    </a>

    <div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
				<form class="form-horizontal" action = "{{action('AulaController@guardarImg',['nombre'=>$nombre, 'uurl'=>$uurl])}}" method="POST" enctype="multipart/form-data">
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
		$aula = Aula::where('nombre', $nombre)->first();
		$id = $aula->id;
    $dirname = 'storage/infraestructura/aulas/' . $id . '/';
    $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
	?>

	<head>
		<style type='text/css'>
			.img_div {
				float: left;
				margin-right: 10px;
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
								<form action="{{ route('borrarImgAula', ['nombre'=> $nombre, 'uurl'=>$uurl, 'imagen' => pathinfo($image)['basename']]) }}" method="post">
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
