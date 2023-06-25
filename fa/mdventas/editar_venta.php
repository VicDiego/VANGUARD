<!DOCTYPE html>
<html>
<head>
    <title>Registro de Venta</title>
</head>
<link rel="stylesheet" href="editar.css">

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
<?php
require_once 'conexion.php';
require_once 'editar_venta.php';

if (isset($_POST['editar'])) 
    // Obtener el ID del registro a editar
    $id = $_POST['id'];

    // Obtener los datos del registro a editar
    $sql = "SELECT * FROM registros WHERE id = $id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        $fila = $resultado->fetch_assoc();
        // Obtener los valores de los campos para prellenar el formulario
        $producto = $fila['producto'];
        $cantidad = $fila['cantidad'];
        $precio = $fila['precio'];
        $fecha = $fila['fecha'];


    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta incompleto</div>';
    }

// Cerrar conexión
$conexion->close();
?>
<form action="editar.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <label for="producto">Producto:</label>
  <input type="text" name="producto" value="<?php echo $producto; ?>"><br>
  <label for="cantidad">Cantidad:</label>
  <input type="text" name="cantidad" value="<?php echo $cantidad; ?>"><br>
  <label for="precio">Precio:</label>
  <input type="text" name="precio" value="<?php echo $precio; ?>"><br>
  <label for="fecha">Fecha:</label>
  <input type="text" name="fecha" value="<?php echo $fecha; ?>"><br>
  <input type="submit" name="editar" value="Editar">
</form>
