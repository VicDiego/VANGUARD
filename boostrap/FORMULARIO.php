<?php

include "config.php";
error_reporting(0);
session_start();


if(isset($_SESSION["usuario"]))
header("Location: index.php");{

}

if(isset($_POST["submit"])){
    $usuario=$_POST["usuario"];
    $correo=$_POST["correo"];

}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" conted="widh=device-width, initial-scale">;
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilos FM.css">
        <title>Documento</title>
        
    </head>
    <body>
        <section class="form-register">
            <form name=fora action="REGISTRO.PHP" method="post">
            <h4>Contactanos</h4>
            <input class="controls" type="text" name="id" required id="usuario" placeholder="INGRESAR No. DOC">
            <input class="controls" type="text" name="nombre" required id="usuario" placeholder="INGRESAR NOMBRES">
            <input class="controls" type="text" name="apellido" required id="usuario" placeholder="INGRESAR APELLIDOS">
            <input class="controls" type="email" name="correo" required id="usuario" placeholder="INGRESAR CORREO">
            <input class="controls" type="password" name="clave" required id="usuario" placeholder="INGRESAR DIRECCION">
            <p>Estoy de acuerdo con <a shref="#">terminos y condiciones</p>
                <input class="botons" type="submit" value="Registrar">
                <p><a href="#">¿Tienes una cuenta?</a></p>
                
            </form>    
        </section>

    </body>

</html>