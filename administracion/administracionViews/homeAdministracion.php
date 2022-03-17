<?php
include 'administracionView.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../administracioIncludes/bootstrap.php' ?>
    <title>Lista de la semana radio udb</title>
</head>

<body>
    <?php
    include '../administracioIncludes/navbar.php';
    ?>
    <div class="container">
        <div class="row">
            <h1 class="display-4">Lista de la semana - radio udb</h1>
            <hr>
            <div class="col-md">
                <h1 class="display-4">Subir una cancion a la lista</h1>
                <form method="post" action="homeAdministracion.php" enctype="multipart/form-data">
                    <label for="cancion" class="col-sm-2 control-label">Seleccionar una cancion</label>
                    <input type="file" class="form-control" name="cancion" id="cancion" required />
                    <input type="submit" class="btn btn-primary mt-3" value="subir" />
                </form>
                <?php
                if (isset($_FILES['cancion']['name'])) {
                    $administracionObj = new administracionView();
                    $administracionObj->upload();
                }
                ?>
            </div>
            <div class="col-md">
                <h1 class="display-4"> lista actual de la semana</h1>
                <p class="lead">Se detalla la lista actual de canciones de la semana</p>
                <?php
                $administracionCancionesActuales = new administracionView();
                $administracionCancionesActuales->cargarCanciones('listaSemana/');
                ?>
            </div>
        </div>
    </div>
</body>

</html>