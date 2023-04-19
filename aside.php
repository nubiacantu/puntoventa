<?php
  include ('baseDeDatos/conexion.php')

?>

<div class="sidebar">
  <div style="text-align: center; margin-bottom: 10px;">
    <a href="#" class="sidebar-button perfil"><i class="fa-solid fa-user" style="color: #ffaf3a;"></i></a>
    <div class="user-type">Usuario: <?php echo $_SESSION['nombre_usuario']; ?></div>
    <div class="store">Tienda</div>
    <div class="divider"></div>
  </div>
  <a href="dashboard.php" class="sidebar-button"><i class="fa-solid fa-house" style="color: #ffaf3a;"></i></a>
  <a href="usuarios.php" class="sidebar-button"><i class="fa-sharp fa-solid fa-users" style="color: #ffaf3a;"></i></a>
  <a href="inventario.php" class="sidebar-button"><i class="fa-solid fa-box-open" style="color: #ffaf3a;"></i></a>
  <a href="categorias.php" class="sidebar-button"><i class="fa-solid fa-list-ul" style="color: #ffaf3a;"></i></a>
  <a href="historialVentas.php" class="sidebar-button"><i class="fa-solid fa-arrow-trend-up"style="color: #ffaf3a;"></i></a>
  <a href="ventas.php" class="sidebar-button"><i class="fa-solid fa-cart-shopping"style="color: #ffaf3a;"></i></a>
  <a href="cerrarSesion.php" class="sidebar-button salir"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
</div>