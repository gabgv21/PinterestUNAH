<?php
session_start();
if(!(isset($_SESSION["nombre_persona"])))
   {
   	 header('location: paginaPrincipal.html');
   }
?>
<!DOCTYPE html>
<html>
<head>
	<!--<script src="jquery-3.2.1.min.js"></script>
	<script src="masonry.js"></script>-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
	<link href="css/estiloperfil.css" rel="stylesheet">
		<title>Pinterest</title>
	<link rel="icon" href="img/favicon-pinterest.png">	
</head>

<body>
<!--<img src="pinterest.gif" width="30" height="30" class="margenes" >-->
<!--<div>
	
<<<<<<< HEAD
	   <button type="button" class=" btn btn-default cambiacolor"  style="margin-left: 20px; font-weight:bold; ">
	   	 <img src="img/logo.png" height="34" width="34"><br><p class="tamaño">Inicio</p>
	   </button>
=======
	  <a href="pinterest.html"> <button type="button" class=" btn btn-default cambiacolor"  style="margin-left: 20px;">
	   	<img src="img/logo.png" height="34" width="34"><br><p class="tamaño">Inicio</p>
	   </button></a> 
>>>>>>> origin/master
	
	
	<input type="text" name="search" id=search placeholder="Buscar" class="input">
	
	
	<button type="button" class="btn btn-default cambiacolor" >
		<i style="color:#969696" class="fa fa-navicon fa-2x "><br><p style="font-family: helvetica; font-weight:bold; " class="tamaño">Categorias</p></i>
	</button>
	
	
	<button type="button" class="btn btn-default cambiacolor" >
		<i style="color:#969696" class="fa fa-user fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño">Guardado</p></i>
	</button>
	
	
	<button type="button" class="btn btn-default cambiacolor" >
		<i style="color:#969696" class="fa fa-commenting fa-2x "><br><p style="font-family: helvetica;font-weight: bold;" class="tamaño">Notificaciones</p></i>
	</button>

<br>
	<hr style="margin-top: -2px">
