<?php
class Database{


private static $dsn='mysql:host=localhost;dbname=pt planner';
private static $username='mgs_user';
private static $password='pa55word';
private static $db;

private function _construct(){}
public static function getDB()
{
    if(!isset(self::$db))
    {
try{
    self::$db=new PDO(self::$dsn, self::$username, self::$password);
} catch(PDOException $e){
    exit();
}
    }
}
}
?>