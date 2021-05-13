<?php
    $conexion = oci_connect("BANCOS3","123456","localhost/XEPDB1");
    if($conexion)
    {
        echo 'Conexion establecida';
    }
    else
    {
        echo 'Error al intentar conectar';
    }
?>