<?php
class Database{


private static $dsn='mysql:host=localhost;dbname=pt planner';
private static $username='mgs_user';
private static $password='pa55word';
private static $db;

public function _construct(){}
public static function getDB()
{
    if(!isset(self::$db))
    {
try{
    self::$db=new PDO(self::$dsn, self::$username, self::$password);
    return self::$db;
} catch(PDOException $e){
    exit();
}
    }
    else{
        return self::$db;
    }
}
}
?>