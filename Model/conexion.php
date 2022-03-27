<?php
class Conexion
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=consultorio;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>
