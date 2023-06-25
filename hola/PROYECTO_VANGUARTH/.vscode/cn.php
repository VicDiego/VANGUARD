<php
$conexion = mysql_connect("localhost", "root", "", "cliente_tabla");
if (!$conexion) {
    echo 'error al conectar';
}
else {
    echo ' conetado a la base de datos';
}

>