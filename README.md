# Página de Inicio de Sesión con PHP y MySQL 🐘

![php (2)](https://github.com/Mub1522/Advanced-PHP-practices/assets/105318645/6daef348-e1e2-4bc9-a7d7-f688ef82133d)

¡Bienvenido a mi repositorio de la Página de Inicio de Sesión con PHP y MySQL! En este proyecto, he desarrollado una Página de Inicio de Sesión completamente funcional utilizando las tecnologías PHP 8 y MySQL 8. Además, he mejorado la experiencia del usuario implementando la librería SweetAlert2 para mostrar mensajes y alertas atractivas.

## Características Principales 🌟

- **Inicio de Sesión Seguro**: Los datos de inicio de sesión se almacenan en una base de datos MySQL 8. Se utiliza el cifrado de contraseñas proporcionado por PHP 8 para garantizar la seguridad de las credenciales de los usuarios.

- **Integración de SweetAlert2**: En lugar de mostrar las alertas tradicionales del navegador, se ha implementado SweetAlert2 para mostrar mensajes atractivos y personalizados cuando los usuarios ingresan credenciales incorrectas o inician sesión exitosamente.

- **Interfaz de Usuario Agradable**: Se ha diseñado una interfaz de usuario intuitiva y atractiva utilizando HTML, CSS y componentes de Bootstrap 5.3.1 para lograr una experiencia de inicio de sesión agradable.

- **Redirección de Usuarios**: Después de iniciar sesión exitosamente, los usuarios son redirigidos a una página de administrador (admin.php).

## Tecnologías Utilizadas 🛠️

- **PHP 8**: Utilizado para manejar la lógica de inicio de sesión, verificación de credenciales y comunicación con la base de datos MySQL.

- **MySQL 8**: Base de datos utilizada para almacenar y gestionar la información de los usuarios, incluyendo las credenciales de inicio de sesión.

- **SweetAlert2**: Librería JavaScript utilizada para mostrar alertas y mensajes personalizados con un aspecto atractivo y moderno.

- **HTML y CSS**: Utilizados para construir la estructura y el diseño de la página de inicio de sesión.

- **Bootstrap 5.3.1**: Framework CSS utilizado para estilizar y dar formato a la interfaz de usuario de manera eficiente.

## Cómo Usar Este Repositorio 🐸

1. Clona este repositorio en tu máquina local.

2. Asegúrate de tener un servidor web local (como XAMPP) configurado para ejecutar archivos PHP.

3. Importa la tabla de usuarios en tu base de datos proporcionada en el archivo `table-users.sql`, y ajusta los parametros de conexion en el archivo `config.php`.

4. Abre la página `index.php` en tu navegador para acceder a la Página de Inicio de Sesión.

¡Espero que encuentres útil este proyecto y que te ayude a comprender cómo construir una Página de Inicio de Sesión segura y atractiva utilizando PHP, MySQL y SweetAlert2! Siéntete libre de utilizar este código como referencia para tus propios proyectos.
