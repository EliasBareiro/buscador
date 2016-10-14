<?php require_once('conexiones/connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<title>buscador</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<header style="margin-bottom: 10px;">
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="containeres">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-mrg">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">E.E.S.T. N°4</a>
			</div>

			<div class="collapse navbar-collapse" id="navegacion-mrg">
				<ul class="nav navbar-nav">
					<li><a href="regulares.php">Regulares</a></li>
					<li><a href="previas.php">Previas</a></li>
					<li><a href="completacursos.php">Completacursos</a></li>
					<li><a href="completacarreras.php">Completacarreras</a></li>
					<li><a href="equivalencias.php">Equivalencias</a></li>
				</ul>

				<form action="" method="post" class="navbar-form navbar-right" name="search_form" id="search_form">
					<input type="text" name="search" id="search" >
				</form>
			</div>
		</div>
	</nav>
</header>
	<div class="container">
		<div class="center">
			<img src="imagenes/EETn°4.jpg" width="100" style="margin-bottom: 20px;">
		</div>
		<div class="form center">
			
		</div>
		<div class="container1">
			<div class="row">
				<div >
					<div class="panel-heading"><h1>Materias Adeudadas</h1></div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="resultados"></div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<div class="footer center">
			Copyrigth® 2016 - Todos los derechos reservados

	</div>	

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>