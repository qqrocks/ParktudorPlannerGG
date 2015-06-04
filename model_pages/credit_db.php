<?php
class credit_db
{
    public static function _contruct(){}

    public static function getCred($credID)
    {
        $db=Database::getDB();
        $query="SELECT creditNum from credit WHERE creditID='$credID'";
        $res=$db->query($query);
        $row= $res->fetch();
        return $row['creditNum'];
    }
    public static function newCred($creditID, $num)
    {
        $db=Database::getDB();
        $query="INSERT into credit (creditID, creditNum) VALUES ($creditID, $num)";
        $db->exec($query);
    }
    public static function delCred($crID)
    {
        $db= Database ::getDB();
        $query= "DELETE from credit WHERE creditID=$crID";
        $db->exec($query);
    }
    public static function changeNum($crID, $newNum)
    {
        $db=Database::getDB();
        $query="UPDATE credit SET creditNum=$newNum WHERE creditID=$crID";
        $db->exec($query);
    }


}