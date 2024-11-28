<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/models/modeloUsuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/views/vistaeliminarUsuario.php';

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
    exit();
}


$modeloUsuario = new modeloUsuario();
$mensaje = '';
if (($_SERVER["REQUEST_METHOD"] == "POST") || ($_SERVER["REQUEST_METHOD"] == "GET")) {
    $datusuario = isset($_POST["datusuario"]) ? $_POST["datusuario"] : (isset($_GET["username"]) ? $_GET["username"] : null);

    try {
        $modeloUsuario->eliminarUsuario($datusuario);
        $mensaje = "<span style='color: green;'>Usuario eliminado con exito" . "</span>";
    } catch (PDOException $e) {
        $mensaje = "Hubo un error  ...<br>" . $e->getMessage();
    }
}

mostrarFormularioEliminacion($mensaje);