<?php

class Conexion
{

    public static function cadena_conexion()
    {

        $pdo = new PDO('mysql:host=localhost;dbname= emparedados;charset=utf8', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
