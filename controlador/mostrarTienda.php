<?php
    require_once 'modelo.php';
    // Obtener los datos de la base de datos y almacenarlos en un arreglo
    $datos = obtenerTiendas();
    foreach ($datos as $fila) {
      // Generar una fila en la tabla con los datos obtenidos de la base de datos
      echo '<tr>';
      echo '<td>' . $fila['id_tienda'] . '</td>';
      echo '<td>' . $fila['nombre'] . '</td>';
      echo '<td>' . $fila['estado'] . '</td>';
      echo '<td style="width: 20%;">';
      echo '<div style="display: flex; justify-content: center;">';
      echo '<a href="editarTienda.php?id=' . $fila['id_tienda'] . '" class="btn editar btn-circle" style="margin-right: 10px; border-radius: 50%">';
      echo '<i class="fa-solid fa-pencil"></i>';
      echo '</a>';
      echo '<a class="btn eliminar btn-circle" style="margin-right: 10px; border-radius: 50%">';
      echo '<i class="fa-solid fa-trash"></i>';
      echo '</a>';
      echo '<a href="dashboard.php?id=' . $fila['id_tienda'] . '" class="btn acceder" style="border-radius: 15px">';
      echo 'Acceder';
      echo '</a>';
      echo '</div>';
      echo '</td>';
      echo '</tr>';
    }
?>