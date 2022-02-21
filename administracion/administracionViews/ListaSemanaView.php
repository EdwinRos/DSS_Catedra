<?php

require_once '../administracionModels/AdministracionModel.php';

class ListaSemanaView extends AdministracionModel
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
        if(count($results) >2 ){
            for ($i =2 ; $i < count($results) ; $i++) {
                echo "<li class='list-group-item'> $results[$i] <a href=\"administrarListaSemana.php?lista=semana&&cancionEliminar=$results[$i]\" class='btn btn-danger float-end'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                      <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                      </svg></a></li>";
            }
        }else{
            echo "<li class='list-group-item'>Aun no se ha subido una cancion!</li>";
        }
        
        echo "</ul>";
    }
    public function eliminarDelaLista()
    {
        $listaAeliminar = ($_GET['lista'] == 'semana')? '../../upploads/Lista/listaSemana/' : '../../upploads/Lista/topSemana/';
        $cancion = $_GET['cancionEliminar'];   
        $results = $this->eliminarCancion($listaAeliminar, $cancion);
        echo "<div id='msj'>";
        echo "<div class='alert alert-success'>";
        echo $results;
        echo "<button class='btn btn-outline-success float-end' onclick='closeAlert()'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle' viewBox='0 0 16 16'>
        <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
        <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
      </svg> </button>";
        echo "</div>";
        echo "</div>";
    }

}