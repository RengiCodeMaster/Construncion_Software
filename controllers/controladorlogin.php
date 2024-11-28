<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/views/vistalogin.php'; 

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
            header('Location: '.get_controllers('controladordashboard.php'));
            exit;
        } else {
            header('Location: '.get_views('claveequivocada.php'));
            exit;
        }
    }
    vistaLogin($error = '');