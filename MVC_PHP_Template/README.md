# MVC_PHP_Template

Esta es una plantilla base para proyectos en PHP utilizando el patrón Modelo-Vista-Controlador (MVC). 
La estructura está diseñada para facilitar el desarrollo modular, escalable y organizado.

## Estructura de Carpetas

app/controllers: Contendrá archivos PHP que manejan las acciones de las solicitudes (por ejemplo, UserController.php).
app/models: Representará entidades de datos como User.php o Product.php.
app/views: Archivos HTML o PHP para mostrar contenido al usuario.
app/core: Contendrá clases como un Router.php para gestionar rutas y un BaseController.php como controlador padre.
public: Incluye index.php como punto de entrada y recursos públicos (CSS, JS).
config: Configuraciones como las de base de datos en config.php.
- **vendor**: Dependencias instaladas mediante Composer.
- **logs**: Registro de eventos y errores.

## Configuración
- Instalar dependencias con `composer install`.
