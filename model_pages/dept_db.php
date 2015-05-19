<?php
class dept_db{
public static function getDpt($deptID)
{
    $db=Database::getDB();
    $query="SELECT * from department
            WHERE deptID=$deptID";
    $res=$db->query($query);
    $row=$res->fetch();
    $de=new department();
    $de->setName($row['name']);
    $de->setCred($row['requiredCreds']);
    $de->setID($row['deptID']);
    return $de;
}
public static function add_dept($dept)
{
    $db=Database::getDB();
    $deptID=$dept->getID();
    $dName=$dept->getName();
    $credreq=$dept->getCreds();
    $query="INSERT into department(deptID, name, requiredCreds) VALUES ($deptID, $dName, $credreq)";
    $db->exec($query);
}
public static function del_dept($dID)
{
    $db=Database::getDB();
    $query="DELETE from department WHERE deptID=$dID";
    $db->exec($query);
}
public static function changeReqCreds($dID, $newCreds)
{
    $db=Database::getDB();
    $query="UPDATE department SET requiredCreds=$newCreds WHERE deptID=$dID";
    $db->exec($query);
}
}