<?php

include '../administracionModels/AdministracionModel.php';
class AdministracionController extends AdministracionModel
{
    public function closeSesion()
    {
        session_start();
        unset($_SESSION['usuario']);
        session_destroy();
        header('LOCATION: ../index.php');
    }

    public function actualizarPrograma()
    {
        return $this->updatePrograma($_POST['titulo'], $_POST['dias'], $_POST['hora'], $_POST['dj'], $_POST['urlImagen'], $_POST['id']);
    }


    public function eliminarPrograma()
    {
        return $this->eliminarProgramaRadio($_POST['id']);
    }

}

$controller = new AdministracionController();
$action = $_POST['action'];
$s;

switch ($action) {
    case 'salir':
        $controller->closeSesion();
        break;
    case 'Actualizar Programa':
        $s = $controller->actualizarPrograma();
        header('LOCATION: ../administracionViews/programas.php?mensajes=' . $s);
        break;
    case 'Eliminar Programa':
        $s = $controller->eliminarPrograma();
        header('LOCATION: ../administracionViews/programas.php?mensajes=' . $s);
        break;
    }
