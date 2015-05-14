<?php
function getClassCreds($classID)
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
