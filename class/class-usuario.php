<?php

	class Usuario{

<<<<<<< HEAD
		private $id-usuario;
		private $nombre-usuario;
		private $nombre-persona;
		private $contrasenna;
		private $email;
		private $telefono;
		private $fecha-nacimiento;
		private $url-foto-perfil;
		private $id-genero;
		private $id-tipo-usuario;

		public function __construct($id-usuario,
					$nombre-usuario,
					$nombre-persona,
					$contrasenna,
					$email,
					$telefono,
					$fecha-nacimiento,
					$url-foto-perfil,
					$id-genero,
					$id-tipo-usuario){
			$this->id-usuario = $id-usuario;
			$this->nombre-usuario = $nombre-usuario;
			$this->nombre-persona = $nombre-persona;
			$this->contrasenna = $contrasenna;
			$this->email = $email;
			$this->telefono = $telefono;
			$this->fecha-nacimiento = $fecha-nacimiento;
			$this->url-foto-perfil = $url-foto-perfil;
			$this->id-genero = $id-genero;
			$this->id-tipo-usuario = $id-tipo-usuario;
		}
		public function getId-usuario(){
			return $this->id-usuario;
		}
		public function setId-usuario($id-usuario){
			$this->id-usuario = $id-usuario;
		}
		public function getNombre-usuario(){
			return $this->nombre-usuario;
		}
		public function setNombre-usuario($nombre-usuario){
			$this->nombre-usuario = $nombre-usuario;
		}
		public function getNombre-persona(){
			return $this->nombre-persona;
		}
		public function setNombre-persona($nombre-persona){
			$this->nombre-persona = $nombre-persona;
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
		public function getFecha-nacimiento(){
			return $this->fecha-nacimiento;
		}
		public function setFecha-nacimiento($fecha-nacimiento){
			$this->fecha-nacimiento = $fecha-nacimiento;
		}
		public function getUrl-foto-perfil(){
			return $this->url-foto-perfil;
		}
		public function setUrl-foto-perfil($url-foto-perfil){
			$this->url-foto-perfil = $url-foto-perfil;
		}
		public function getId-genero(){
			return $this->id-genero;
		}
		public function setId-genero($id-genero){
			$this->id-genero = $id-genero;
		}
		public function getId-tipo-usuario(){
			return $this->id-tipo-usuario;
		}
		public function setId-tipo-usuario($id-tipo-usuario){
			$this->id-tipo-usuario = $id-tipo-usuario;
		}
		public function __toString(){
			return "Id-usuario: " . $this->id-usuario . 
				" Nombre-usuario: " . $this->nombre-usuario . 
				" Nombre-persona: " . $this->nombre-persona . 
				" Contrasenna: " . $this->contrasenna . 
				" Email: " . $this->email . 
				" Telefono: " . $this->telefono . 
				" Fecha-nacimiento: " . $this->fecha-nacimiento . 
				" Url-foto-perfil: " . $this->url-foto-perfil . 
				" Id-genero: " . $this->id-genero . 
				" Id-tipo-usuario: " . $this->id-tipo-usuario;
=======
		private $IdUsuario;
		private $NombredeUsuario;
		private $Nombre;
		private $Contraseña;
		private $Email;
		private $Telefono;
		private $FechaNacimiento;
		private $UrlFotoPerfil;
		private $UltimaConexion;
		private $Seguidores;
		private $siguiendo;
		private $genero;
		private $tipoUsuario;

		public function __construct($IdUsuario,
					$NombredeUsuario,
					$Nombre,
					$Contraseña,
					$Email,
					$Telefono,
					$FechaNacimiento,
					$UrlFotoPerfil,
					$UltimaConexion,
					$Seguidores,
					$siguiendo,
					$genero,
					$tipoUsuario){
			$this->IdUsuario = $IdUsuario;
			$this->NombredeUsuario = $NombredeUsuario;
			$this->Nombre = $Nombre;
			$this->Contraseña = $Contraseña;
			$this->Email = $Email;
			$this->Telefono = $Telefono;
			$this->FechaNacimiento = $FechaNacimiento;
			$this->UrlFotoPerfil = $UrlFotoPerfil;
			$this->UltimaConexion = $UltimaConexion;
			$this->Seguidores = $Seguidores;
			$this->siguiendo = $siguiendo;
			$this->genero = $genero;
			$this->tipoUsuario = $tipoUsuario;
		}
		public function getIdUsuario(){
			return $this->IdUsuario;
		}
		public function setIdUsuario($IdUsuario){
			$this->IdUsuario = $IdUsuario;
		}
		public function getNombredeUsuario(){
			return $this->NombredeUsuario;
		}
		public function setNombredeUsuario($NombredeUsuario){
			$this->NombredeUsuario = $NombredeUsuario;
		}
		public function getNombre(){
			return $this->Nombre;
		}
		public function setNombre($Nombre){
			$this->Nombre = $Nombre;
		}
		public function getContraseña(){
			return $this->Contraseña;
		}
		public function setContraseña($Contraseña){
			$this->Contraseña = $Contraseña;
		}
		public function getEmail(){
			return $this->Email;
		}
		public function setEmail($Email){
			$this->Email = $Email;
		}
		public function getTelefono(){
			return $this->Telefono;
		}
		public function setTelefono($Telefono){
			$this->Telefono = $Telefono;
		}
		public function getFechaNacimiento(){
			return $this->FechaNacimiento;
		}
		public function setFechaNacimiento($FechaNacimiento){
			$this->FechaNacimiento = $FechaNacimiento;
		}
		public function getUrlFotoPerfil(){
			return $this->UrlFotoPerfil;
		}
		public function setUrlFotoPerfil($UrlFotoPerfil){
			$this->UrlFotoPerfil = $UrlFotoPerfil;
		}
		public function getUltimaConexion(){
			return $this->UltimaConexion;
		}
		public function setUltimaConexion($UltimaConexion){
			$this->UltimaConexion = $UltimaConexion;
		}
		public function getSeguidores(){
			return $this->Seguidores;
		}
		public function setSeguidores($Seguidores){
			$this->Seguidores = $Seguidores;
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
		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}
		public function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
		}
		public function __toString(){
			return "IdUsuario: " . $this->IdUsuario . 
				" NombredeUsuario: " . $this->NombredeUsuario . 
				" Nombre: " . $this->Nombre . 
				" Contraseña: " . $this->Contraseña . 
				" Email: " . $this->Email . 
				" Telefono: " . $this->Telefono . 
				" FechaNacimiento: " . $this->FechaNacimiento . 
				" UrlFotoPerfil: " . $this->UrlFotoPerfil . 
				" UltimaConexion: " . $this->UltimaConexion . 
				" Seguidores: " . $this->Seguidores . 
				" Siguiendo: " . $this->siguiendo . 
				" Genero: " . $this->genero . 
				" TipoUsuario: " . $this->tipoUsuario;
		}

		public static function Insertar($conexion,$nombre,$email,$ultima){
			$resultado = $conexion->ejecutarconsulta("INSERT INTO usuarios(nombre_usuario,email, ultima_conexion) VALUES ($nombre,$email,$ultima)");
>>>>>>> 48fa696af1936e44be45fa50724eca95d3d46ed3
		}
	}
?>