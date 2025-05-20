<?php

class Database{
    private static $pdo;

    public static function connect()
    {
        if(!self::$pdo){
            $dsn = 'mysql:host=localhost;dbname=ticket_app;charset=utf8';
            self::$pdo = new PDO($dsn, 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
            ]);
            }
            return self::$pdo;
    }
}

?>