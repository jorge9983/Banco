<?php

//print_r($_POST);

$nombre = $_POST['txtUsuario'];
$contrasena = $_POST['txtContrasena'];


require_once('conexion.php');

$oraclePDO = new Conexion();
$conexion = $oraclePDO->Conectar();
try {
    if($nombre !=null and $contrasena!=null){
        $conexion->beginTransaction();
        $stmt = $conexion->prepare("select nombrecompleto from usuarios
        where nombre=? and contrasena=? and estado=1");
        $stmt->bindParam(1,$nombre);
        $stmt->bindParam(2,$contrasena);
        $stmt->execute();
        $cursor = $stmt->fetch();
        $nombreUsuario =$cursor['NOMBRECOMPLETO'];
        if($nombreUsuario !=null){
            session_start();
            $_SESSION["usuario"]= $nombreUsuario;
            $_SESSION["ingreso"] = true;
            header("location:index.php");
        }
        else{
            //echo "Usuario o Contrasena incorrectos";
            header("location:login.php");
        }
    }
} catch (Exception $ex) {
    echo "Error: ".$ex->getMessage();
}