<?php
class student_db
{
    public static function _construct()
    {}
    public static function getItem($id)
    {
        $db=Database::getDB();
        $query="SELECT number from school WHERE type=$id";
        $res=$db->query($query);
        $row= $res->fetch();
        return $row['number'];
    }
    public static function addRow($id, $num)
{
    $db=Database::getDb();
    $query="INSERT into school(type, number) VALUES ($id, $num)";
    $db->exec($query);
}
    public static function delRow($id)
    {
        $db=Database::getDb();
        $query="DELETE from school WHERE type=$id";
        $db->exec($query);
    }
    public static function updateNum($id, $newNum)
    {
        $db=Database::getDB();
        $query="UPDATE school SET number=$newNum WHERE type=$id";
        $db->exec($query);
    }

}