<?php
include("conexion.php");
$con=conectar();

$Codigo=$_POST['codigo'];
$Nombre=$_POST['nombre'];
$Marca=$_POST['marca'];
$Precio=$_POST['precio'];
$Proveedor=$_POST['proveedor'];


$sql="INSERT INTO `producto` (`codigo`, `nombre`, `marca`, `precio`, `proveedor`) VALUES ('$Codigo', '$Nombre', '$Marca', '$Precio', '$Proveedor')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>