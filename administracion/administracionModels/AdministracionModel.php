<?php
include 'DBC.php';

class AdministracionModel extends DBC
{

    protected function iniciarSesion($usuario, $password)
    {
        try {
            //code...
            $sql = "select * from usuario where usuario.usuario = ? and usuario.password = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$usuario, $password]);
            $usuario = $stmt->fetch();

            if ($usuario != null) {
                session_start();
                $_SESSION['usuario'] = $usuario['nombre'] . ' ' . $usuario['apellido'];
                header('LOCATION: ../index.php');
            } else {
                return array("error" => "Credenciales incorrectas. ");
            }
        } catch (\Throwable $th) {
            //throw $th;
            return array("error" => $th);
        }
    }

    protected function subidaCancion()
    {
        $target_dir = '../../upploads/Lista/listaSemana/';
        $targetFile = $target_dir . basename($_FILES['cancion']['name']);
        $cancionTipe = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $validationLog = array();


        if (file_exists($targetFile)) $validationLog[] = "La cancion ya existe ";

        if ($cancionTipe != 'mp3' && $cancionTipe != 'flac')  $validationLog[] = "Formato no permitido, solo se aceptan archivos .mp3 y .flac";

        if (count($validationLog) > 0) {
            //se detecto un problema
            $validationLog[] = "No se ha subido el archivo";
        } else {
            if (move_uploaded_file($_FILES['cancion']['tmp_name'], $targetFile)) {
                $validationLog[] = "El archivo ha sido subido al servidor con exito.";
            } else {
                $validationLog[] = "Ocurrio un error al subir el archivo";
            }
        }
        return $validationLog;
    }


    protected function obtenerCancionesActualesSemana($lista)
    {
        return scandir("../../upploads/Lista/" . $lista);
    }


    protected function eliminarCancion($direccion, $cancion)
    {
        $respuesta = '';
        if (!unlink($direccion . $cancion)) {
            $respuesta = 'No se pudo eliminar el archivo' . $direccion . $cancion;
        } else {
            $respuesta = 'El archivo ha sido eliminado';
        }
        return $respuesta;
    }


    protected function commitCancionEscuchada($cancion)
    {
        try {
            //si cancion ya existe en bd solo se sube su contador si no se ingresa
            $sql = "SELECT `id`, `titulo`,`conteo` FROM `cancion` WHERE titulo = ?";
            $sqlUpdate = "UPDATE `cancion` SET conteo = ? WHERE id = ?";
            $sqlInsert = "INSERT INTO `cancion`(`titulo`, `conteo`) VALUES (? , 1 )";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$cancion]);
            $result = $stmt->fetch();
            if ($result != null) {
                $conteoActual = $result['conteo'] + 1;
                $updateConteo = $this->connect()->prepare($sqlUpdate);
                $updateConteo->execute([$conteoActual, $result['id']]);
            } else {
                $nuevoRegistro = $this->connect()->prepare($sqlInsert);
                $nuevoRegistro->execute([$cancion]);
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }

    protected function listaDecancionDelTop()
    {
        try {
            $sql = "SELECT `titulo`, `conteo` FROM `cancion` ORDER BY `cancion`.`conteo` DESC LIMIT 0 ,10";
            $stmt = $this->connect()->query($sql);
            return $stmt->fetchAll();
        } catch (\Throwable $th) {
            return $th;
        }
    }

