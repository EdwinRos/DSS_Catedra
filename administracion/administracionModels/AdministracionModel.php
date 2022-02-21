<?php
class AdministracionModel
{
    public function subidaCancion()
    {
        $target_dir = '../../upploads/Lista/listaSemana/';
        $targetFile = $target_dir . basename($_FILES['cancion']['name']);
        $validationLog = array();


        if (file_exists($targetFile)) $validationLog[] = "La cancion ya existe ";

        if (count($validationLog) > 0) {
            //se detecto un problema
            $validationLog[] = "No se ha subido el archivo";
        } else {
            if (move_uploaded_file($_FILES['cancion']['tmp_name'], $targetFile)) {
                $validationLog[] = "El archivo ha sido subido al servidor con exito.";
            } else {
                $validationLog[] = "Ocurrio un error al subir el archivo" ;
            }
        }
        return $validationLog;
    }

    public function obtenerCancionesActualesSemana()
    {
       return scandir("../../upploads/Lista/listaSemana/");
    }


}