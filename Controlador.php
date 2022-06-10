<?php
	// Controlador.php
	class Controlador {
		public function exhibir($modelo, $vista){
			$vista->dibujarTitulo($modelo);
			$vista->dibujarCuadricula();
			$p = new Punto(80,20);
			$vista->dibujarFlechaAbajo($p, 20);
			$vista->verLiberar();
		}
	}
?>