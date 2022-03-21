<?php include 'administracionView.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../administracioIncludes/bootstrap.php' ?>
    <title>Eventos</title>
</head>

<body>
    <?php include '../administracioIncludes/navbar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="display-4">Eventos Publicados</h1>
                <!-- <?php
                        if (isset($_GET['mensajes'])) {
                        ?>
                    <div class="alert alert-secondary mt-3 mb-3" role="alert">
                        <?php echo $_GET['mensajes']; ?>
                    </div>
                <?php
                        }
                        if (isset($_POST['dj'])) {
                            $registroPrograma = new administracionView();
                            $registroPrograma->publicarPrograma();
                        }
                        $listadoProgramas = new administracionView();
                        $listadoProgramas->listarProgramasPublicados();
                ?> -->
            </div>
            <div class="col-md">
                <h1 class="display-4">Registrar un Nuevo Evento</h1>
                <hr>
                <form method="POST" action="eventos.php">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                            </svg></span>
                        <input type="text" class="form-control" placeholder="Titulo del Evento" aria-label="Username" aria-describedby="basic-addon1" required name="titulo">
                    </div>
                    <span>Detalles del Evento</span>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                            </svg></span>
                        <textarea type="text" class="form-control" placeholder="Detalles del Evento" aria-label="Username" aria-describedby="basic-addon1" required name="detalles">
                        </textarea>
                    </div>


                    <input type="submit" value="Publicar" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</body>

</html>