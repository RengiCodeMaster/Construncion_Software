<?php
function mostrarFormularioIngreso($mensaje = '')
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Usuario</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="<?php echo get_js('animacionIngresar.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo get_css('ingresardatos.css'); ?>">
    </head>

    <body>
        <div class="loading-overlay" id="loadingOverlay">
            <div class="spinner"></div>
        </div>

        <div class="container">
            <h1><i class="fas fa-user-plus"></i> Registrar Usuario</h1>

            <?php if (!empty($mensaje)) : ?>
                <div class="message">
                    <?php echo $mensaje; ?>
                </div>
            <?php endif; ?>

            <form action="../controllers/controladorIngresarUsuario.php" method="POST" id="userForm">
                <label for="datusername"><i class="fas fa-user"></i> Usuario:</label>
                <input type="text" name="datusername" id="datusername" required>

                <label for="datpassword"><i class="fas fa-key"></i> Password:</label>
                <input type="password" name="datpassword" id="datpassword" required>

                <label for="datperfil"><i class="fas fa-id-badge"></i> Perfil:</label>
                <input type="text" name="datperfil" id="datperfil" required>

                <button type="submit"><i class="fas fa-save"></i> Registrar Usuario</button>
            </form>
        </div>

        <script>
            document.getElementById('userForm').addEventListener('submit', function(e) {
                const overlay = document.getElementById('loadingOverlay');
                overlay.style.display = 'flex'; 
            });
        </script>
    </body>

    </html>
<?php
}
?>
