<?php
$conexion = new mysqli("localhost", "root", "", "prueba_login_php");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
#echo $conexion->host_info . "\n";

$conexion = new mysqli("127.0.0.1", "root", "", "prueba_login_php", 3306);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

#echo $conexion->host_info . "\n";
?>