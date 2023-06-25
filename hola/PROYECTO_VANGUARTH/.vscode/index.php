<?php
 include=("cn.php");
 $cliente_tabla = "SELECT * FROM cliente_tabla"
 $server="localhost";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-
        width, user-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estilos.css">

    </head>
    <body>
        <div class="container-table">
            <div class="table__title">cliente</div>
            <div class="table__header">nombres</div>
            <div class="table__header">apellidos</div>
            <div class="table__header">direccion</div>
            <div class="table__header">telefono</div>
            <?php $resultado  = mysql_query ($conexion, $cliente_tabla);
            
            white($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["nombre"];?></div>
            <div class="table__item"><?php echo $row["apellidos"];?></div>
            <div class="table__item"><?php echo $row["apellidos"]?></div>
            <div class="table__item"><?php echo $row ["telefono"]?></div>
                <?php } mysql_free_result($resultado); ?></php>
                     </div>    
    </body>
</html>