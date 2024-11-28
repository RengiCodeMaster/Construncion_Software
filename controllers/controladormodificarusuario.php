<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/models/modeloUsuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/etc/config.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/views/vistamodificarUsuario.php';

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
    exit();
}

$modeloUsuario = new modeloUsuario();
$mensaje = '';

// Manejar búsqueda de usuario
if (isset($_POST['search_user']) || isset($_GET['username'])) {
    $username = $_POST['search_username'] ?? $_GET['username'];
    $usuario = $modeloUsuario->obtenerUsuarioPorNombre($username);

    if ($usuario) {
        mostrarFormularioModificacion($usuario, $mensaje);
    } else {
        $mensaje = "<p style='color: green;'>Usuario no encontrado.</p>";
        buscarUsuario($mensaje);
    }
}

// Manejar actualización de usuario
if (isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $username = $_POST['new_username'];
    $password = $_POST['new_password'];
    $perfil = $_POST['new_perfil'];

    $resultado = $modeloUsuario->modificarUsuario($user_id, $username, $password, $perfil);

    if ($resultado) {
        $mensaje = "<p style='color: white;'>Usuario actualizado con éxito.</p>";
    } else {
        $mensaje = "<p style='color: red;'>Usuario no actualizado.</p>";
    }
    buscarUsuario($mensaje);
}


// Mostrar formulario de búsqueda por defecto si no hay POST
if (($_SERVER['REQUEST_METHOD'] !== 'POST') && !isset($_POST['search_user']) && !isset($_GET['username'])) {
    buscarUsuario($mensaje);
}