<?php

class Conexion extends mysqli{
    
    public function __construct() {
        parent::__construct('localhost','root','','helirepbd');
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die('Error al conectar') : $x = 'Conectado';
        unset($x);
    }
    
    public function recorrer($y){
        return mysqli_fetch_array($y);
    }
    
    public function rows($y){
        return mysqli_num_rows($y);
    }

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