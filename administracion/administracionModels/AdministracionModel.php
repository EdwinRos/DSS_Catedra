<?php
include 'DBC.php';

class AdministracionModel extends DBC
{

    public function iniciarSesion($usuario, $password){
        try {
            //code...
        $sql = "select * from usuario where usuario.usuario = ? and usuario.password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$usuario, $password]);
        $usuario = $stmt->fetch();
        
        if($usuario != null){
            session_start();
            $_SESSION['usuario'] = $usuario['nombre'] .' '. $usuario['apellido'];
            header('LOCATION: ../index.php');

        }else{
            return array("error" => "Credenciales incorrectas. ");
        }

        } catch (\Throwable $th) {
            //throw $th;
            return array("error" => $th);
        }

    }

    public function subidaCancion()
    {
        $target_dir = '../../upploads/Lista/listaSemana/';
        $targetFile = $target_dir . basename($_FILES['cancion']['name']);
        $cancionTipe = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        $validationLog = array();


        if (file_exists($targetFile)) $validationLog[] = "La cancion ya existe ";

        if($cancionTipe != 'mp3' && $cancionTipe != 'flac')  $validationLog[] = "Formato no permitido, solo se aceptan archivos .mp3 y .flac";

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


    public function obtenerCancionesActualesSemana($lista)
    {
       return scandir("../../upploads/Lista/".$lista);
    }


    public function eliminarCancion($direccion,$cancion){
        $respuesta = '';
        if(!unlink($direccion.$cancion)){
            $respuesta = 'No se pudo eliminar el archivo'.$direccion . $cancion;
        }else{
            $respuesta = 'El archivo ha sido eliminado' ;
        }
        return $respuesta;
    }


}