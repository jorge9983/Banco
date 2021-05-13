<?php

include_once 'conexion.php';

$query = 'select cuentas.id, clientes.nombre, tipocuenta.nombre tipo, cuentas.saldo from cuentas  inner join clientes  on cuentas.idcliente=clientes.id inner join tipocuenta  on cuentas.idtipocuenta=tipocuenta.id';
$conn = new Conexion();
$conexion = $conn->Conectar();

$comando = $conexion->prepare($query);
$comando->execute();

$cursor = $comando->fetchAll();

//var_dump($cursor);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Catalogo de Cuentas</title>
</head>

<body>
    <h1>Catalogo de Cuentas</h1>

    <button type="button" class="btn btn-success">Nueva Cuenta</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del Cliente</th>
                <th scope="col">Tipo de Cuenta</th>
                <th scope="col">Saldo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursor as $cuenta): ?>
            <tr>
                <th scope="row"><?php echo $cuenta['ID'] ?></th>
                <td><?php echo $cuenta['NOMBRE']  ?></td>
                <td><?php echo $cuenta['TIPO']  ?></td>
                <td><?php echo $cuenta['SALDO']  ?></td>
                <td><button type="button" class="btn btn-warning">Editar</button> </td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>