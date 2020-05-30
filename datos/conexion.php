<?php

class Conexion {

    function __conectarBD() {
        $conexion = new PDO("mysql:host=localhost;dbname=login", "root", "");
        return $conexion;
    }

}

?>