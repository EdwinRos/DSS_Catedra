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
                <h1 class="display-4">Detalles de la Biografia</h1>
                <p class="lead">Aca puede ver toda la descripcion del Artista
                </p>
                <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <form action="../administracionControllers/AdministracionController.php" method="POST"><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><input type="submit" value="Eliminar Biografia" name="action" class="btn btn-outline-danger mt-3" /></form>
                            <form action="../administracionControllers/AdministracionController.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Detalles de la biografia</h5>
                                    <p class="card-text">
                                        <input type="text" name="nombre_artista" id="nombre_artista" class="customInput" value="<?php echo $_GET['nombre_artista'] ?>">
                                    </p>

                                    <p class="card-text">
                                        <input type="text" name="url_imagen" id="url_imagen" class="customInput" value="<?php echo $_GET['url_imagen'] ?>">
                                    </p>

                                    <p class="card-text">
                                        <input type="text" name="biografia" id="biografia" class="customInput" value="<?php echo $_GET['biografia'] ?>">
                                    </p>

                                    <input type="submit" name="action" value="Actualizar Biografia" class="btn btn-outline-primary" />
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