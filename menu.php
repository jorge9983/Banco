<?php
session_start();
if (!$_SESSION["ingreso"]) {
    header("location:/login.php");
    exit();
}
?>

<!doctype html>
<html>

<head>
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Cooperativa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalogos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../clientes/Clientes.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="../cuentas/Cuentas.php">Cuentas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transacciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Desposito</a></li>
                            <li><a class="dropdown-item" href="#">Retiro</a></li>
                            <li><a class="dropdown-item" href="#">Transferencia</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" method="post" action="../salir.php">
                    <label class="nav-link active" >Usuario: <?php echo $_SESSION["usuario"] ?></label>
                    <button class="btn btn-outline-success" type="submit">Salir</button>
                </form>
            </div>
        </div>
    </nav>
    <script src="public/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>