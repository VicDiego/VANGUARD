<!DOCTYPE html>
<html>
<head>
    <title>consulta de ventas</title> 
</head>
<body>
    <header>
    <img src="vangua.jpg" alt="logo"> 
        <h1 class="noml">VANGUARTH</h1>
        <nav>
            <ul>
                <li><a href="consultar.php">consultar</a></li>
                <li><a href="index.php">registrar</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Resto de tu código -->
    
    <link rel="stylesheet" href="consu.css">
</body>






<div class="reg">

<?php
require_once 'conexion.php';

// Consultar ventas
$sql = "SELECT * FROM registros";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Consulta de Ventas</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Fecha</th><th>Acciones</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['producto'] . "</td>";
        echo "<td>" . $fila['cantidad'] . "</td>";
        echo "<td>" . $fila['precio'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>";
        echo "<form style='display: inline-block;' method='post' action='eliminar_venta.php'>";
        echo "<input type='hidden' name='id' value='" . $fila['id'] . "'>";
        echo "<input type='submit' name='eliminar' value='Eliminar'>";
        echo "</form>";
        echo "<form style='display: inline-block;' method='post' action='editar_venta.php'>";
        echo "<input type='hidden' name='id' value='" . $fila['id'] . "'>";
        echo "<input type='submit' name='editar' value='Editar'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron ventas registradas.";
}

// Cerrar conexión
$conexion->close();
?>
</div>

</html>





