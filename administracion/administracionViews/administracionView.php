<?php
require_once '../administracionModels/AdministracionModel.php';

class administracionView extends AdministracionModel
{
    public function upload()
    {
        $results = $this->subidaCancion();
        echo "<div class='alert alert-secondary mt-3'>";
        foreach ($results as $message) {
            echo $message . "<br/>";
        }
        echo "</div>";
    }

    public function cargarCanciones()
    {
        $results = $this->obtenerCancionesActualesSemana();
        echo "<ul class='list-group'>";
        echo "<form method='POST' action='homeAdministracion.php'>";
        if(count($results) >2 ){
            for ($i =2 ; $i < count($results) ; $i++) {
                echo "<li class='list-group-item pt-3 pb-5'>$results[$i]</P> <input type='hidden' style='border: none' name='cancionEliminar' readonly value='$results[$i]'/><input type='submit' name='lista' class='btn btn-danger  float-end' value='Eliminar de la lista'/></li>";
            }
        }else{
            echo "<li class='list-group-item'>Aun no se ha subido una cancion!</li>";
        }
        echo "</form>";
        echo "</ul>";
    }
    public function eliminarDelaLista()
    {
        $listaAeliminar = ($_POST['lista'] == 'Eliminar de la lista')? '../../upploads/Lista/listaSemana/' : '../../upploads/Lista/topSemana/';
        $cancion = $_POST['cancionEliminar'];
        $results = $this->eliminarCancion($listaAeliminar, $cancion);
        echo "<div id='msj'>";
        echo "<div class='alert alert-success mt-3'>";
        echo $results;
        echo "<button class='btn btn-outline-success float-end' onclick='closeAlert()'>Cerrar</button>";
        echo "</div>";
        echo "</div>";


    }

}