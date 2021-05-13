<?php

//print_r($_POST);

$nombre = $_POST['nombre'];
$dpi = $_POST['dpi'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

require_once('../conexion.php');

$oraclePDO = new Conexion();
$conexion = $oraclePDO->Conectar();
try {
    if($nombre !=null and $dpi!=null and $email!=null and $telefono!=null){
        $conexion->beginTransaction();
        $query= "insert into clientes (nombre,dpi,telefono,email) values ('".$nombre."','".$dpi."',".$telefono.",'".$email."')";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $conexion->commit();
        header("location:../clientes/Clientes.php");
        //echo "los datos se almacenaro correctamente";
    }
} catch (Exception $ex) {
    echo "Error: ".$ex->getMessage();
}


