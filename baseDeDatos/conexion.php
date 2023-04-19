<?php
  $con=mysqli_connect("localhost","root","","puntosventa");
  session_start(); // iniciar la sesión para poder acceder a las variables de sesión
  if (!isset($_SESSION['nombre_usuario'])) { // verificar si el usuario ha iniciado sesión
    exit();
  }
?>