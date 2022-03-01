<?php
session_start();

if(isset($_SESSION['usuario'])){
    header('Location: administracionViews/homeAdministracion.php');
}else{
    header('Location: administracionViews/login.php');
}