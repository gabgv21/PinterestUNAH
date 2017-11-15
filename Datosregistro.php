<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css-inicioSesion.css">

	<title>Pinterest • El catálogo global de ideas</title>


    <link rel="icon" href="img/logo.png" sizes="16x16" type="image/jpg">




</head>
<body id="body" >


	<div class="container">
		<div class="row" id="div-contenedor">
			<div id="div-recuadro">
				<div id="div-dentroOtroRecuadro">
					<div id="div-logo">
						<img src="img/logo.png" id="div-tamonoLogo">
					</div>
					<div id="div-info">
						<h3 id="div-estiloLetra">Registrate para ver más</h3>
						<div style="height: 10px"></div>
					</div>

					<div id="div-texto">
						<div id="div-error-2" style="color: red;"></div>
						<div id="div-espacio">
							<form>
							<b>Nombre Completo</b>
							<input type="text" aria-label="Correo o número de teléfono" class="cajas-de-texto"  id="txt-nombre-completo"><br>
							<br>


							<input type="date" class="cajas-de-texto" name="txt-fecha" id="txt-fecha" placeholder="Edad">


							<colspan>
								<label><input value="1" type="radio" name="rbt-genero"><b>Hombre</b></label>
								<label><input type="radio" name="rbt-genero" value="2" style="position:relative;"><b>Mujer</b></label></colspan><div style="height: 10px"></div>
							<label><input type="radio" name="rbt-genero" value="3" style=""><b>Personalizado</b></label>
						</form>
						</div>

						<div>
							<button class="red SignupButton active" id="div-btnSesion-2"><div>Registrate</div></button>
						</div>
							<div style="height: 10px"></div>
							<a rel="button" href="iniciarSesion.html" ><b>Volver</b> </a>

							<hr>
							<a href="iniciarSesionEmpresa.html"><b style="font-size: 18px;">Seguir como empresa</b></a>

					</div>
				</div>
			</div>
		</div>
	</div>
			<div id="div-contrasena">
				<a href="recuperarContrasena.html">¿Olvidaste tu contraseña?</a> <br>
				<span>
					¿Representas a una empresa?
					<a href="iniciarSesionEmpresa.html" >Empieza aquí.</a>
				</span>
			</div>
	<div id="div-barra"></div>
		<span >¿Necesitas una cuenta? </span>
		<a href="login.html"><button id="div-registrar">Registrarte</button></a>
	</div>
	</div>


	<script src="herramientas/bootstrap/jquery/jquery.min.js"></script>
	<script src="herramientas/bootstrap/js/bootstrap.min.js"></script>

	<!--<script src="../js/iniciarSesion.js" type="text/javascript" ></script>-->
	<input type="email" name="txt-correo" id="txt-correo" style="visibility: hidden;"
      <?php
       echo'value="'.$_POST["txt-correo"].'"'
     ?>
	 >
	<input type="password" name="txt-password" id="txt-password"  style="visibility:hidden;" 
     <?php
       echo'value="'.$_POST["txt-password"].'"'
     ?>
	>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/funciones.js"></script>
</body>
</html>