
<?php

	class Usuario{

		private $id_usuario;
		private $nombre_usuario;
		private $nombre_persona;
		private $contrasenna;
		private $email;
		private $telefono;
		private $fecha_nacimiento;
		private $url_foto_perfil;
		private $ultima_conexion;
		private $seguidores;
		private $siguiendo;
		private $genero;
		private $tipo_usuario;

		public function __construct($id_usuario,
					$nombre_usuario,
					$nombre_persona,
					$contrasenna,
					$email,
					$telefono,
					$fecha_nacimiento,
					$url_foto_perfil,
					$ultima_conexion,
					$seguidores,
					$siguiendo,
					$genero,
					$tipo_usuario){
			$this->id_usuario = $id_usuario;
			$this->nombre_usuario = $nombre_usuario;
			$this->nombre_persona = $nombre_persona;
			$this->contrasenna = $contrasenna;
			$this->email = $email;
			$this->telefono = $telefono;
			$this->fecha_nacimiento = $fecha_nacimiento;
			$this->url_foto_perfil = $url_foto_perfil;
			$this->ultima_conexion = $ultima_conexion;
			$this->seguidores = $seguidores;
			$this->siguiendo = $siguiendo;
			$this->genero = $genero;
			$this->tipo_usuario = $tipo_usuario;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario = $id_usuario;
		}
		public function getNombre_usuario(){
			return $this->nombre_usuario;
		}
		public function setNombre_usuario($nombre_usuario){
			$this->nombre_usuario = $nombre_usuario;
		}
		public function getNombre_persona(){
			return $this->nombre_persona;
		}
		public function setNombre_persona($nombre_persona){
			$this->nombre_persona = $nombre_persona;
		}
		public function getContrasenna(){
			return $this->contrasenna;
		}
		public function setContrasenna($contrasenna){
			$this->contrasenna = $contrasenna;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getFecha_nacimiento(){
			return $this->fecha_nacimiento;
		}
		public function setFecha_nacimiento($fecha_nacimiento){
			$this->fecha_nacimiento = $fecha_nacimiento;
		}
		public function getUrl_foto_perfil(){
			return $this->url_foto_perfil;
		}
		public function setUrl_foto_perfil($url_foto_perfil){
			$this->url_foto_perfil = $url_foto_perfil;
		}
		public function getUltima_conexion(){
			return $this->ultima_conexion;
		}
		public function setUltima_conexion($ultima_conexion){
			$this->ultima_conexion = $ultima_conexion;
		}
		public function getSeguidores(){
			return $this->seguidores;
		}
		public function setSeguidores($seguidores){
			$this->seguidores = $seguidores;
		}
		public function getSiguiendo(){
			return $this->siguiendo;
		}
		public function setSiguiendo($siguiendo){
			$this->siguiendo = $siguiendo;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getTipo_usuario(){
			return $this->tipo_usuario;
		}
		public function setTipo_usuario($tipo_usuario){
			$this->tipo_usuario = $tipo_usuario;
		}
		public function __toString(){
			return "id_usuario: " . $this->id_usuario . 
				" nombre_usuario: " . $this->nombre_usuario . 
				" nombre_persona: " . $this->nombre_persona . 
				" contrasenna: " . $this->contrasenna . 
				" email: " . $this->email . 
				" telefono: " . $this->telefono . 
				" fecha_nacimiento: " . $this->fecha_nacimiento . 
				" url_foto_perfil: " . $this->url_foto_perfil . 
				" ultima_conexion: " . $this->ultima_conexion . 
				" seguidores: " . $this->seguidores . 
				" Siguiendo: " . $this->siguiendo . 
				" Genero: " . $this->genero . 
				" tipo_usuario: " . $this->tipo_usuario;
		}

		public static function consultar($conexion,$email){
			$sql= sprintf("SELECT  email  FROM usuarios WHERE email='%s'",
				$email
			);
			$resultado = $conexion->ejecutarconsulta($sql);
			$cantidadRegistros=$conexion->cantidadRegistros($resultado);
			if($cantidadRegistros==1){
				echo "1";
			}else{
				echo "0";
			}
		}



       public function guardarUsuario($conexion)
          { $consulta = sprintf("INSERT INTO usuarios(nombre_usuario,nombre_persona,contrasenna,email,fecha_nacimiento,seguidores,siguiendo,ID_genero,ID_tipo_usuario,url_foto_perfl)
          	VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
          	$conexion->antiInyeccion($this->nombre_usuario),
            $conexion->antiInyeccion($this->nombre_persona),
            $conexion->antiInyeccion($this->contrasenna),
            $conexion->antiInyeccion($this->email),
            $conexion->antiInyeccion($this->fecha_nacimiento),
            $conexion->antiInyeccion("100"),
            $conexion->antiInyeccion("50"),
            $conexion->antiInyeccion($this->genero),
            $conexion->antiInyeccion("4"),
             $conexion->antiInyeccion("foto_default.png")
          );

          $resultado = $conexion->ejecutarconsulta($consulta);
          $_SESSION["nombre_usuario"] = $this->nombre_usuario;
		    	$_SESSION["nombre_persona"] = $this->nombre_usuario;
                 $_SESSION["siguiendo"] ="50";
                 $_SESSION["seguidores"] = "100";
                 $_SESSION["url_foto_perfl"] ="foto_default.png";
          $respuesta=  array();
          $respuesta["estatus"] = 1;
          echo json_encode($respuesta);

          }









		public static function verificarUsuario($conexion,$email,$contra){
		    $sql = sprintf(
		    		"SELECT  nombre_usuario,nombre_persona,contrasenna, email,ID_tipo_usuario,siguiendo,seguidores,url_foto_perfl FROM usuarios WHERE contrasenna = '%s' AND email = '%s'",
		    		$contra,
		    		$email

		    	);
		    //echo ($sql);

		    $resultado = $conexion->ejecutarConsulta($sql);
		    $cantidadRegistros = $conexion->cantidadRegistros($resultado);
		    $respuesta=array();
		    if ($cantidadRegistros==1){
		    	$fila = $conexion->obtenerFila($resultado);
		    	$respuesta["estatus"]=1;
		    	$_SESSION["nombre_usuario"] = $fila["nombre_usuario"];
		    	$_SESSION["nombre_persona"] = $fila["nombre_persona"];
                 $_SESSION["siguiendo"] = $fila["siguiendo"];
                 $_SESSION["seguidores"] = $fila["seguidores"];
                 $_SESSION["url_foto_perfl"] = $fila["url_foto_perfl"];
		    	$respuesta["ID_tipo_usuario"]=$fila["ID_tipo_usuario"];
		    }else{
		    	$respuesta["estatus"]=0;
			}
    
		    echo json_encode($respuesta);

		}


		public function registrarUsuario($conexion){
			$sql = sprintf("INSERT INTO usuarios(nombre_usuario, nombre_persona, contrasenna, email, telefono, fecha_nacimiento, url_foto_perfl, ultima_conexion, seguidores, siguiendo, ID_genero, ID_tipo_usuario) VALUES('%s','%s','%s',%s,'%s','%s',%s,'%s',%s,%s,%s,%s)",
				$conexion->antiInyeccion($this->nombre_usuario),
				$conexion->antiInyeccion($this->nombre_persona),
				$conexion->antiInyeccion("fb"),
				$conexion->antiInyeccion($this->email),
				$conexion->antiInyeccion("99999999"),
				$conexion->antiInyeccion("2017-10-10"),
				$conexion->antiInyeccion($this->url_foto_perfil),
				$conexion->antiInyeccion("2017-10-10"),
				$conexion->antiInyeccion("100"),
				$conexion->antiInyeccion("50"),
				$conexion->antiInyeccion($this->genero),
				$conexion->antiInyeccion("3")
		);
			$resultado = $conexion->ejecutarconsulta($sql);
	
		}

	}
?>


