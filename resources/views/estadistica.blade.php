<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Buscador</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">Buscar productos</a>
					<a class="navbar-brand" href="estadistica">Estadística</a>
				</div>
				<!-- Inicia Menu -->
			</div>
		</nav>
	</header>
	<section class="main container">
		<div class="form-group">
		</div>
	</section>
	<section class="main container">
		<div class="form-group">
			@foreach($productos as $item)
				<ul class="list-group"> {{ $item->idproducto }} - {{ $item->titulo }}
					@foreach($item->palabras as $palabra)
				  		<li class="list-group-item">{{ $palabra->keyword }}</li>
					@endforeach
				</ul>
			@endforeach
		</div>
	</section>

	<footer> </footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/buscador.js"></script>
</body>
</html>