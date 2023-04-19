<?php
session_start();
 require_once '../modelo.php';

if(isset($_POST['nombre'],$_POST['apellido'],$_POST['usuario'],$_POST['password'],$_POST['email'])){
	// Obtener datos del formulario
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$fecha = date("Y-m-d H:i:s");
	$tipo = 2;
	$id_tienda=$_SESSION['id_tienda'];

	//se insertar los datos en la base de datos
	insertarUsuario($nombre, $apellido, $usuario, $password, $email,$fecha,$tipo,$id_tienda);
	//se redirecciona a la vista de tiendas
	header("Location: ../usuarios.php");
}


?>