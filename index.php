<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
    session_start();
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        //echo "<br>";
        //echo "SE EMBIARON LAS SIGUIENTES VARIABLES: ";
        //echo "<br>";
        //echo $_POST["txtusername"];
        //echo "<br>";
        //echo $_POST["txtpassword"];
        //echo "<br>";

        $v_username = "";
        $v_password = "";
        if (isset($_POST["txtusername"]) ) {
            $v_username = $_POST["txtusername"];
            
        }
        if (isset($_POST["txtpassword"]) ) {
            $v_password = $_POST["txtpassword"];
        }

        if (($v_username == "admin" && $v_password == "1234")) {
            $_SESSION["txtusername"] = $v_username;
            $_SESSION["txtpassword"]= $v_password;
            header("Location: dashboard.php");
           //echo "dashboard";
        }else {
            header("Location:claveequivocada.php");
            //echo "clave equivocada";
        }
    }
      //en caso de que el usuario no se haya logueado - precione directamente sobre la URL inicial
    //ya hay un usuario logueado, asi que le pongo en pantalla
    if (isset($_SESSION["txtusername"])) {
        header("Location: dashboard.php");


    }

    ?>
    
    <div class="imagenes">
        <img src="imagenes/imagen.png" alt="Imagen de fondo"> 
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