<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
    if (!isset($_SESSION["txtusername"])) {
            header('location:' . get_urlBase('index.php'));
            exit();
    }
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/views/vistadashboard.php';

$opcion = $_GET['opcion'] ?? 'inicio';
$contenido = '';


    switch ($opcion) {
        case 'inicio':
            $contenido = '<h1>  Bienvenido</h1>';
            break;
        
        case 'Ver':
            ob_start();
            include get_controllers_disk("controladorUsuarios.php");
            $contenido = ob_get_clean();
            break;

        case 'Ingresar':
            ob_start();
            include get_controllers_disk("controladorIngresarUsuario.php");
            $contenido = ob_get_clean();
            break;

        case 'Modificar':
            ob_start();
            include get_controllers_disk("controladoreliminarusuario.php");
            $contenido = ob_get_clean();
            break;

        case 'Eliminar':
            ob_start();
            include get_controllers_disk("controladoreliminarusuario.php");
            $contenido = ob_get_clean();
            break;
        default: 
            http_response_code(400);
            $contenido = "<h1> Error </h1>";
            break;
    }

    dashboard($contenido);


?>