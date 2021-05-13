<?php

require_once('conexion.php');

$conn = new Conexion();
$conexion = $conn->Conectar();


try {
    $query = "insert into clientes (nombre,dpi,telefono,email) values ('Jazmin Gomez','12345',55555,'usuario@mail.com')";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    echo "Los datos se almacenaron correctamente";
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
}
