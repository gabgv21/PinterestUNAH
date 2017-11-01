<?php
   if(!(empty($_POST['txt-correo'])&&empty($_POST['txt-password'])))
   {
		$archivo = fopen("../data/usuarios.csv", "r");
		while ($linea = fgets($archivo)) {
			$partes = explode("|", $linea);
				if(($_POST['txt-correo']==$partes[0])&&($_POST['txt-password']==$partes[1]))
				{
			     
					    fclose($archivo);
					    header("location: ../pinterest.html");
					    exit();
				}

			}
			header("location: ../iniciarSesion.html");
		}
		else{
			header("location: ../iniciarSesion.html");
		}
    	
?>