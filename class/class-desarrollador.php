<?php
	class desarrollador extends usuario{
		private $URL;
		function __construct($nombre, $email, $URL){
			parent:: __construct($nombre, $email);
			$this->URL = $URL;
		}

		public function setURL($URL){
			$this->URL = $URL;
		}
		public function getURL(){
			return $this->URL; 
		}
	}
?>