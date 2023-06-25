<?php
include_once('db.php');
$Nombres=$_POST['nombres']; 
$Apellidos=$_POST['apellidos'];
$Telefono=$_POST['telefono'];
$Tipo_de_Documento=$_POST['documento'];
$Numero_De_Documento=$_POST['numero_documento'];
$Categoria=$_POST['categoria'];
$Producto=$_POST['productoo'];
$Cantidad=$_POST['cantidad'];
$Correo_Electronico=$_POST['correo'];
$Direccion=$_POST['dirección'];
$Metodo_de_Pago=$_POST['metodo_pago'];
$Numero_de_Tarjeta=$_POST['numero_tarjeta'];
$Fecha_de_vencimiento=$_POST['fecha'];
$CVV=$_POST['cvv'];
$Metodo_de_envio=$_POST['envio'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control de prductos Pc Global</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Almacenamiento/recibo.css">
        <html>
            <body>  
                <h5>Se cargo con exito su compra</h5>
            <img src="logo.png" alt="Neocortex">
                 <header><h1>Recibo de compra</h1></header>
            <div id="container">
               
              
               
            
            <section id="content"></section>
            <nav>
            <ul type="Disc">
        <li>Nombres: <?php  echo $Nombres?><br></li>
        <li>Apellidos: <?php  echo $Apellidos?><br></li>
        <li>Telefono: <?php  echo $Telefono?><br></li>
        <li>Tipo de documento: <?php  echo $Tipo_de_Documento?><br></li>
        <li>Numero de documento: <?php  echo $Numero_De_Documento?><br></li>
        <li>Categoria: <?php  echo $Categoria?><br></li>
        <li>Cantidad: <?php  echo $Cantidad?><br></li>
        <li>Correo electronico: <?php  echo $Correo_Electronico?><br></li>
        <li>Direccion: <?php  echo $Direccion?><br></li>
        <li>Metodo de pago: <?php  echo $Metodo_de_Pago?><br></li>
        <li>Numero de tarjeta: <?php  echo $Numero_de_Tarjeta?><br></li>
        <li>Fecha de vencimiento: <?php  echo $Fecha_de_vencimiento?><br></li>
        <li>CVV: <?php  echo $CVV?><br></li>
        <li>Metodo de envio: <?php  echo $Metodo_de_envio?><br></li>
        </nav>
        
    </ul> 
            <br><br>
            <center><a class="fcc-btn" href="../../index.html">Regresar</a></center>
    <br><br><br>
     
    
    <footer>
  @ 2022  <strong> PC Globlal</strong>, Todos los Derechos Reservados
</footer>
<?php
$con=conectar();
$sql="INSERT INTO `compra`(`nombre`, `apellidos`, `telefono`, `tipo_documento`, `numero_documento`, `categoria`, `productoo`, `cantidad`, `correo`, `direccion`, `metodo_pago`, `numero_tarjeta`, `fecha`, `cvv`, `envio`) VALUES ('$Nombres','$Apellidos','$Telefono','$Tipo_de_Documento','$Numero_De_Documento','$Categoria','$Producto','$Cantidad','$Correo_Electronico','$Direccion','$Metodo_de_Pago','$Numero_de_Tarjeta','$Fecha_de_vencimiento','$CVV','$Metodo_de_envio')";
$query= mysqli_query($con,$sql);
?>    
 </html>
