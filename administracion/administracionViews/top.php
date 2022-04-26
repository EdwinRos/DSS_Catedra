<?php
include 'administracionView.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../administracioIncludes/bootstrap.php' ?>
    <title>Canciones en el top</title>
</head>

<body>
    <?php
    include '../administracioIncludes/navbar.php';
    ?>
    <div class="container">
        <div class="row">
            <h1 class="display-4">Lista de canciones en el top</h1>
            <?php
            if (isset($_GET['m'])) {
                $mensaje = <<< MDR
                    <div class="alert alert-warning" role="alert">
                    Uno o varios de los archivos no se han subido, puede que estos
                    estuviesen repetidos o no fueran del formato aceptado(mp3, flac)
                    </div>
                    MDR;

                echo $mensaje;
            }
            ?>
        </div>
        <hr>
        <div class="row">
            <div class="col-md">
                <h1 class="display-6">Estas son las canciones mas escuchadas</h1>
                <?php
                $viewModel = new administracionView();
                $viewModel->topCancionesView();
                ?>
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Actualizar lista
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Actualizando lista</h5>
                                <a href="top.php" class="btn-close" aria-label="Close"></a>
                            </div>
                            <div class="modal-body">
                                espere...
                                <!-- Aqui vamos a poner la logica  -->
                                <span id="log">

                                </span>

                            </div>
                            <div class="modal-footer">
                                <a href="top.php" class="btn btn-secondary mt-3">Cerrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <h1 class="display-6">Canciones subidas a la radio en la lista top</h1>
                <?php
                $viewModel->cargarCanciones('topSemana');
                ?>
            </div>
        </div>
    </div>
    <script>
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("log").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../administracionModels/AdministracionHandler.php?task=actuLista", true);
        xmlhttp.send();
    </script>
</body>

</html>