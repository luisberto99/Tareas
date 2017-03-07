<?php
	class usuario{

		private $nombre;
		private $email;
		
		function __construct($nombre, $email){
			$this->nombre = $nombre;
			$this->email = $email;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){

			return $this->email;
		}
	}
?>