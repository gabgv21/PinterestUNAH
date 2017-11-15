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


		public static function verificarUsuario($conexion,$contra,$email){
		    $sql = sprintf(
		    		"SELECT  contrasenna, email FROM usuarios WHERE contrasenna = '%s'  AND  WHERE  email = '%s'",
		    		$contra,
		    		$email

		    	);
		    //echo ($sql);

		    $resultado = $conexion->ejecutarConsulta($sql);
		    $cantidadRegistros = $conexion->cantidadRegistros($resultado);
		    $respuesta=array();
		    if ($cantidadRegistros==1){
		    	$respuesta["status"]=1;
		    }else{
		    	$respuesta["status"]=0;
			}
    
		    echo json_encode($respuesta);

		}
	}
?>


