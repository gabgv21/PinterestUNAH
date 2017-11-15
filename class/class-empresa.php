<?php

	class Empresa{

		private $id_empresa;
		private $nombre_empresa;
		private $fecha_fundacion;
		private $direccion;
		private $sitio_web;
		private $telefono;
		private $email;
		private $id_tipo_empresa;
		private $id_usuario;

		public function __construct($id_empresa,
					$nombre_empresa,
					$fecha_fundacion,
					$direccion,
					$sitio_web,
					$telefono,
					$email,
					$id_tipo_empresa,
					$id_usuario){
			$this->id_empresa = $id_empresa;
			$this->nombre_empresa = $nombre_empresa;
			$this->fecha_fundacion = $fecha_fundacion;
			$this->direccion = $direccion;
			$this->sitio_web = $sitio_web;
			$this->telefono = $telefono;
			$this->email = $email;
			$this->id_tipo_empresa = $id_tipo_empresa;
			$this->id_usuario = $id_usuario;
		}
		public function getId_empresa(){
			return $this->id_empresa;
		}
		public function setId_empresa($id_empresa){
			$this->id_empresa = $id_empresa;
		}
		public function getNombre_empresa(){
			return $this->nombre_empresa;
		}
		public function setNombre_empresa($nombre_empresa){
			$this->nombre_empresa = $nombre_empresa;
		}
		public function getFecha_fundacion(){
			return $this->fecha_fundacion;
		}
		public function setFecha_fundacion($fecha_fundacion){
			$this->fecha_fundacion = $fecha_fundacion;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getSitio_web(){
			return $this->sitio_web;
		}
		public function setSitio_web($sitio_web){
			$this->sitio_web = $sitio_web;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getId_tipo_empresa(){
			return $this->id_tipo_empresa;
		}
		public function setId_tipo_empresa($id_tipo_empresa){
			$this->id_tipo_empresa = $id_tipo_empresa;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario = $id_usuario;
		}
		public function __toString(){
			return "Id_empresa: " . $this->id_empresa . 
				" Nombre_empresa: " . $this->nombre_empresa . 
				" Fecha_fundacion: " . $this->fecha_fundacion . 
				" Direccion: " . $this->direccion . 
				" Sitio_web: " . $this->sitio_web . 
				" Telefono: " . $this->telefono . 
				" Email: " . $this->email . 
				" Id_tipo_empresa: " . $this->id_tipo_empresa . 
				" Id_usuario: " . $this->id_usuario;
		}
	}
?>
