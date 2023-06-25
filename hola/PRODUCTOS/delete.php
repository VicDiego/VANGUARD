<?php

include("conexion.php");
$con=conectar();

$Codigo=$_GET['id'];

$sql="DELETE FROM producto WHERE codigo='$Codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
