<?php
session_start();
if (!isset($_SESSION["txtusername"])) {
    header('location:' . get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_urlBase('css/dashboard.css') ?>">
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="<?php echo get_img('logo1.png') ?>" class="imgLogo" alt="Logo UNAS">
            </div>
            <ul class="menu">
                <li><a href="?opcion=inicio"><span class="material-icons">home</span>Inicio</a></li>
                <li><a href="?opcion=Ver"><span class="material-icons">assessment</span>Ver Datos</a></li>
                <li><a href="?opcion=Ingresar"><span class="material-icons">add_circle</span>Ingresar Datos</a></li>
                <li><a href="?opcion=Modificar"><span class="material-icons">edit</span>Modificar Datos</a></li>
                <li><a href="?opcion=Eliminar"><span class="material-icons">delete</span>Eliminar datos</a></li>
                <li><a href="<?php echo get_controllers('/logout.php') ?>"><span class="material-icons">exit_to_app</span>Salir</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>SISTEMA DE VENTAS RENGIFO</h1>
                <h2>Universidad Nacional Agraria de la Selva</h2>
            </header>
            <section class="dashboard">
                <?php
                // Manejo de opciones seleccionadas
                if (isset($_GET['opcion'])) {
                    $opcion = $_GET['opcion'];
                    switch ($opcion) { 
                        case 'inicio':
                            echo "<p>Bienvenido al Sistema de Ventas. Seleccione una opción del menú.</p>";
                            break;
                        
                        case 'Ver':
                            echo "<iframe src='".get_views("verdatos.php")."'></iframe>";
                            break;
                        case 'Ingresar':
                            echo "<iframe src='".get_views("ingresardatos.php")."'></iframe>";
                            break;
                        case 'Modificar':
                            echo "<iframe src='".get_views("modificardatos.php")."'></iframe>";
                            break;
                        case 'Eliminar':
                            echo "<iframe src='".get_views("eliminardatos.php")."'></iframe>";
                            break;
                        default:
                            echo "<p>Opción no válida.</p>";
                            break;
                    }
                } 
                ?>
            </section>
        </main>
    </div>
</body>
</html>  