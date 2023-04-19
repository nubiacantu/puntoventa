<?php
session_start();
 require_once '../modelo.php';

if(isset($_POST['nombreCategoria'],$_POST['descripcion'])){
	// Obtener datos del formulario
	$nombre = $_POST['nombreCategoria'];
	$descripcion = $_POST['descripcion'];
	$fecha = date("Y-m-d H:i:s");
	

	//se insertar los datos en la base de datos
	insertarCategoria($nombre, $descripcion, $fecha);
	//se redirecciona a la vista de tiendas
	header("Location: ../categorias.php");
}


?>