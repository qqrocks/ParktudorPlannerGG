<?php
class grade_db{
public static function _construct()
{
}
public static function getGrade($gID)
{
    $db=Database::getDB();
    $query='SELECT Name FROM grade_level WHERE gradeID=$gid';
    $result=$db->query($query);
    $row=$result->fetch();
    return $row['Name'];
}
public static function add_grade($gID, $label)
{
    $db=Database::getDB();
    $query="INSERT into grade_level(gradeID, Name) VALUES ($gID, $label)";
    $db->exec($query);
}
public static function changeName($gID, $newName)
{
    $db=Database::getDB();
    $query="UPDATE grade_level SET Name=$newName WHERE gradeID=$gID";
    $db->exec($query);
}
}