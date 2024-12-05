<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
  function vistaLogin(){
      if (!empty($mensaje)) {
          echo $mensaje;
      } else {

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo get_css('login.css') ?>">
</head>
<body> 
    <div class="imagenes">
        <img src="<?php echo get_img('imagen.png') ?>"  alt="Imagen de fondo">
        
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
    <script src="<?php echo get_js('validacionLogin.js') ?>"></script>
</body>
</html>
<?php

}}
?>