<!DOCTYPE html>
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

if (isset($_POST['editar'])) {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];

    // Actualizar el registro en la base de datos
    $sql = "UPDATE registros SET producto = '$producto', cantidad = '$cantidad', precio = '$precio', fecha = '$fecha' WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}

// Cerrar conexión
$conexion->close();
?>
