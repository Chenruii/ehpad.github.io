<?php

class Database
{
    private static $dbHost = 'localhost';
    private static $dbName = 'blogehpad';
    private static $dbUsername = 'root';
    private static $dbPassword = 'root';

    private static $conn = null;

    public function __construct()
    {
        die('Fonction Init non autorisée');
    }

    public static function connect()
    {
        if (null == self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbPassword);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function disconnect()
    {
        self::$conn = null;
    }
}

?>