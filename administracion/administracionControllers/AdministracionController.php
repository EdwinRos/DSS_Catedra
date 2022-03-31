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

    public function actualizarEvento()
    {
        return $this->updateEvento($_POST['tituloEvento'], $_POST['detalleEvento'], $_POST['id']);
    }

    public function eventoEliminar()
    {
        return $this->eliminarEvento($_POST['id']);
    }

    public function actualizarBiografia($nombre, $url, $biografia, $id)
    {
        return $this->updateBiografia($nombre, $url,$biografia,$id);
    }

    public function biografiaEliminar($id)
    {
        return $this->eliminarBio($id);
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

    case 'Eliminar Evento':
        $s = $controller->eventoEliminar();
        header('Location: ../administracionViews/eventos.php?mensajes=' . $s);
        break;

    case 'Actualizar Evento':
        $s = $controller->actualizarEvento();
        header('Location: ../administracionViews/eventos.php?mensajes=' . $s);
        break;
    case 'Actualizar Biografia':
        $s = $controller->updateBiografia($_POST['nombre_artista'], $_POST['url_imagen'], $_POST['biografia'], $_POST['id']);
        header('LOCATION: ../administracionViews/biografias.php?mensajes=' . $s);
        break;

    case 'Eliminar Biografia':
        $s = $controller->eliminarBio($_POST['id']);
        header('LOCATION: ../administracionViews/biografias.php?mensajes=' . $s);
        break;
    default:
        header('Location: ../administracionViews/homeAdministracion.php?mensaje=AccionNoEncontrada');
    break;
}
