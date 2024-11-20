<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
    exit();
}

require_once $_SERVER["DOCUMENT_ROOT"] . '/etc/config.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/models/connect/conexion.php';

global $host, $namedb, $userdb, $passwordb;
$conecxion = new conexion($host, $namedb, $userdb, $passwordb);
$pdo = $conecxion->obtenerconexion();
$query = $pdo->query("SELECT id, username, password, perfil FROM usuarios");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuarios = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];

    $conecxion = new conexion($host, $namedb, $userdb, $passwordb);
    $pdo = $conecxion->obtenerconexion();

    try {
        $sentencia = $pdo->prepare("INSERT INTO usuarios(username, password, perfil) VALUES (?,?,?)");
        $sentencia->execute([$tmpdatusuarios, $tmpdatpassword, $tmpdatperfil]);
        echo "usuario ingresado con exito";
    } catch (PDOException $e) {
        echo "ubo un error: ";
        echo $e->getMessage();
    }
    exit(); //CORTA LA EJECUCION

}
?>
<link rel="stylesheet" href="<?php echo get_urlBase('css/ingresardatos.css'); ?>">
<h2>INGRESAR USUARIO</h2>
<form action="" method="POST">
    <label for="datusuario">Usuario</label>
    <input type="text" name="datusuario" id="datusuario">
    <label for="datpassword">Password</label>
    <input type="password" name="datpassword" id="datpassword">
    <label for="datperfil">Perfil</label>
    <input type="text" name="datperfil" id="datperfil">

    <button type="submit">Ingresar Usuario</button>
</form>