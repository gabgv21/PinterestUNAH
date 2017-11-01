<?php
   if(!(empty($_POST['txt-correo'])&&empty($_POST['txt-password'])))
   {
		$archivo = fopen("../data/usuarios.csv", "r");
		while ($linea = fgets($archivo)) {
			$partes = explode("|", $linea);
				if(($_POST['txt-correo']==$partes[0]))
				{
			     
					    fclose($archivo);
					    header("location: ../login.html");
					    exit();
				}

			}
			$archivo2 = fopen("../data/usuarios.csv","a+");
			fwrite($archivo2,$_POST['txt-correo'].'|'.$_POST['txt-password'].'|'."\n");
			header("location: ../pinterest.html");
			fclose($archivo2);
		}
		else{
			header("location: ../login.html");
		}
    	
?>