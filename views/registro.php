<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <form action="../controller/consultas.php" method="POST">
    <input type="hidden" name="type" value="registro">
    <p>usuario</p>
    <input type="text" name="user">
    <br>
    <p>correo</p>
    <input type="text" name="correo" >
    <br>
    <p>contraseña</p>
    <input type="password" name="password" >
    <br>
    <p>repetir contraseña</p>
    <input type="password" name="re_password">
    <br>
    <input type="submit" value="registrar">
    </form>
</body>
</html>