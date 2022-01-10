	<?php

	class conexion

	{

		private $servidor;

		private $usuario;

		private $contraseña;

		private $basedatos;

		public  $conexion;



		public function __construct(){

			//$this->servidor   = "sql207.epizy.com";
			$this->servidor   = "localhost";
			//$this->usuario	  = "epiz_26431496";
			$this->usuario	  = "root";
			//$this->contraseña = "Stv6Py3nqticW";
			$this->contraseña = "";
            //$this->basedatos  = "epiz_26431496_docente";
			$this->basedatos  = "docente";



		}



		function conectar(){

			$this->conexion= new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);

            $this->conexion->set_charset("utf8");

		}



		function cerrar(){

			$this->conexion->close();

		}

	}



?>

