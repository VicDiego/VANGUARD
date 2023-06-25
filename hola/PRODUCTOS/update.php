<?php

include("conexion.php");
$con=conectar();

$Codigo=$_POST['codigo'];
$Nombre=$_POST['nombre'];
$Marca=$_POST['marca'];
$Precio=$_POST['precio'];
$Proveedor=$_POST['proveedor'];


$sql="UPDATE `producto` SET codigo='$Codigo',nombre='$Nombre',marca='$Marca',precio='$Precio',proveedor='$Proveedor' WHERE  codigo='$Codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>