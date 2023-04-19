<?php
 require_once '../modelo.php';

if(isset($_POST['nombre'],$_POST['activaRadio'])){
	// Obtener el valor del input "nombre"
	$nombre = $_POST['nombre'];

	// Obtener el valor del radio button "activaRadio"
	$opcion = $_POST['activaRadio'];
	 
	//se insertar los datos en la base de datos
	insertarTienda($nombre, $opcion);
	//se redirecciona a la vista de tiendas
	header("Location: ../tiendas.php");
}


?>