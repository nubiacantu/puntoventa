<?php
function conexionBD() {
    // Configuración de la base de datos
    $servername = "localhost"; // Nombre del servidor
    $username = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos
    $dbname = "puntosventa"; // Nombre de la base de datos

    try {
        // Crear una nueva conexión PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Establecer el modo de error a excepciones
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error en la conexión: " . $e->getMessage();
        return null;
    }
}

function insertarTienda($nombre, $estado) {
    // Conexión a la base de datos
    $conn = conexionBD();
    
    // Verificar si la conexión es exitosa
    if (!$conn) {
        echo "Error en la conexión a la base de datos.";
        return false;
    }
    
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO tienda (nombre, estado) VALUES (:nombre, :estado)");
        
        // Asignar los valores a los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':estado', $estado);
        
        // Ejecutar la consulta SQL
        $stmt->execute();
        
        // Cerrar la conexión
        $conn = null;
        
        // Retornar true si la inserción fue exitosa
        return true;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error al insertar la tienda: " . $e->getMessage();
        return false;
    }
}
function insertarCategoria($nombre, $descripcion, $fecha) {
    // Conexión a la base de datos
    $conn = conexionBD();
    
    // Verificar si la conexión es exitosa
    if (!$conn) {
        echo "Error en la conexión a la base de datos.";
        return false;
    }
    
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO categoria (nombre, descripcion,fecha) VALUES (:nombre, :descripcion,:fecha)");
        
        // Asignar los valores a los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':fecha', $fecha);
        
        // Ejecutar la consulta SQL
        $stmt->execute();
        
        // Cerrar la conexión
        $conn = null;
        
        // Retornar true si la inserción fue exitosa
        return true;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error al insertar la tienda: " . $e->getMessage();
        return false;
    }
}
function obtenerCategorias() {
    try {
        // Obtener conexión a la base de datos
        $conn = conexionBD();
        
        // Preparar consulta SQL
        $sql = "SELECT * FROM categoria";
        $stmt = $conn->prepare($sql);
        
        // Ejecutar consulta
        $stmt->execute();
        
        // Obtener resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Cerrar conexión
        $conn = null;
        
        // Devolver resultados
        return $resultados;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error en la consulta: " . $e->getMessage();
        return null;
    }
}
function obtenerTiendas() {
    try {
        // Obtener conexión a la base de datos
        $conn = conexionBD();
        
        // Preparar consulta SQL
        $sql = "SELECT * FROM tienda";
        $stmt = $conn->prepare($sql);
        
        // Ejecutar consulta
        $stmt->execute();
        
        // Obtener resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Cerrar conexión
        $conn = null;
        
        // Devolver resultados
        return $resultados;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error en la consulta: " . $e->getMessage();
        return null;
    }
}

function insertarUsuario($nombre, $apellido, $usuario, $password, $email,$fecha,$tipo,$id_tienda) {
    // Conexión a la base de datos
    $conn = conexionBD();
    
    // Verificar si la conexión es exitosa
    if (!$conn) {
        echo "Error en la conexión a la base de datos.";
        return false;
    }
    
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, usuario, password, email,fecha, tipo, id_tienda) VALUES (:nombre, :apellido, :usuario, :password, :email, :fecha, :tipo, :id_tienda)");
        
        // Asignar los valores a los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':id_tienda', $id_tienda);
        // Ejecutar la consulta SQL
        $stmt->execute();
        
        // Cerrar la conexión
        $conn = null;
        
        // Retornar true si la inserción fue exitosa
        return true;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error al insertar la tienda: " . $e->getMessage();
        return false;
    }
}

function obtenerUsuarios() {
    try {
        // Obtener conexión a la base de datos
        $conn = conexionBD();
        
        // Preparar consulta SQL
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        
        // Ejecutar consulta
        $stmt->execute();
        
        // Obtener resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Cerrar conexión
        $conn = null;
        
        // Devolver resultados
        return $resultados;
    } catch(PDOException $e) {
        // Manejo de errores
        echo "Error en la consulta: " . $e->getMessage();
        return null;
    }
}

?>