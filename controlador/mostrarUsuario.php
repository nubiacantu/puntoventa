
<?php

    require_once 'modelo.php';
    // Obtener los datos de la base de datos y almacenarlos en un arreglo
    $datos = obtenerUsuarios();
    foreach ($datos as $fila) {
      // Generar una fila en la tabla con los datos obtenidos de la base de datos
      if ($fila['tipo']==2 and $fila['id_tienda']==$_SESSION['id_tienda']){
        echo '<tr>';
        echo '<td>' . $fila['id_usuario'] . '</td>';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['apellido'] . '</td>';
        echo '<td>' . $fila['usuario'] . '</td>';
        echo '<td>' . $fila['email'] . '</td>';
        echo '<td>' . $fila['fecha'] . '</td>';
        echo '<td style="width: 20%;">';
        echo '<div style="display: flex; justify-content: center;">';
        echo '<a href="editarUsuarios.php?id=' . $fila['id_usuario'] . '" class="btn editar btn-circle" style="margin-right: 10px; border-radius: 50%">';
        echo '<i class="fa-solid fa-pencil"></i>';
        echo '</a>';
        echo '<a class="btn eliminar btn-circle" style="margin-right: 10px; border-radius: 50%">';
        echo '<i class="fa-solid fa-trash"></i>';
        echo '</div>';
        echo '</td>';
        echo '</tr>';
      }
      
    }
?>
