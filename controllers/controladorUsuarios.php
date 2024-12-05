<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/modelousuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/views/vistaUsuario.php';
if (!isset($_SESSION["txtusername"])) {
    header('location:' . get_urlBase('index.php'));
}

$modelousuario = new modelousuario();
$usuarios = $modelousuario->obtenerusuario();

mostrarusuarios($usuarios);   
  


