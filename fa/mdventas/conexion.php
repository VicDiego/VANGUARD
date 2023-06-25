<?php
$servidor = "localhost";        
$usuario = "root";
$contrasena = "";
$basedatos = "fventas";
  
// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>