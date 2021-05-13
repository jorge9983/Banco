<?php

//print_r($_POST);

$id = $_GET["id"];

//echo $id;

require_once('../conexion.php');

$oraclePDO = new Conexion();
$conexion = $oraclePDO->Conectar();
try {
    if($id !=null){
        $conexion->beginTransaction();
        $query= "delete clientes where id=".$id;
        //echo $query;
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $conexion->commit();
        header("location:../clientes/Clientes.php");
        //echo "los datos se almacenaro correctamente";
    }
} catch (Exception $ex) {
    echo "Error: ".$ex->getMessage();
}