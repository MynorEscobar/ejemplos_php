<?php 
	require_once "procesos.php"; 
    
    $codigo = $_POST['vCodigo'];
	$nombre = $_POST['vNombre'];
	$tipo = $_POST['vTipo'];
	$precioProd = $_POST['vPrecio_prod'];
	$precioDist = $_POST['vPrecio_dist'];
    
    $almacenarproducto = new procesos_productos(); 
    $datos = $almacenarproducto->insertar($codigo, $nombre, $tipo, $precioProd, $precioDist);

	include ('../lista_productos.php');	

	
 ?>