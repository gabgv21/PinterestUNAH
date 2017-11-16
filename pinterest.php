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
	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> ESTA RUTA NO LA ENCUENTRA-->
	<link href="css/pinterest.css" rel="stylesheet">
		<title>Pinterest</title>
	<link rel="icon" href="img/favicon-pinterest.png">

    <link rel="icon" href="img/logo.png" sizes="16x16" type="image/jpg">
     <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
   
	<script src="js/controladorPines.js"></script>
	<script src="js/masonry.js"></script>	
</head>

<body>
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
                <li><a href="#" onclick="javascript:imagenesGundam();">Mobile Suit Gundam </a></li>
                <li><a href="#" onclick="javascript:imagenesArte();">Arte</a></li>
                <li><a href="#" onclick="javascript:imagenesPOO();">POO</a></li>
                <li><a href="#" onclick="javascript:imagenescart();">Cartoons</a></li>
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
                <li><a href="#">Configuracion</a></li>
               
                <li role="separator" class="divider"></li>

                <li><a href="#">Centro de Asistencia</a></li>
                <li><a href="#">Cambiar a una cuenta para empresas</a></li>
                <li><a href="politicas.html">Terminos y Privacidad</a></li>
                 <li role="separator" class="divider"></li>
                <li><a href="cerrarSesion.php">Salir</a></li>
              </ul>
              
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<!--<i class="fa fa-camera-retro"></i> fa-camera-retro-->
	<div  class="contenedor" style="margin-top: 100px;">
		<div id="div-imagenes" style=" margin-left: 75px;">
			
		</div>

		<!--Parte del cuerpo de imagenes-->
		<!--<div class="elemento">
			<img src="img/404.jpg"  width="260" height="200" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/bar.jpg"  width="260" height="320" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/boots.jpg" width="260" height="520" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/carro.jpg" width="260" height="400" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/com.jpg"  width="260" height="620" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/exam.jpg" width="260" height="300" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/finn.jpg" width="260" height="230" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/gato.jpg" width="260" height="300" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/goku.jpg" width="260" height="500" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/html.jpg" width="260" height="650" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/husky.jpg" width="260" height="300" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/ibra.jpg" width="260" height="420" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/trunks.jpg" width="260" height="450" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/messi.jpg" width="260" height="340" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/iniesta.jpg" width="260" height="410" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/pika.jpg" width="260" height="180" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/mono.jpg" width="260" height="140" class="img-rounded">
		</div>
		<div class="elemento">
			<img src="img/regg.jpg" width="260" height="260" class="img-rounded">
		</div> -->
	</div>
	<!--
	<script type="text/javascript">
		 function imagenesGundam(){
			$("#div-contenedor").html(
			'<div class="elemento">'
			+'<img src="img/img gundam/msg.jpg"  width="260" height="180" class="img-rounded">'
			+'</div>'
		    +'<div class="elemento">'
			+'<img src="img/img gundam/msg1.jpg"  width="260" height="420" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img gundam/msg2.jpg"  width="260" height="250" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img gundam/msg3.jpg"  width="260" height="340" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img gundam/msg4.jpg"  width="260" height="650" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img gundam/msg5.jpg"  width="260" height="410" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img gundam/msg6.jpg"  width="260" height="200" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img gundam/msg7.jpg"  width="260" height="560" class="img-rounded">'
			+'</div>');



		}
		function imagenesArte(){
			$("#div-contenedor").html(
			'<div class="elemento">'
			+'<img src="img/img arte/arte1.jpg"  width="260" height="180" class="img-rounded">'
			+'</div>'
		    +'<div class="elemento">'
			+'<img src="img/img arte/arte2.jpg"  width="260" height="420" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img arte/arte3.jpg"  width="260" height="250" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img arte/arte4.jpg"  width="260" height="340" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img arte/arte5.jpg"  width="260" height="650" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img arte/arte6.jpg"  width="260" height="410" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img arte/arte7.jpg"  width="260" height="200" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img arte/arte8.jpg"  width="260" height="560" class="img-rounded">'
			+'</div>');


		}
		function imagenesPOO(){
			$("#div-contenedor").html(
			'<div class="elemento">'
			+'<img src="img/img POO/POO1.jpg"  width="260" height="520" class="img-rounded">'
			+'</div>'
		    +'<div class="elemento">'
			+'<img src="img/img POO/POO2.jpg"  width="260" height="420" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img POO/POO3.jpg"  width="260" height="250" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img POO/POO4.jpg"  width="260" height="340" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img POO/POO5.jpg"  width="260" height="650" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img POO/POO6.jpg"  width="260" height="410" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img POO/POO7.jpg"  width="260" height="200" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img POO/POO8.jpg"  width="260" height="560" class="img-rounded">'
			+'</div>');


		}

		function imagenescart(){
			$("#div-contenedor").html(
			'<div class="elemento">'
			+'<img src="img/img cartoon/cart1.jpg"  width="260" height="700" class="img-rounded">'
			+'</div>'
		    +'<div class="elemento">'
			+'<img src="img/img cartoon/cart2.jpg"  width="260" height="420" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img cartoon/cart3.jpg"  width="260" height="250" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img cartoon/cart4.jpg"  width="260" height="340" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img cartoon/cart5.jpg"  width="260" height="650" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img cartoon/cart6.jpg"  width="260" height="410" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img cartoon/cart7.jpg"  width="260" height="200" class="img-rounded">'
			+'</div>'
			+'<div class="elemento">'
			+'<img src="img/img cartoon/cart8.jpg"  width="260" height="560" class="img-rounded">'
			+'</div>');


		}

	</script>-->

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>-->
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="js/ie10-viewport-bug-workaround.js"></script> ESTA PARTE DEL CODIGO DA ERROR NO ENCUETRA ESA RUTA-->
</body>
</html>