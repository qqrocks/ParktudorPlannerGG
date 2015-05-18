<?php
class period_db
{
    public static function _construct()
    {}

    public static function getPers($perID)
    {
        $db=Database::getDB();
        $query="SELECT periodNum from period WHERE periodID='$perID'";
        $res=$db->query($query);
        return $res->fetch();
    }
    public static function addPer($pID, $num)
    {
        $db=Database::getDB();
        $query="INSERT into period (periodID, periodNum) VALUES ($pID, $num)";
        $db->exec($query);
    }
    public static function delPer($pID)
    {
        $db=Database::getDB();
        $query="DELETE from period WHERE periodID=$pID";
        $db->exec($query);
    }
    public static function changeNum($pID, $newNum)
    {
        $db=Database::getDB();
        $query="UPDATE period SET periodNum=$newNum WHERE periodID=$pID";
        $db->exec($query);
    }
}