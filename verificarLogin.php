<?php
  // Conexión a la base de datos (servidor, usuario, contraseña, nombreBD)
  $con = mysqli_connect("localhost", "root", "", "puntosventa");

  // Revisar si hay conexión
  if($con == false){
    die("Error, no hay conexión a la base de datos: " . mysqli_connect_error());
  }

  session_start(); // Iniciar la sesión para poder acceder a las variables de sesión

  // Tomar los valores del formulario a través de los datos de los campos
  if (isset($_POST['usuario'], $_POST['contra'])) {
    $user = $_POST['usuario'];
    $password = $_POST['contra'];

    // Realizar consulta a la base de datos para verificar las credenciales del usuario
    $sql = "SELECT usuario, password FROM usuarios WHERE usuario='$user' and password='$password'";
    $contipo = "SELECT tipo FROM usuarios WHERE usuario ='$user'";
    $resTipo = mysqli_query($con, $contipo);

    // Verificar el tipo de usuario obtenido de la consulta
    if (mysqli_num_rows($resTipo) > 0) {
        $tipo = mysqli_fetch_assoc($resTipo);
        $user_type = $tipo['tipo'];
    }

    $resultado = mysqli_query($con, $sql);
    $filas = mysqli_num_rows($resultado);

    // Si las credenciales son válidas y el tipo de usuario es 1 (superAdmin)
    if ($filas > 0 && $user_type == 1) {
      $_SESSION['nombre_usuario'] = $user; // Establecer la variable de sesión con el nombre del usuario
      header('Location: tiendas.php'); // Redirigir a la página tiendas.php
    }
    // Si las credenciales son válidas y el tipo de usuario es 2 ( usuario normal)
    elseif($filas > 0 && $user_type == 2) {
      $_SESSION['nombre_usuario'] = $user; // Establecer la variable de sesión con el nombre del usuario
      header('Location: dashboard.php'); // Redirigir a la página dashboard.php
    }
  }
?>
