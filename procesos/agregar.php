<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['anio'],
		$_POST['empresa']
				);

	echo $obj->agregar($datos);
	

 ?>