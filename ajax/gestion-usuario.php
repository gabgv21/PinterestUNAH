<?php
   session_start();
   include ('../class/class-conexion.php');
   $conexion  = new Conexion();
   switch ($_GET["accion"]) {
   	case 'crear-usuario':
   		
   		break;
   	case 'login':
   		include ('../class/class-usuario.php');
   		Usuario::verificarUsuario($conexion,$_POST["txt-correo"],$_POST["txt-password"]);
   		break;
   	default:
   		# code...
   		break;
   }
?>