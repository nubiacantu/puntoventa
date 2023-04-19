<?php
session_start(); // Iniciar la sesión

// Realiza tus operaciones con la sesión aquí

// Cerrar la sesión
session_destroy(); // Destruye la sesión actual
header("Location: login.php"); // Redirige a la página de inicio de sesión u otra página de tu elección
exit; // Salir del script
?>