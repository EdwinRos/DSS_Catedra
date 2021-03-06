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
                        <div class="card" style="width: 25rem;">
                            <form action="../administracionControllers/AdministracionController.php" method="POST"><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"></form>
                            <form action="../administracionControllers/AdministracionController.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                <img id="url_imagen" src="<?php echo $_GET['url_imagen'] ?>" class="card-img-top" alt="imgB" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Detalles de la biografia</h5>
                                    <span><b>Nombre del Artista</b></span>
                                    <p class="card-text">
                                   
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                        </svg>
                                        <input type="text" name="nombre_artista" id="nombre_artista" class="customInput" value="<?php echo $_GET['nombre_artista'] ?>">
                                    </p>
                                    <span><b>Url de la Imagen del Artista</b></span>
                                    <p class="card-text">
                                  
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                        </svg>
                                        <input type="text" name="url_imagen" id="url_imagen" class="customInput" value="<?php echo $_GET['url_imagen'] ?>">
                                    </p>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                        </svg> <span><b>Biografia del Artista</b></span>
                                    <p class="card-text">
                                        <textarea  type="text" name="biografia" id="biografia" class="customInput" style="width: 100%;"><?php echo $_GET['biografia'] ?></textarea>
                                    </p>
                                    <div>
                                    <input type="submit" name="action" value="Actualizar Biografia" class="btn btn-outline-primary" /> 

                                    </div>
                                    <input type="submit" value="Eliminar Biografia" name="action" class="btn btn-outline-danger mt-3" />
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md" >
                        <span id="url_imagen">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/administracion.js"></script>
</body>

</html>