<?php 
include("../conexionsql/conexion.php");

function login($user){
$consulta ="SELECT user FROM users WHERE user = '$user'";
};

switch ($_POST['type']) {
    case 'register':
        echo $_POST['user'];
        $conexion->
        break;
    
    default:
        
        echo$_POST['user'];
        echo "<br>";
        echo $_POST['password'];
        break;
}