<?php
	class conexion
	{
		private $servidor;
		private $usuario;
		private $contra;
		private $basedatos;
		public  $conexion;

		public function __construct(){
			$this->servidor   = "localhost";
			$this->usuario	  = "root";
			$this->contraseña = "XXmxcatXX";
			$this->basedatos  = "biblioteca";

		}

		function conectar(){
			$this->conexion= new mysqli($this->servidor,$this->usuario,$this->contra,$this->basedatos);
		}

		function cerrar(){
			$this->conexion->close();
		}
	}

?>