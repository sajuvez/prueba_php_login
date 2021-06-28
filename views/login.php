<?php
include("../conexionsql/conexion.php");
$consulta = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Bienvenido</h1>
<form action="../controller/consultas.php" method="POST">
<p>usuario</p>
<input type="hidden" name="type" value="login">
<input type="text" name="user">
<br>
<p>contraseña</p>
<input type="text" name="password">
<br>
<input type="submit" value="iniciar sesion">
</form>

</body>
</html>