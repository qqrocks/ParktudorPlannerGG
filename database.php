<?php
$dsn='mysql:host=localhost; dbname=pt planner';
$username='mgs_user';
$password='pa55word';
try{
    $db=new PDO($dsn, $username, $password);
} catch(PDOException $e){
    exit();
}