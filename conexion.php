<?php

class Conexion{

    public static function Conectar()
    {
        define('servidor' , 'localhost');
        define('user' , 'root');
        define('password' , '');
        define('database' , 'datatables');

        $dsn = "mysql:host=".servidor.";dbname=".database.";charset=utf8";

        try {
            $conexion = new PDO($dsn, user, password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            die("La conexión tuvo el siguiente problema ". $e->getMessage());
        }
    
    }

}