    protected function moverATop($cancionesDelTop)
    {
        ini_set('display_errors', 'Off');
        $log = array();
        try {
            $source = '../../upploads/Lista/listaSemana/';
            $target = '../../upploads/Lista/topSemana/';
            foreach (glob($target . '*') as $file) {
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            foreach ($cancionesDelTop as $cancion) {
                if (!copy($source . $cancion , $target . $cancion)) {
                    $log[] = 'La cancion  no se encuentra, puede hacerlo manualmente';
                }
            }

            return $log;
        } catch (\Throwable $th) {
            error_reporting(E_ERROR | E_PARSE);
        }
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    protected function publicarProgramaBD($titulo, $diasEmision, $horaEmision, $dj, $url)
    {
        try {
            $sql = "INSERT INTO `programa`(`titulo`, `dias_emision`, `hora_emision`, `dj_programa`, `url_imagen`) VALUES (?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$titulo, $diasEmision, $horaEmision, $dj, $url]);
            return "Se publico un nuevo programa";
        } catch (\Throwable $th) {
            return $th;
        }
    }

    protected function updatePrograma($titulo, $diasEmision, $horaEmision, $dj, $urlImagen, $id)
    {

        try {
            $sql = "UPDATE programa SET titulo= ? ,dias_emision= ? ,hora_emision= ? ,dj_programa= ? ,url_imagen= ? WHERE programa.id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$titulo, $diasEmision, $horaEmision, $dj, $urlImagen, $id]);
            if ($stmt) {
                return "actualizado";
            } else {
                return 'no';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }




    public function eliminarProgramaRadio($id)
    {
        $sql = "DELETE FROM `programa` WHERE programa.id = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        if ($stmt) {
            return "Programa eliminado";
        } else {
            return "fallido";
        }
    }


    protected function listaProgramas()
    {
        try {
            $sql = "SELECT * FROM programa";
            $stmt = $this->connect()->query($sql);
            return $stmt->fetchAll();
        } catch (\Throwable $th) {
            return array(0 => $th);
        }
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function insertarBio($nombreArtista, $urlImagenBio, $biografia)
    {
        try {
            $sql = "INSERT INTO `biografia`(`nombre_artista`, `url_imagen`, `biografia`) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nombreArtista, $urlImagenBio, $biografia]);
            return "Se agrego una nueva Biografia";
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function eliminarBio($id)
    {
        $sql = "DELETE FROM `biografia` WHERE biografia.id = ? ";
        $borrar = $this->connect()->prepare($sql);
        $borrar->execute([$id]);
        if ($borrar) {
            return "La Biografia se ha eliminado";
        } else {
            return "Error al Eliminar la Biografia";
        }
    }

    public function listaBio()
    {
        try {
            $sql = "SELECT * FROM biografia";
            $mostrar = $this->connect()->query($sql);
            return $mostrar->fetchAll();
        } catch (\Throwable $th) {
            return array(0 => $th);
        }
    }

    public function updateBiografia($nombreArtista, $urlImagenBio, $biografia, $id)
    {
        try {
            $sql = "UPDATE `biografia` SET `nombre_artista`= ? ,`url_imagen`= ?,`biografia`= ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nombreArtista, $urlImagenBio, $biografia, $id]);
            if ($stmt) {
                return "Actualizado Correctamente";
            } else {
                return 'Error al Actualizar';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }


    ////////////////////////////////////////////////////////////////////////////////////////////
    public function insertarEvento($tituloEvento, $detalles)
    {
        try {
            $sql = "INSERT INTO `evento`(`titulo_evento`, `detalles`) VALUES (?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$tituloEvento, $detalles]);
            return "Se ha publicado un nuevo evento";
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function eliminarEvento($id)
    {
        $sql = "DELETE FROM `evento` WHERE evento.id = ? ";
        $delete = $this->connect()->prepare($sql);
        $delete->execute([$id]);
        if ($delete) {
            return "El Evento se ha Eliminado";
        } else {
            return "Error al Eliminar el Evento";
        }
    }

    public function listadoEvento()
    {
        try {
            $sql = "SELECT * FROM evento";
            $mostrar = $this->connect()->query($sql);
            return $mostrar->fetchAll();
        } catch (\Throwable $th) {
            return array(0 => $th);
        }
    }

    public function updateEvento($tituloEvento, $detalle, $id)
    {
        try {
            $sql = "UPDATE evento SET titulo_evento= ? ,detalles= ? WHERE evento.id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$tituloEvento, $detalle, $id]);
            if ($stmt) {
                return "Actualizado Correctamente";
            } else {
                return 'No se pudo Actualizar, revise de nuevo';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
