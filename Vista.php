<?php
	// Vista.php
	class Vista {
		public $img;
		public $ancho, $alto, $um;
		public $blanco, $negro, $verdeclaro;
		public function __construct($an, $al, $um){
			$this->ancho = $an;
			$this->alto = $al;
			$this->um = $um;
			$this->img = imagecreate($this->ancho, $this->alto);
			$this->blanco = imagecolorallocate($this->img, 255, 255, 255);
			$this->negro = imagecolorallocate($this->img, 0, 0, 0);
			$this->verdeclaro = imagecolorallocate($this->img, 196, 237, 220);
			imagefilledrectangle($this->img, 0, 0, $this->ancho, $this->alto, $this->blanco);
		}
		public function verLiberar(){
			imagepng($this->img);
			imagedestroy($this->img);
		}
		public function dibujarTitulo($modelo){
			imagestring($this->img, 3, 10, 300, $modelo->titulo, $this->negro);	
		}
		public function dibujarCuadricula(){
			$num_lin_hor = $this->alto / $this->um;
			$num_lin_ver = $this->ancho / $this->um;
			// lineas horizontales
			for($i=1; $i<=$num_lin_hor; $i++)
				imageline($this->img, 0, $this->um*$i, $this->ancho, $this->um*$i, $this->verdeclaro);
			// lineas verticales
			for($i=1; $i<=$num_lin_ver; $i++)
				imageline($this->img, $this->um*$i, 0, $this->um*$i, $this->alto, $this->verdeclaro);		
		}
		public function dibujarFlechaAbajo($p, $d){
			imageline($this->img, $p->x, $p->y, $p->x, $p->y+$d, $this->negro);
			// falta punta de la flecha
			imageline($this->img, $p->x, $p->y+$d, $p->x-5, $p->y+$d-5, $this->negro);
			imageline($this->img, $p->x, $p->y+$d, $p->x+5, $p->y+$d-5, $this->negro);
		}
	}
?>