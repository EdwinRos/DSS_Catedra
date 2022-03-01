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

    public function cargarCanciones($lista)
    {
        $results = $this->obtenerCancionesActualesSemana($lista);
        echo "<ul class='list-group'>";
        if(count($results) >2 ){
            for ($i =2 ; $i < count($results) ; $i++) {
                echo "<li class='list-group-item pt-3 pb-5'>$results[$i] <a href='confirmaciones.php?lista=semana&&cancion=$results[$i]' class='btn btn-outline-danger'>Eliminar</a> </li>";
            }
        }else{
            echo "<li class='list-group-item'>Aun no se ha subido una cancion!</li>";
        }
        echo "</ul>";
    }
    

    public function identificarse()
    {
      $result = $this->iniciarSesion($_POST['usuario'], sha1($_POST['password']));
      echo "<div class='alert alert-danger mt-3'>";
      echo $result['error'];
      echo "</div>";
    }

}
