<?php

	class Usuario{

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
		}
	}
?>