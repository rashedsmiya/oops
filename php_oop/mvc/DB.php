<?php 
include "config.php";
class DB{
    private static $pdo;
    public static function connection(){
        if(!self(self::$pdo)){
            try{
                self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "Connection Error: " . $e->getMessage();
            }
        }
        return self::$pdo;
    }

    public static function prepare($sql){
        return self::connection()->prepare($sql);
    }
}
