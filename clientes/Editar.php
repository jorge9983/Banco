<?php

require_once('../menu.php');
include_once '../conexion.php';

$id = $_GET["id"];
//echo $id;

$query = "select * from clientes where id=" . $id;

$con = new Conexion();
$conexion = $con->Conectar();

$comando = $conexion->prepare($query);
$comando->execute();

$cliente = $comando->fetch();

//var_dump($cliente);




?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Nuevo Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>

<body>
    <div class="container mt-5">
        <h1>Editar Cliente</h1>
        <div class="ror">


            <form action="../clientes/editarcliente.php" method="POST">
                <input type="hidden" name="txtid" value="<?php echo $cliente['ID'] ?>">
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre" class="form-control mb-3" required placeholder="nombre" value="<?php echo $cliente['NOMBRE'] ?>"></td>
                    </tr>
                    <tr>
                        <td>DPI:</td>
                        <td><input type="text" name="dpi" class="form-control mb-3" required placeholder="123456" value="<?php echo $cliente['DPI'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td><input type="phone" name="telefono" class="form-control mb-3" required placeholder="5555-5555" value="<?php echo $cliente['TELEFONO'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" class="form-control mb-3" required placeholder="usario@mail.com" value="<?php echo $cliente['EMAIL'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="btn btn-primary btn-block" value="Guardar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>