</div>-->
 <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #FFFFFF;">
      <div class="container" style="margin-left: 0px;margin-right: 0px; width: auto;height: 60px;">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <a class="navbar-brand" href="pinterest.php"><img src="img/logo.png" height="38" width="38" style="margin-left: 15px;"></a>
          <input type="text" name="search" id=search placeholder="Buscar" style="font-weight: bold; width: 750px;" class="input" >
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="margin-right: 40px;">
          <ul class="nav navbar-nav  navbar-right">
            <li class="btn btn-default" style="font-size: 20px; font-weight: bold;"><a href="pinterest.php" class="" type="button">Inicio</a></li>
            <li class="btn btn-default" style="font-size: 20px; font-weight: bold;"><a href="perfilPinterest.php"><img src="img/Rose-shield2.png" height="25" width="25">Perfil</a></li>

            <li class="dropdown" ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/categoriasreal.png"> <span class=""></span></a>
              <ul class="dropdown-menu" style=" -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; font-weight:bolder;font-family: Helvetica;">
                <li><a href="#">Mobile Suit Gundam </a></li>
                <li><a href="#">Arte</a></li>
                <li><a href="#">POO</a></li>
                <li><a href="#">Cartoons</a></li>
                <li><a href="#">Educacion</a></li>
                <li><a href="#">Entretenimiento</a></li>
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Mundo Geek</a></li>
                <li><a href="#">Memes</a></li>
                <li><a href="#">Animales y Mascotas</a></li>
                <li><a href="#">Tegnologia</a></li>
              </ul>

            </li>
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/notificacionreal.png"> <span class=""></span></a>
              <ul class="dropdown-menu " style=" -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; ">
                <li><a href="#">Notificaciones</a></li>

                <li role="separator" class="divider"></li>

              </ul>
              
            </li>
            <li class="dropdown " >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/3puntosreal.png"><span class=""></span></a>
              <ul class="dropdown-menu " style=" -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; font-weight: bold;font-size: 20px; ">
                <li><a href="configuracionCuenta.php">Configuracion</a></li>
               
                <li role="separator" class="divider"></li>

                <li><a href="#">Centro de Asistencia</a></li>
                <li><a href="iniciarSesionEmpresa.html">Cambiar a una cuenta para empresas</a></li>
                <li><a href="politicas.html">Terminos y Privacidad</a></li>
                 <li role="separator" class="divider"></li>
                <li><a href="cerrarSesion.php">Salir</a></li>
              </ul>
              
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div style="margin: 100px 270px">
		<!--<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696"><br><span class=" glyphicon glyphicon-wrench" ></span><p style="font-family: helvetica;font-weight: bold;" class="tamaño"></p></i>
		</button>
			
		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696"><br><span class=" glyphicon glyphicon-open"></span><p style="font-family: helvetica;font-weight: bold;" class="tamaño"></p></i>
		</button>

		<button type="button" class="btn btn-default cambiacolor" >
			<i style="color:#969696"><br><span class=" glyphicon glyphicon-option-horizontal"></span><p style="font-family: helvetica;font-weight: bold;" class="tamaño"></p></i>
		</button>-->

			<p class="nombre-usuario">
				<?php

                 echo $_SESSION["nombre_persona"];
                 //echo '<div id="id-usuario">'.$_SESSION["id_usuario"].'</div>';
				?>
			</p>

			<p style=" margin: -40px 300px 0px 350px; color: grey; opacity: 0.7; font-size: 16px;"><b> seguidores &nbsp siguiendo</b></p>

			<span><img 
				<?php
                         echo 'src="img/perflies/'.$_SESSION["url_foto_perfl"].'"';
			          ?>
			 width="190" height="190" class="redondo"></span>

		<button type="button" class="boton-personalizado" id="btn-tableros">Tableros</button>
		<button type="button" class="boton-personalizado" id="btn-pines">Pines</button>

	
		</div>
		<div id="div-tableros">
		<br><br><br>
		<label><button class="cuadrado" type="button" data-toggle="modal" data-target="#NuevoTablero"><!--<div class="cuadrado">--><span><img src="img/cruz.png" height="60" width="45" style="margin: 80px 125px;"></span>
			<b style="margin: -10px 10px; font-size: 20px; color: #ACACAC">Crear tablero</b></button></label>
			<div id="contenedor-tableros">
				
			</div>
		</div>
		
		<div id="div-pines" style="display: none;">
			<br><br><br>
			<label><button class="cuadrado" type="button" data-toggle="modal" data-target="#NuevoPin"><!--<div class="cuadrado">--><span><img src="img/cruz.png" height="60" width="45" style="margin: 80px 125px;"></span>
				<b style="margin: -10px 10px; font-size: 20px; color: #ACACAC">Crear Pin</b></button></label>
		</div>	
			<div id="div-error">
				
			</div>
		<!--</div>--> 

		<!--Modal para crear Tablero-->

		<div class="modal fade" id="NuevoTablero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Crear Tablero</h4>
		      </div>
		      <div class="modal-body">
		          <!--inicio-->
		          
		          	Nombre &emsp; &emsp;
		          	<input type="text" name="txt-usuario" id="txt-usuario" class=" form-control cajita" placeholder='"como Lugares que visitar"'>
		     		<hr>
		          	Secreto &emsp; &emsp;
		          	<input type="checkbox" name="chk-secreto" id="chk-secreto" class="">

          <!--Fin -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btn-nuevo-usuario" class="btn btn-danger">Crear</button>
      </div>
    </div>
  </div>
</div> <!--Fin de la modal para nuevos tableros-->

<!--Modal para pines-->

<div class="modal fade" id="NuevoPin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Crear Pin</h4>
		      </div>
		      <div class="modal-body" style="height: 300px; width: 396px;">
		          <!--Formulario para subir pin-->
		          					
		          	<table>
		          		<tr>
		          			<td><label style="padding-top: 45px;"><button class="cuadrado img-responsive" type="button" data-toggle="modal" data-target="#NuevoPin"><span class="glyphicon glyphicon-camera"></span><span><p><b>Arrastra o carga una foto</b></p></span></button></label></td>
		          			<td>Agregar una descripcion <input type="text" class="form-control cajita" placeholder="descripcion" style="width: 190px; height: 60px;">
		          				<br><br><br>
		          				vincular con un sitio web
		          				<input type="text" class="form-control cajita" placeholder="http://" style="width: 190px;">
		          			</td>
		          		</tr>
		          	</table>
		          	<!--Nombre &emsp; &emsp;
		          	<input type="text" name="txt-usuario" id="txt-usuario" class=" form-control cajita" placeholder='"como Lugares que visitar"'>
		     		<hr>
		          	Secreto &emsp; &emsp;
		          	<input type="checkbox" name="chk-secreto" id="chk-secreto" class="">-->
		          

          <!--Fin Formulario para subir pin-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">siguiente</button>
      </div>
    </div>
  </div>
</div> <!--Fin de la modal para nuevos pines-->


	<!--<script>
			var container = document.querySelector('.contenedor');
			var msnry = new Masonry( container, {
			  // options
			  itemSelector: '.elemento'
			});
	</script>-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="js/controladorTableros.js"></script>
</body>
</html>