<?php 
include("../conexionsql/conexion.php");

function login($user){
    include("../conexionsql/conexion.php");
$consulta ="SELECT user FROM users WHERE user = '$user'";

$resultado = $conexion->query($user) or die($conexion->error);
return $resultado;
};

switch ($_POST['type']) {
    case 'register':
        echo $_POST['user'];
        $conexion->query($consulta);
        break;
    
    case 'login':
           login($_POST['user']);
            break;

    default:
        
        echo$_POST['user'];
        echo "<br>";
        echo $_POST['password'];
        break;
}