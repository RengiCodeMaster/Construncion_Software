<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION["txtusername"])) {
    header("Location: http://127.0.0.1/Construncion_Software/index.php");  
    exit;
}

// Aquí iría el código para modificar la venta (por ejemplo, actualizando en una base de datos).
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Venta</title>
    <link rel="stylesheet" href="css/modificarvariables.css"> 
</head>
<body>
    <div class="container">
        <header>
            <h1>Modificar Venta</h1>
        </header>

        <!-- Formulario para modificar venta -->
        <form method="POST" >
            <div class="form-group">
                <label for="id_venta">ID Venta</label>
                <input type="number" id="id_venta" name="id_venta" required>
            </div>

            <div class="form-group">
                <label for="producto">Producto</label>
                <input type="text" id="producto" name="producto" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio por unidad</label>
                <input type="number" id="precio" name="precio" required step="0.01">
            </div>

            <button type="submit" class="submit-button">Actualizar Venta</button>
        </form>

        <a href="index.php" class="back-button">Volver al inicio</a>
    </div>
</body>
</html>
