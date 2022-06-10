<?php
	// http://localhost:8080/j0906/mvc2/pmvc2.php?ancho=400&alto=400
	header("Content-type: image/png");
	require_once("Punto.php");
	require_once("Modelo.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	$v = new Vista($_GET['ancho'], $_GET['alto']);
	$m = new Modelo(new Punto($_GET['ancho']/2, 0), new Punto(0,$_GET['alto']), new Punto($_GET['ancho'],$_GET['alto']/2));
	$c = new Controlador();
	$c->exhibir($m, $v); 
?>