# 📘 Sistema de Ventas RENGIFO: Documentación Actualizada

¡Bienvenido a la documentación del Sistema de Ventas RENGIFO! Este proyecto fue desarrollado como parte de un curso de construcción de software para brindar una plataforma eficiente y profesional para la gestión de ventas. Aquí encontrarás todo lo necesario para entender, instalar y usar este sistema.

---

## 📂 Estructura del Proyecto

El proyecto está organizado en carpetas y archivos para facilitar el desarrollo y la escalabilidad.

### 1. **controllers/**
- **`logout.php`**: 📤 Controla la salida del usuario del sistema cerrando la sesión y redirigiendo a la página de inicio de sesión.
- **`controladorIngresarUsuario.php`**: 📝 Maneja el registro de nuevos usuarios, validando y almacenando sus datos en la base de datos.
- **`controladorUsuarios.php`**: 👥 Gestiona la interacción de los usuarios con la base de datos, como listar, editar y eliminar usuarios.
- **`controladorEliminarUsuario.php`**: 🚮 Permite eliminar un usuario específico validando el nombre ingresado y actualizando la base de datos.
- **`controladorModificarUsuario.php`**: ✏️ Permite modificar datos de un usuario, como nombre, contraseña o perfil, gestionando vistas para búsqueda y edición.
- **`controladorLogin.php`**: 🔑 Maneja el inicio de sesión validando credenciales y estableciendo la sesión para el usuario.
- **`controladorDashboard.php`**: 📊 Redirige al panel principal del sistema tras un inicio de sesión exitoso, mostrando estadísticas y accesos rápidos.
- **`controladorBuscarUsuario.php`**: 🔍 Realiza búsquedas de usuarios en la base de datos basándose en criterios como nombre o ID.



---

### 2. **css/**
Archivos de estilo que definen la apariencia del sistema:

- **🎨 `dashboard.css`**: Estilos aplicados al panel principal (barra lateral, encabezados y diseño general).
- **🗑️ `eliminardatos.css`**: Estilos para la vista de eliminación de datos.
- **✏️ `modificardatos.css`**: Estilos para la vista de modificación de datos.
- **📋 `verdatos.css`**: Estilos para las tablas de datos.
- **📥 `ingresardatos.css`**: Estilos para los formularios de ingreso de datos.
- **🌐 `login.css`**: Estilo del login.

---

### 3. **etc/**
- **`config.php`**: ⚙️ Archivo de configuración que define:
  - Credenciales de la base de datos (host, usuario, contraseña, nombre).
  - Funciones globales como `get_urlBase()` para manejar rutas dinámicas.

---

### 4. **img/**
Imágenes utilizadas en el sistema:

- **🖼️ `imagen.png`, `logo.png`, `logo1.png`**: Logos y recursos visuales para la barra lateral y encabezados.

---

### 5. **js/**
Archivos JavaScript para animaciones e interactividad:

- **⚡ `animacionIngresar.js`**: Maneja la animación de carga al enviar formularios.
- **📊 `dashboard.js`**: Controles interactivos en el panel principal.

---

### 6. **models/connect/**
- **🔗 `conexion.php`**: Clase que maneja la conexión con la base de datos mediante PDO, asegurando seguridad y eficiencia al interactuar con los datos.
- **📄 `modelousuario.php`**: Modelos para operaciones CRUD relacionadas con los usuarios.

---

### 7. **views/**
Aquí están las vistas del sistema, cada una con una función específica:

- **✅ `claveequivocada.php`**: Muestra un mensaje de error cuando las credenciales son incorrectas.
- **🖥️ `vistadashboard.php`**: Panel principal que contiene la barra lateral y muestra el contenido dinámico según la opción seleccionada.
- **🗑️ `vistaeliminarUsuario.php`**: Permite eliminar un usuario específico, validando el nombre ingresado.
- **📥 `vistaingresarUsuario.php`**: Formulario para agregar nuevos usuarios al sistema.
- **🔑 `vistalogin.php`**: Formulario de inicio de sesión para que los usuarios accedan al sistema.
- **✏️ `vistamodificarUsuario.php`**: Vista para editar datos de usuarios existentes, como nombre o contraseña.
- **📊 `vistaUsuario.php`**: Vista que muestra la lista de usuarios registrados y permite su gestión.

---

### 8. **test/**
⚙️ Carpeta reservada para pruebas futuras. Aquí podrías incluir scripts para validar funcionalidades del sistema o experimentos.

---

## 🎮 Funcionalidades

### 🔐 **Inicio de Sesión**
- Los usuarios deben autenticarse para acceder al sistema.

### 📊 **Gestión de Ventas**
- **Ver Datos**: Muestra una tabla con los registros actuales.
- **Ingresar Datos**: Formulario para añadir nuevos datos al sistema.
- **Modificar Datos**: Edita registros existentes.
- **Eliminar Datos**: Borra datos innecesarios.

---

## ✨ Diseño

El sistema utiliza **CSS3** para un diseño limpio y profesional:

### 🌈 **Colores**
- Barra lateral: Azul oscuro.
- Encabezados: Azul brillante.
- Fondos: Tonos grises suaves.

### 📱 **Diseño Responsivo**
- Compatible con dispositivos móviles, tablets y pantallas de escritorio.

### 🎨 **Animaciones**
- Transiciones suaves en botones y tablas.
- Animación de carga al enviar formularios.

---

## 🚀 Instalación

### Requisitos:
- **Servidor local** (Laragon, XAMPP, WAMP).
- **PHP 7.4+**.
- **Base de datos MySQL**.

### Pasos:
1. Clona el repositorio:
   ```bash
   git clone https://github.com/RengiCodeMaster/Construncion_Software.git

2. Configura la base de datos en el archivo etc/config.php:
   
define('DB_HOST', 'localhost');
define('DB_NAME', 'nombre_base_datos');
define('DB_USER', 'root');
define('DB_PASS', '');

3. Importa el archivo SQL con la estructura de la base de datos (si está disponible).
4. Accede al sistema desde tu navegador: http://localhost/Construncion_Software/

📂 Organización del Código
El sistema sigue los principios de:

Clean Code: Código limpio y fácil de entender.
SOLID: Cada componente tiene una única responsabilidad

📧 Contacto
¿Tienes dudas o sugerencias? ¡Contáctame!

Correo: juan.rengifofretel@unas.edu.pe
GitHub: RengiCodeMaster

