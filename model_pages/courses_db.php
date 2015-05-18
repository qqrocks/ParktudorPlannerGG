<?php
class courses_db
{


public static function getClassesbyDept($dID)
{
    $db=Database::getDB();
    $query='SELECT * from courses WHERE departmentID=$dId';
    $result=$db->query($query);
    $classes=array();
    foreach($result as $row)
    {
        $c= new course();
        $c->setId($row['courseID']);
    }
}
public static function getClass($classID)
{
    global $db;
    $query='SELECT creditNum
    from credit
     INNER JOIN course
     ON course.creditID = credit.creditID
     WHERE course.courseID=$classID';
    $db->query($query);
}
function add_class($cID,$cName, $credID, $perID, $deptID, $required)
{
    global $db;
    $query='INSERT into courses(courseID, courseName, creditID, periodID, deptID, required) VALUES ($cID, $cName, $credID, $perID, $deptID, $required)';
    $db->exec($query);
}
}
?>
