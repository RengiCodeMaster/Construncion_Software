<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

     session_start();
    function get_connection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbsistema";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
    
    function get_user_credentials($username) {
        require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';
        $conn = get_connection();
        $stmt = $conn->prepare("SELECT username, password FROM usuarios WHERE BINARY username = ? LIMIT 1");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $user;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $v_username = $_POST["txtusername"] ?? '';
        $v_password = $_POST["txtpassword"] ?? '';
    
        $user = get_user_credentials($v_username);
    
        if ($user && $v_password === $user['password']) {
            $_SESSION["txtusername"] = $v_username;
            header('Location: '.get_views('dashboard.php'));
            exit;
        } else {
            header('Location: '.get_views('claveequivocada.php'));
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body> 
    <div class="imagenes">
        <img src="img/imagen.png" alt="Imagen de fondo"> 
    </div>

    <div class="login">
        <div class="barra-login">
            <span class="titulo-login">Login</span>
        </div>
        <form class="formulario" action="" method="POST">
            <label for="username" class="etiqueta">Username</label>
            <input type="text" id="txtusername" name="txtusername" class="campo" placeholder="Enter Username" required>
            
            <label for="contrasena" class="etiqueta">Password</label>
            <input type="password" id="txtpassword" name="txtpassword" class="campo" placeholder="Enter Password" required>          
            <button type="submit" class="boton recordar-boton">Remember</button>
            <button type="submit" class="boton login-boton">Login</button>
        </form>
    </div>
</body>
</html>