<?php

class AdministracionController
{
    public function closeSesion(){
        session_start();
        unset($_SESSION['usuario']);
        session_destroy();
        header('LOCATION: ../index.php');
    }
}

$controller = new AdministracionController();
$action = $_POST['action'];


switch($action)
{
    case 'salir':
        $controller->closeSesion();
        break;
}