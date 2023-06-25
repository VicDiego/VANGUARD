!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
   <header>
   <link rel="stylesheet" href="edit.css">

   <nav>
      <ul>
        <li><a href="consultar.php">consultar</a></li>
        <li><a href="index.php">registrar</a></li>
       
      </ul>
    </nav>
</header>
<body>
</body>

<?php
require_once 'conexion.php';

if (isset($_POST['eliminar'])) {
    // Obtener el ID del registro a eliminar
    $id = $_POST['id'];

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM registros WHERE id = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo '<div class="alert alert-success">venta eliminada</div>';;
    } else {
        echo "Error al eliminar la venta: " . $conexion->error;
    }
}

// Cerrar conexión
$conexion->close();
?>

