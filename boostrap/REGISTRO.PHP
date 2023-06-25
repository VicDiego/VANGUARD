<?php
    include_once 'bd/conexion.php';
    $Nombres=$_POST['nombres']; 
    $Apellidos=$_POST['apellidos'];
    $Correo=$_POST['correo'];
    $Direccion=$_POST['direccion'];

            

    echo "<center>La información enviada es la siguiente::<br>";
    echo "<center>Su nombre es: $Nombres<br>Su apellido es: $Apellidos<br>Su correo es: $Correo<br>Su direccion es: $Direccion";


  
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $sql="INSERT INTO `registro`(`nombre`, `apellidos`, `correo`, `direccion`) VALUES ('$Nombres','$Apellidos',' $Correo','$Direccion')";
    $query= mysqli_query($conectar,$sql);
    
    echo "sql";

    ?>