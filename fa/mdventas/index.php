<!DOCTYPE html>
<html>
<head>
    <title>Registro de Venta</title>
</head>
   <header>

   <div class=""log>
   <img src="vangua.jpg" alt="logo"> 

   </div>
   <h1 class="noml">VANGUARTH</h1>
   <nav>
      <ul>
        <li><a href="consultar.php">consultar</a></li>
        <li><a href="index.php">registrar</a></li>
       
      </ul>
    </nav>
</header>
<body>
    


<div class="container">
<form method="post" action="">
<h2>registro de Ventas</h2>

        <labesl for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required><br>

        <label for="preciso">Precio:</label>
        <input type="number" name="precio" id="precio" step="0.001" required><br>

        <input type="submit" value="Registrar Venta">
    </form> <br>
    
</div>


 
    
    <link rel="stylesheet" href="index.css">
</body>
</html>










<?php
// Incluir archivo de conexión a la base de datos
include("conexion.php");

// Procesar el formulario de registro cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = date('Y-m-d H:i:s'); // Obtener la fecha actual

    // Insertar registro en la base de datos
    $sql = "INSERT INTO registros (producto, cantidad, precio, fecha) VALUES ('$producto', $cantidad, $precio, '$fecha')";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro de venta exitoso";
    } else {
        echo "Error al registrar la venta: " . $conexion->error;
    }




    
}
?>

