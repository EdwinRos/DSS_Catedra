<?php include 'administracionView.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../administracioIncludes/bootstrap.php' ?>
    <title><?php echo $_GET['titulo'] ?></title>
</head>

<body>
    <?php include '../administracioIncludes/navbar.php' ?>
    <div class="container cont">
        <div class="row">
            <div class="col-md">
                <h1 class="display-4">Detalles del Evento</h1>
                <p class="lead">Aca puede ver toda la configuracion del Evento
                </p>
                <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <form action="../administracionControllers/AdministracionController.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Detalles del programa</h5>
                                    <p class="card-text">
                                        <input type="text" name="tituloEvento" id="tituloEvento" class="customInput" value="<?php echo $_GET['titulo_evento'] ?>"></p>

                                    <p class="card-text">
                                        <input type="text" name="detalleEvento" id="detalleEvento" class="customInput" value="<?php echo $_GET['detalles'] ?>"></p>


                                    <input type="submit" name="action" value="Actualizar Evento" class="btn btn-outline-primary" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>