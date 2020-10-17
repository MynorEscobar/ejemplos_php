<?php 
	require_once "procesos.php"; 
    
    $codigo = $_POST['vCodeEliminar'];
    
    $eliminarproducto = new procesos_productos(); 
    $datos = $eliminarproducto->eliminar($codigo);

	include ('../lista_productos.php');	

	
 ?>