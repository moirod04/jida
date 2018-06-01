<?php

	require_once("modelo/articulos_modelo.php");

	$art = new Articulo_model();

	$matriz=$art->obtenerArticulos();

	require_once("vista/indexblog.php");
	






?>