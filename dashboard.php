<?php
session_start();
if (!isset($_SESSION["txtusername"])) {
    header("Location: http://127.0.0.1/Construncion_Software/index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="imagenes/logo1.png" class="imgLogo" alt="Logo UNAS">
            </div>
            <ul class="menu">
                <li><a href="#"><span class="material-icons">home</span>Inicio</a></li>
                <li><a href="http://127.0.0.1/Construncion_Software/vervariables.php"><span class="material-icons">assessment</span>Ver Ventas</a></li>
                <li><a href="http://127.0.0.1/Construncion_Software/ingresarvariables.php"><span class="material-icons">add_circle</span>Ingresar Venta</a></li>
                <li><a href="http://127.0.0.1/Construncion_Software/modificarvariable.php"><span class="material-icons">edit</span>Modificar Venta</a></li>
                <li><a href="http://127.0.0.1/Construncion_Software/eliminarvariables.php"><span class="material-icons">delete</span>Eliminar Venta</a></li>
                <li><a href="http://127.0.0.1/Construncion_Software/logout.php"><span class="material-icons">exit_to_app</span>Salir</a></li>
            </ul>
        </aside>


        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>SISTEMA DE VENTAS RENGIFO</h1>
                <h2>Universidad Nacional Agraria de la Selva</h2>
            </header>
            <section class="dashboard">
                <div class="image-container">
                    <img src="imagenes/logo1.png" alt="Sistema de ventas">
                </div>
            </section>
        </main>
    </div>
    
    

</body>
</html>