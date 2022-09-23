<?php 

class Conexion {
    public function getConexion(){
        $host = "localhost";
        $db = "digitalizacion";
        $user = "root";
        $password = "";

        //Conexión a la base de datos utilizando PDO
        $db = new PDO("mysql:host=$host; dbname=$db;", $user, $password);

        return $db;
    }
}