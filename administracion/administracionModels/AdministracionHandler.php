<?php

// para peticiones ajax 

include 'AdministracionModel.php';
include '../administracionViews/administracionView.php';
class AdministracionHandler extends AdministracionModel
{
    public function eliminarDelaLista()
    {
        $listaAeliminar = ($_GET['lista'] == 'listaSemana/') ? '../../upploads/Lista/listaSemana/' : '../../upploads/Lista/topSemana/';
        $cancion = $_GET['cancion'];
        $results = $this->eliminarCancion($listaAeliminar, $cancion);
        echo "<div id='msj'>";
        echo "<div class='alert alert-success mt-3'>";
        echo $results;
        echo "<button class='btn btn-outline-success float-end' onclick='closeAlert()'>Cerrar</button>";
        echo "</div>";
        echo "</div>";
    }

    public function cancionEscuchada()
    {
        $result = $this->commitCancionEscuchada($_GET['titulo']);
        echo $result;
    }

}
class AdministracionViewHandler extends administracionView
{

    public function dataActu()
    {
        $this->actualizarLista();
    }
}


$dataUpdate = new AdministracionViewHandler();
$handler = new AdministracionHandler();
$action = $_GET['task'];


switch ($action) {
    case 'deleteSemana':
        $handler->eliminarDelaLista();
        break;
    case 'scp':
        $handler->cancionEscuchada();
        break;
    case 'actuLista':
        $dataUpdate->dataActu();
        break;
    default:
        # code...
        break;
}
