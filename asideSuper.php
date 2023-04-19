<?php
  include ('baseDeDatos/conexion.php')

?>
<div class="sidebar">
  <div style="text-align: center; margin-bottom: 10px;">
    <a href="tiendas.php" class="sidebar-button perfil"><i class="fa-solid fa-user" style="color: #ffaf3a;"></i></a>
    <div class="user-type">Usuario: <?php echo $_SESSION['nombre_usuario']; ?></div>
    <div class="store">Tienda</div>
    <div class="divider"></div>
  </div>
  <a href="tiendas.php" class="sidebar-button"><i class="fa-solid fa-store" style="color: #ffaf3a;"></i></a>
  <a href="cerrarSesion.php" class="sidebar-button salir"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
</div>