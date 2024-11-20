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
$conexion = new conexion($host, $namedb, $userdb, $passwordb);
$pdo = $conexion->obtenerconexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuarios = $_POST["datusuario"];

    $conecxion = new conexion($host, $namedb, $userdb, $passwordb);
    $pdo = $conecxion->obtenerconexion();
    
    if (isset($_POST["custid"])) {
        // Aplicar el update en la base de datos
        try {
            $sentencia = $pdo->prepare("UPDATE usuarios SET username = ?, password = ?, perfil = ? WHERE id = ?;");
            $sentencia->execute([$_POST["datusuario"], $_POST["datpassword"], $_POST["datperfil"], $_POST["custid"]]);
            echo $tmpdatusuarios . " modificacion exitosa";
        } catch (PDOException $e) {
            echo "no se puede modificar: ";
            echo $e->getMessage();
        }
    } else {
        // Buscar usuario en la base de datos por ID
        try {
            $query = $pdo->prepare("SELECT id, username, password, perfil FROM usuarios WHERE id = ?");
            $query->execute([$tmpdatusuarios]);
            $fila = $query->fetch(PDO::FETCH_ASSOC);

            if ($fila) {
?>
                <form action="" method="POST">
                    <input type="hidden" name="custid" id="custid" value="<?php echo $fila["id"] ?>">  
                    <label for="datusuario">Usuario</label>
                    <input type="text" name="datusuario" id="datusuario" value="<?php echo $fila["username"] ?>">
                    <label for="datpassword">Password</label>
                    <input type="password" name="datpassword" id="datpassword" value="<?php echo $fila["password"] ?>">
                    <label for="datperfil">Perfil</label>
                    <input type="text" name="datperfil" id="datperfil" value="<?php echo $fila["perfil"] ?>">

                    <button type="submit">Ingresar Usuario</button>
                </form>
<?php
            } else {
                echo "Usuario no encontrado.";
            }
        } catch (PDOException $e) {
            echo "Error al buscar usuario: " . $e->getMessage();
        }
    }

    exit(); //CORTA LA EJECUCION
}
?>
<link rel="stylesheet" href="<?php echo get_urlBase('css/modificardatos.css'); ?>">
<h2>MODIFICAR USUARIO</h2>
<form action="" method="POST">
    <label for="datusuario">ID del Usuario que desea modificar:</label>
    <input type="text" name="datusuario" id="datususuario" required>
    <br>
    <button type="submit">BUSCAR USUARIO</button>
</form>
