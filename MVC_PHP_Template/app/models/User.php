<!-- app/models/User.php -->
<?php
class User {
    public $nombre;
    public $texto;

    // Constructor
    public function __construct($nombre, $texto) {
        $this->nombre = $nombre;
        $this->texto = $texto;
    }
}
?>
