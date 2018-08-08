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
				<div id="navegacion-fm">
					<form id="formBuscador" action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input id="keyword" type="text" class="form-control" placeholder="Buscar">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<section class="main container">
		<div class="form-group">
			{{ $resultados }}
			
		</div>
	</section>
	<section class="main container">
		<div class="form-group">
			<textarea id="json_response" onchange="auto_grow(this)" class="form-control">
			</textarea>
		</div>
	</section>

	<footer> </footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/buscador.js"></script>
</body>
</html>