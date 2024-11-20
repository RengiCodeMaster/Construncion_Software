<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION["txtusername"])) {
    header("Location: http://127.0.0.1/Construncion_Software/index.php");  
    exit;
}

$ventas = [
    ['id_venta' => 1, 'producto' => 'Laptop', 'cantidad' => 2, 'precio' => 1500.00, 'fecha' => '2024-11-11'],
    ['id_venta' => 2, 'producto' => 'Teclado', 'cantidad' => 5, 'precio' => 25.50, 'fecha' => '2024-11-12'],
    ['id_venta' => 3, 'producto' => 'Mouse', 'cantidad' => 10, 'precio' => 15.00, 'fecha' => '2024-11-13'],
    ['id_venta' => 4, 'producto' => 'Monitor', 'cantidad' => 1, 'precio' => 300.00, 'fecha' => '2024-11-14'],
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Ventas</title>
    <link rel="stylesheet" href="css/ver_variables.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Listado de Ventas</h1>
        </header>

        <?php if (count($ventas) > 0): ?>
            <table class="sales-table">
                <thead>
                    <tr>
                        <th>ID Venta</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventas as $venta): ?>
                        <tr>
                            <td><?php echo $venta['id_venta']; ?></td>
                            <td><?php echo $venta['producto']; ?></td>
                            <td><?php echo $venta['cantidad']; ?></td>
                            <td><?php echo "$" . number_format($venta['precio'], 2); ?></td>
                            <td><?php echo date("d-m-Y", strtotime($venta['fecha'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay ventas registradas.</p>
        <?php endif; ?>

        <a href="index.php" class="back-button">Volver al inicio</a>
    </div>
</body>
</html>
