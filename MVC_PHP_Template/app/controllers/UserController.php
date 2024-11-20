<?php

class UserController {

    // Método para saludar
    public function saludar($nombre) {
        $user = new User($nombre, "Hola, soy $nombre desde el método SALUDAR del controlador USER.");
        $this->mostrarResultado($user);
    }

    // Método para despedirse
    public function despedirse($nombre) {
        $user = new User($nombre, "Soy $nombre, Adios desde el método DESPEDIRSE del controlador USER.");
        $this->mostrarResultado($user);
    }

    // Método para mostrar el resultado en JSON
    private function mostrarResultado($user) {
        // Serializar el objeto a JSON
        $user_json = json_encode($user, JSON_UNESCAPED_UNICODE);

        
        // Mostrar el resultado
        var_dump($user_json);
    }
}
?>

