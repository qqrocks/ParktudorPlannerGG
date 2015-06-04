<?php
class courses_db
{
public static function _construct(){}

public static function getClassesbyDept($dID)
{
    $db=Database::getDB();
    $query="SELECT * from course WHERE deptID=$dID ORDER BY courseID";
    $result=$db->query($query);
    $classes=array();
    foreach($result as $row)
    {
        $c= new course();
        $c->setId($row['courseID']);
        $c->setName($row['courseName']);
        $c->setCreds($row['creditID']);
        $c->setDept($row['deptID']);
        $c->setReq($row['required']);
        $c->setPer($row['periodID']);
        $c->setSem($row['semesters']);
        $classes[]=$c;
    }
    return $classes;
}
public static function getClass($classID)
{
    $db=Database::getDB();
    $query="SELECT * FROM course WHERE courseID=$classID";
    $result=$db->query($query);
    $row=$result->fetch();
    $c= new course();
    $c->setId($row['courseID']);
    $c->setName($row['courseName']);
    $c->setCreds($row['creditID']);
    $c->setDept($row['deptID']);
    $c->setReq($row['required']);
    $c->setPer($row['periodID']);
    $c->setSem($row['semesters']);
    return $c;


}
public static function add_class($class)
{
    $db=Database::getDB();
    $cID=$class->getID();
    $cName=$class->getName();
    $credID=$class->getCreds();
    $perID=$class->getPer();
    $deptID=$class->getDept();
    $required=$class->getReq();
    $semesters=$class->getSem();
    $query="INSERT into course(courseID, courseName, creditID, periodID, deptID, semesters, required) VALUES ($cID, $cName, $credID, $perID, $deptID, $semesters, $required)";
    $db->exec($query);
}
public static function del_class($c_ID)
{
    $db=database::getDB();
    $query="DELETE from course WHERE courseID= $c_ID";
    $db->exec($query);
}
    public static function changeName($courseID, $newName)
    {
        $db=Database::getDB();
        $query="UPDATE course SET courseName=$newName WHERE course=$courseID";
        $db->exec($query);
    }
    public static function changePeriod($courseID, $newPerID)
    {
        $db=Database::getDB();
        $query="UPDATE course SET periodID=$newPerID WHERE courseID=$courseID";
        $db->exec($query);
    }
    public static function changeCredits($courseID, $newCredID)
    {
        $db=Database::getDB();
        $query="UPDATE course SET creditID=$newCredID WHERE courseID=$courseID";
        $db->exec($query);
    }
    public static function changeReq($courseID, $status)
    {
        $db=Database::getDB();
        $query="UPDATE course SET required=$status WHERE courseID=$courseID";
        $db->exec($query);
    }
    public static function getUnusedClasses($stuId, $deptID)
    {
        $courses=course_selection_db::getCoursesByDept($stuId, $deptID);
        $options=courses_db::getClassesbyDept($deptID);
        $tbr=array();
        $ids=array();
        foreach($courses as $c)
        {
            $ids[]=$c->getId();
        }
        foreach($options as $o)
        {
        if(!in_array($o->getId(),$ids)||$deptID==6||$deptID==7)
            $tbr[]=$o;

        }

        return $tbr;
    }
}
?>
