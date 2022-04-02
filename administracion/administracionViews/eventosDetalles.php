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
                            <form action="../administracionControllers/AdministracionController.php" method="POST"><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><input type="submit" value="Eliminar Evento" name="action" class="btn btn-outline-danger mt-3" /></form>
                            <form action="../administracionControllers/AdministracionController.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Detalles del programa</h5>
                                    <span><b>Titulo Evento:</b></span>
                                    <p class="card-text">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                        </svg><input type="text" name="tituloEvento" id="tituloEvento" class="customInput" value="<?php echo $_GET['titulo_evento'] ?>">
                                    </p>

                                    <p class="card-text">
                                        <span><b>Detalles del Evento:<b/></span>
                                    <p class="card-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                        </svg>
                                        <input type="text" name="detalleEvento" id="detalleEvento" class="customInput" value="<?php echo $_GET['detalles'] ?>">
                                    </p>


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