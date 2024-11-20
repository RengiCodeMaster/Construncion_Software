<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["txtusername"])) {
    header('Location: /index.php');
    exit();
}

require_once $_SERVER["DOCUMENT_ROOT"] . '/etc/config.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/models/connect/conexion.php';

global $host, $namedb, $userdb, $passwordb;
$conexion = new conexion($host, $namedb, $userdb, $passwordb);
$pdo = $conexion->obtenerconexion();  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuarios = $_POST["datusuario"];

    $conexion = new conexion($host, $namedb, $userdb, $passwordb);
    $pdo = $conexion->obtenerconexion();

    try {
        $sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $sentencia->execute([$tmpdatusuarios]);
        echo "Usuario con ID " . $tmpdatusuarios . " ha sido eliminado";
    } catch (PDOException $e) {
        echo "No se puede eliminar: ";
        echo $e->getMessage();
    }
    exit(); //CORTA LA EJECUCION
}
?>
<link rel="stylesheet" href="<?php echo get_urlBase('css/eliminardatos.css'); ?>">
<h2>ELIMINAR USUARIO</h2>
<form action="" method="POST">
    <label for="datususuario">ID del usuario a eliminar:</label>
    <input type="text" name="datusuario" id="datususuario" required>
    <br>
    <button type="submit">Eliminar</button>
</form> 