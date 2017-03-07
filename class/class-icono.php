<?php
	class icono
	{
		private $ancho;
		private $alto;
		private $url;
		function __construct($ancho, $alto, $url){
			$this->ancho = $ancho;
			$this->alto = $alto;
			$this->url = $url;
		}

		public function setAncho($ancho){
			$this->ancho = $ancho;
		}
		public function getAncho(){
			return $this->ancho;
		}
		public function setAlto($alto){
			$this->alto = $alto;
		}
		public function getAlto(){
			return $this->alto;
		}
		public function setUrl($utl){
			$this->url = $url;
		}
		public function getUrl(){
			return $this->url;
		}
	}
?>