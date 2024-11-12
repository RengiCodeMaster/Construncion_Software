<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION["txtusername"])) {
    header("Location: http://127.0.0.1/Construncion_Software/index.php");  
    exit;
}

// Simulando ventas en un array por que no tengo una base de datos aun 
$ventas = [
    ['id_venta' => 1, 'producto' => 'Laptop', 'cantidad' => 2, 'precio' => 1500.00, 'fecha' => '2024-11-11'],
    ['id_venta' => 2, 'producto' => 'Teclado', 'cantidad' => 5, 'precio' => 25.50, 'fecha' => '2024-11-12'],
    ['id_venta' => 3, 'producto' => 'Mouse', 'cantidad' => 10, 'precio' => 15.00, 'fecha' => '2024-11-13'],
    ['id_venta' => 4, 'producto' => 'Monitor', 'cantidad' => 1, 'precio' => 300.00, 'fecha' => '2024-11-14'],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_venta = $_POST['id_venta'];

    // Buscar y eliminar la venta si existe
    foreach ($ventas as $key => $venta) {
        if ($venta['id_venta'] == $id_venta) {
            unset($ventas[$key]);
            $message = "Venta con ID $id_venta eliminada exitosamente.";
            break;
        } else {
            $message = "No se encontró la venta con el ID $id_venta.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Venta</title>
    <link rel="stylesheet" href="css/eliminarvariables.css">  
</head>
<body>
    <div class="container">
        <header>
            <h1>Eliminar Venta</h1>
        </header>

        <!-- Formulario para eliminar una venta -->
        <form method="POST" >
            <div class="form-group">
                <label for="id_venta">ID de Venta</label>
                <input type="number" id="id_venta" name="id_venta" required>
            </div>

            <button type="submit" class="submit-button">Eliminar Venta</button>
        </form>

        <?php if (isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <a href="index.php" class="back-button">Volver al inicio</a>
    </div>
</body>
</html>
