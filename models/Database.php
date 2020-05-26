<?php
require_once "script_php/config.php";
abstract class ModelDatabase{
    private static $pdo;

    private static function setBdd($server = SERVER, $name = NAME, $user = USER, $passwd = PASSWD){
        self::$pdo = new PDO("mysql:host=" . $server . ";dbname=" . $name, $user, $passwd);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    public function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}

function DBConnect($server = SERVER, $name = NAME, $user = USER, $passwd = PASSWD)
{
    try {
        $pdo = new PDO("mysql:host=" . $server . ";dbname=" . $name, $user, $passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }
    return $pdo;
} 