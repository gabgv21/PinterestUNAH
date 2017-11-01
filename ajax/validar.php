<?php
   if(!(empty($_GET['txt-correo'])&&empty($_GET['txt-contraseña'])))
   {
		$archivo = fopen("../data/usuarios.csv", "r");
		while ($linea = fgets($archivo)) {
			$partes = explode("|", $linea);
				if(($_GET['txt-correo'] == $partes[0] && $_GET['txt-contraseña']))
				{
					fclose($archivo);
					header("location: ../pinterest.html");
					exit();
				}

			}
			header("location: ../login.html");
		}
		else{
			header("location: ../login.html");
		}
    	
?>