<?php  
  session_start();
  if(!(isset($_SESSION["nombre_persona"])))
  {
  	header("location: paginaPrincipal.html");
  }

?>

<!DOCTYPE html>
<!--@arodriguez!-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilosUsuarioAdministrador.css">

	<title>Pinterest • El catálogo global de ideas</title>
	<link rel="icon" href="img/favicon" sizes="16x16" type="image/jpg">
</head>
<body>
	<div>
		<a href="pinterest.php"><button type="button" class=" btn btn-default cambiacolor"  style="margin-left: 20px; font-weight:bold; ">
	   	 <img src="img/logo.png" height="34" width="34"><br><p class="tamaño"></p>
	   </button> </a>
	
	
		<input type="text" name="search" id=search placeholder="Buscar" class="input" w>
	 
	
		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696" class="fa fa-navicon fa-2x "><br><p style="font-family: helvetica; font-weight:bold; " class="tamaño">Inicio</p></i>
		</button>
	
	
		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696" class="fa fa-user fa-2x "><br><div style="height: 24px; width: 24px;"><div style="background-color: #EFEFEF; padding-bottom: 100%;"></div></div><p style="font-family: helvetica;font-weight: bold;" class="tamaño"><?php
             echo $_SESSION["nombre_persona"];
			?></p></i>
		</button>
	
	
		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696" class="fa fa-commenting fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño"><span class="glyphicon glyphicon-menu-hamburger"></span></p></i>
		</button>

		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696" class="fa fa-commenting fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño"><span class="glyphicon glyphicon-bell"></span></p></i>
		</button>

		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696" class="fa fa-commenting fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño"><span class="glyphicon glyphicon-option-horizontal"></span></p></i>
		</button>

		<div class="div-principal">
			<div style="background-color: #EFEFEF">
				<p class="bienvenida">Bienvenido administrador</p>
			</div>
		<div class="div-secundario">
			<a href="Formularios/form-genero.php"><button type="button" class="btn btn-danger btn-lg btn-block ">Genero</button></a>
			<a href="Formularios/form-temas-de-pines.php"><button type="button" class="btn btn-default btn-lg btn-block">Temas de Pines</button></a>
			<a href="Formularios/form-tipo-notificacion.php"><button type="button" class="btn btn-danger btn-lg btn-block">Tipo de notificaciones</button></a>
			<a href="Formularios/form-tipos-empresas.php"><button type="button" class="btn btn-default btn-lg btn-block">Tipos de empresa</button></a>
			<a href="Formularios/form-tipo-tablero.php"><button type="button" class="btn btn-danger btn-lg btn-block">Tipos de tablero</button></a>
			<a href="Formularios/form-tipo-usuario.php"><button type="button" class="btn btn-default btn-lg btn-block">Tipos de usuario</button></a>
		</div>
		<div style="margin: 10px 0px 0px 45px">
			<form class="form-inline" role="form">
			<img src="img/img arte/arte7.jpg" width="250" height="300">
			<img src="img/img cartoon/cart8.jpg" width="250" height="300">
			<img src="img/img POO/POO5.jpg" width="250" height="300">
			<img src="img/temas/manualidad/manualidades17.jpg" width="250" height="300">
			<img src="img/img gundam/msg3.jpg" width="250" height="300">
		</div>

			
		</div>

	<script type="text/javascript" src="js/funcionalidades-login.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>