<?php

// Incluir archivos necesarios
require_once('../app/controllers/UserController.php');
require_once('../app/models/User.php');

// Obtener el nombre desde el formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$accion = isset($_POST['accion']) ? $_POST['accion'] : null;

// Si se ha recibido un nombre, procesar la solicitud
if ($nombre && $accion) {
    $userController = new UserController();
    if ($accion == 'saludar') {
        $userController->saludar($nombre);
    } elseif ($accion == 'despedirse') {
        $userController->despedirse($nombre);
    }
} else {
    // Si no se ha recibido un nombre o acción, mostrar el formulario
    include('../app/views/form.php');
}
?>



