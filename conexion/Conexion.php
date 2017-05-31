<?php

class Conexion {

    public static function conectarBd() {
        try {
            $conectar = new PDO('mysql:host=localhost; dbname=helirepbd', 'root', '');
            $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conectar->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            die('Error' . $e->getMessage());
        }
        return $conectar;
        
    }

}

?>