<?php
class Conexion
{
   /* public static function StartUp()
    {
        $pdo = new PDO('mysql:host=sql108.epizy.com;dbname=epiz_31395361_consultorio;charset=utf8', 'epiz_31395361', 'ZbqUyGZKklnzeFU');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }*/


    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=consultorio;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>
