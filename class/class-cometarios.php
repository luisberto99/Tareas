<?php
	class comentarios
	{
		private $titulo;
		private $comentario;
		private $usuario;
		private $fechaComentario;
		function __construct($titulo,
							$comentario,
							$usuario,
							$fechaComentario){
			$this->titulo = $titulo;
			$this->comentario = $comentario;
			$this->usuario = $usuario;
			$this->fechaComentario = $fechaComentario;
		}

		private function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		private function getTitulo(){
			return $this->titulo;
		}
		private function setComentario($comentario){
			$this->comentario = $comentario;
		}
		private function getComentario(){
			return $this->comentario;
		}
		private function setUsurario($usuario){
			$this->usuario = $usuario;
		}
		private function getUsuario(){
			return $this->usuario;
		}
		private function setFechaComentario($fechaComentario){
			$this->fechaComentario = $fechaComentario;
		}
		private function getFechaComentario(){
			return $this->fechaComentario;
		}
	}
?>