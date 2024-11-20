📘 Sistema de Ventas RENGIFO: Documentación Actualizada


¡Bienvenido a la documentación del Sistema de Ventas RENGIFO! Este proyecto fue desarrollado como parte de un curso de construcción de software para brindar una plataforma eficiente y profesional para la gestión de ventas. Aquí encontrarás todo lo necesario para entender, instalar y usar este sistema.

📂 Estructura del Proyecto


El proyecto está organizado en carpetas y archivos para facilitar el desarrollo y la escalabilidad.

1. controllers/
logout.php: 📤 Controla la salida del usuario del sistema cerrando la sesión y redirigiendo a la página de inicio de sesión.
2. css/
Archivos de estilo que definen la apariencia del sistema:

🎨 dashboard.css: Estilos aplicados al panel principal (barra lateral, encabezados y diseño general).
🗑️ eliminardatos.css: Estilos para la vista de eliminación de datos.
✏️ modificardatos.css: Estilos para la vista de modificación de datos.
📋 verdatos.css: Estilos para las tablas de datos.
📥 ingresardatos.css: Estilos para los formularios de ingreso de datos.
🌐 estilos.css: Estilos globales compartidos entre diferentes vistas.
3. etc/
config.php: ⚙️ Archivo de configuración que define:
Credenciales de la base de datos (host, usuario, contraseña, nombre).
Funciones globales como get_urlBase() para manejar rutas dinámicas.
4. img/
🖼️ imagen.png, logo.png, logo1.png: Imágenes utilizadas en el sistema (como logos para la barra lateral y encabezados).
5. js/
⚠️ Por ahora no se utiliza JavaScript en este sistema. Esta carpeta está preparada para futuras integraciones de interactividad, como validaciones de formularios o animaciones.

6. models/connect/
conexion.php: 🔗 Clase que maneja la conexión con la base de datos mediante PDO, asegurando seguridad y eficiencia al interactuar con los datos.
7. views/
Aquí están las vistas del sistema, cada una con una función específica:

🖥️ dashboard.php: Panel principal que contiene la barra lateral y muestra el contenido dinámico según la opción seleccionada.
✅ claveequivocada.php: Muestra un mensaje de error cuando las credenciales son incorrectas.
📊 verdatos.php: Vista que muestra los datos registrados en formato de tabla.
📥 ingresardatos.php: Formulario para agregar nuevos datos al sistema.
✏️ modificardatos.php: Vista para editar datos existentes.
🗑️ eliminardatos.php: Permite eliminar registros específicos.
8. test/
⚙️ Carpeta reservada para pruebas futuras. Aquí podrías incluir scripts para validar funcionalidades del sistema o experimentos.

🎮 Funcionalidades
🔐 Inicio de Sesión

Los usuarios deben autenticarse para acceder al sistema.

📊 Gestión de Ventas

Navega entre estas opciones desde el dashboard:

Ver Datos: Muestra una tabla con los registros actuales.
Ingresar Datos: Formulario para añadir nuevos datos al sistema.
Modificar Datos: Edita registros existentes.
Eliminar Datos: Borra datos innecesarios.
✨ Diseño

El sistema utiliza CSS3 para un diseño limpio y profesional:

🌈 Colores:

Barra lateral: Azul oscuro.
Encabezados: Azul brillante.
Fondos: Tonos grises suaves.

📱 Diseño Responsivo:

Compatible con dispositivos móviles, tablets y pantallas de escritorio.

🎨 Animaciones:

Transiciones suaves en botones y tablas.

📂 Organización del Código

El sistema sigue los principios de:
Clean Code: Código limpio y fácil de entender.
SOLID: Cada componente tiene una única responsabilidad.

📧 Contacto
¿Tienes dudas o sugerencias? ¡Contáctame!

Correo: juan.rengifofretel@unas.edu.pe
Espero que esta documentación te sea útil. Si necesitas más ayuda, ¡avísame!








