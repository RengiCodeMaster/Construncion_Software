<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION["txtusername"])) {
    header("Location: http://127.0.0.1/Construncion_Software/index.php");
    exit;
}
// (simulando una base de dato por que no hay)
$ventas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = date("Y-m-d H:i:s");

    // Agregar venta al arreglo (simulando la inserción en base de datos)
    $ventas[] = [
        'id_venta' => count($ventas) + 1,
        'producto' => $producto,
        'cantidad' => $cantidad,
        'precio' => $precio,
        'fecha' => $fecha
    ];

    // Mensaje de éxito
    echo "<p>Venta registrada exitosamente!</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Venta</title>
    <link rel="stylesheet" href="css/ingresarvariables.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Registrar Nueva Venta</h1>
        </header>

        <form method="POST" >
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

            <button type="submit" class="submit-button">Registrar Venta</button>
        </form>

        <a href="index.php" class="back-button">Volver al inicio</a>
    </div>
</body>
</html>
