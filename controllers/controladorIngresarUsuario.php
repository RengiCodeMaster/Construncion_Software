<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/models/modeloUsuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/views/vistaIngresarUsuario.php';

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
    exit();
}

$message = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusername = $_POST["datusername"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];
    $modeloUsuario = new modeloUsuario();

    try {
        $modeloUsuario->agregarusuario($tmpdatusername, $tmpdatpassword, $tmpdatperfil);
        $message = "<p style='color: green;'>Usuario registrado exitosamente.</p>";
    } catch (PDOException $e) {
        $message = "<p style='color: red;'>Hubo un error: " . $e->getMessage() . "</p>";
    }
}

mostrarFormularioIngreso($message);