<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    


    $conexion=mysqli_connect("localhost", "root", "", "bdprueba");


    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";

    
    $resultado = mysqli_query ($conexion, $consulta);
    
    
    
    $filas=mysqli_num_rows($resultado);


if ($filas > 0) {
    header("location:CRUD/modelo");
} 
else{
    echo "error en la conexion";
}


mysqli_free_result($resultado);
mysqli_close($conexion);


?>