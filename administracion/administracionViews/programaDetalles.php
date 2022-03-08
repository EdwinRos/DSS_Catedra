<?php include 'administracionView.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../administracioIncludes/bootstrap.php' ?>
    <title><?php echo $_GET['titulo'] ?></title>
    <style>
        .customInput {
            border: none;
            margin-top: 3px;
            margin-bottom: 13px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <?php include '../administracioIncludes/navbar.php' ?>
    <div class="container cont">
        <div class="row">
            <div class="col-md">
                <h1 class="display-4">Detalles del programa publicado</h1>
                <p class="lead">Puede editar haciendo click en los elementos del programa</p>
                <p class="lead">Tambien puede eliminar el programa si asi lo desea
                <form action="../administracionControllers/AdministracionController.php" method="POST"><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><input type="submit" value="Eliminar Programa" name="action" class="btn btn-outline-danger mt-3" /></form>
                </p>
                <div class="row">
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <form action="../administracionControllers/AdministracionController.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                <img id="imgE" src="<?php echo $_GET['img'] ?>" class="card-img-top" alt="imgP">
                                <div class="card-body">
                                    <h5 class="card-title">Detalles del programa</h5>
                                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                        </svg> <input type="text" name="titulo" id="titulo" class="customInput" value="<?php echo $_GET['titulo'] ?>"></p>

                                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg> <input type="text" name="dias" id="dias" class="customInput" value="<?php echo $_GET['dias'] ?>"></p>

                                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg> <input type="time" name="hora" id="hora" class="customInput" value="<?php echo $_GET['hora'] ?>"></p>

                                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                        </svg><input type="text" name="dj" id="dj" class="customInput" value="<?php echo $_GET['dj'] ?>"></p>

                                    <p id="hiddenimgUrl">
                                    </p>
                                    <input type="submit" name="action" value="Actualizar Programa" class="btn btn-outline-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md">
                        <span id="imgN">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/administracion.js"></script>
</body>

</html>