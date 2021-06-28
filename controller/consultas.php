<?php 
#include("../views/home.php");
include("../conexionsql/conexion.php");

function login($user){
    include("../conexionsql/conexion.php");
$consulta ="SELECT nombre,password FROM usuarios WHERE nombre = '$user'";

$resultado = $conexion->query($consulta) or die($conexion->error);

return $resultado;
};

function registro($nombre,$correo,$password){
    include ("../conexionsql/conexion.php");    
    $insertar = "INSERT INTO usuarios(nombre,correo,password) VALUES ('$nombre','$correo','$password')";
    $resultado = $conexion->query($insertar) or die($conexion->error);
    if($resultado) {
        echo"<script>alert('se ha registrado con exito, bienvenido $nombre')
        window.location='/prueba_php_login/Views/home.php'</script>";
    } else{
        echo"<script>alert(' No se ha registrado');window,history.go(-1);</script>";
    }

};

switch ($_POST['type']) {
    case 'registro':
        if($_POST['password'] != $_POST['re_password']){
            echo"<script>alert('Las contraseñas no coinciden');window,history.go(-1);</script>";
        }else {
            registro($_POST['user'],$_POST['correo'],$_POST['password']);
        }
        
        break;
    
    case 'login':
        $result = login($_POST['user']);
        $dato = $result->fetch_array();
        $usuario = $dato['nombre'];
        $password = $dato['password'];
        echo $password;
        if($usuario != $_POST{'user'} || $password != $_POST['password']){
            echo "<script>alert('usuario no registrado');window,history.go(-1);</script>";
        }else {
            echo"<script>alert('Hola $usuario Bienvenido a NBC Latam');window,window.location='../views/home.php'</script>";
        };
            break;

    default:
    echo "<script>alert(' No se ha registrado');window,history.go(-1);</script>";
        break;
}