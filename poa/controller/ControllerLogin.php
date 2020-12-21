<?php

session_start();

include_once '../config/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

//recepción de datos enviados mediante POST desde ajax
$correo = (isset($_POST['email'])) ? $_POST['email'] : '';
$clave = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($clave); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM t_usuarios WHERE email=? AND clave=?";
$resultado = $conexion->prepare($consulta);
$resultado->bindValue(1,$correo,PDO::PARAM_STR);
$resultado->bindValue(2,$pass,PDO::PARAM_STR);
$resultado->execute();


if($resultado->rowCount() >= 1){
    $name = $resultado->fetch(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $name['nombre'];
    echo 1;
}else{
    $_SESSION["s_usuario"] = null;
    echo 3;
}

$conexion=null;

//usuarios de pruebaen la base de datos
//usuario:admin pass:12345
//usuario:demo pass:demo
