<?php

// para peticiones ajax 

include 'AdministracionModel.php';

class AdministracionHandler extends AdministracionModel
{
    public function eliminarDelaLista()
    {
        $listaAeliminar = ($_GET['lista'] == 'semana')? '../../upploads/Lista/listaSemana/' : '../../upploads/Lista/topSemana/';
        $cancion = $_GET['cancion'];
        $results = $this->eliminarCancion($listaAeliminar, $cancion);
        echo "<div id='msj'>";
        echo "<div class='alert alert-success mt-3'>";
        echo $results;
        echo "<button class='btn btn-outline-success float-end' onclick='closeAlert()'>Cerrar</button>";
        echo "</div>";
        echo "</div>";
    }
}

$handler = new AdministracionHandler();
$action = $_GET['task'];

switch ($action) {
    case 'deleteSemana':
        $handler->eliminarDelaLista();
        break;
    
    default:
        # code...
        break;
}