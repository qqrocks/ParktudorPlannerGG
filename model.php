<?php
require_once('database.php');

function getAdvisorsbyGrade($gID)
{
    global $db;
    $query='SELECT from a_f_name, a_l_name
    from advisors
     INNER JOIN students
     ON advisors.advisorID = studente.advisorID
     WHERE ';
    $db->query($query);
}
function getCourses($stuID)
{
    global $db;
    $query='SELECT `courseID` FROM `course selection` WHERE `studentID`=1';
    $db->query($query);
}
function getAdvisees($adID)
{
    global $db;
    $query='SELECT s_f_name, s_l_name FROM students WHERE advisorID=$adID';
    $db->query($query);
}
function add_student($stuID, $fname, $lanme, $grade, $adID){
    global $db;
    $query='INSERT INTO students(studentID, s_f_name, s_l_name, gradeID, advisorID) VALUES ($stuID, $fname, $lname, $grade, $adID)';
    $db->exec($query);
}
function add_advisor($adID, $fname, $lname)
{
    global $db;
    $query='INSERT into advisors(advisorID, a_f_name, a_l_name) VALUES ($adID, $fname, $lname)';
    $db->exec($query);
}

function add_class($cID,$cName, $credID, $perID, $deptID, $required)
{
    global $db;
    $query='INSERT into courses(courseID, courseName, creditID, periodID, deptID, required) VALUES ($cID, $cName, $credID, $perID, $deptID, $required)';
    $db->exec($query);
}
function add_dept($deptID, $dName, $credreq)
{
    global $db;
    $query='INSERT into department(deptID, name, requiredCreds) VALUES ($deptID, $dName, $credreq)';
    $db->exec($query);
}
function add_courseSel($stuID, $yr, $courseID)
{
    global $db;
    $query='INSERT into `course selection`(studentID, year_planned, courseID) VALUES ($stuID, $yr, $courseID)';
    $db->exec($query);
}
function add_credit($credID, $number)
{
    global $db;
    $query='INSERT into credit(creditID,creditNum) VALUES ($credID, $number)';
    $db->exec($query);
}
function add_grade($gID, $label)
{
    global $db;
    $query='INSERT into grade_level(gradeID, Name) VALUES ($gID, $label)';
    $db->exec($query);
}
function add_period($perID, $num)
{
    global $db;
    $query='INSERT into period(periodID, periodNum) VALUES ($perID, $num)';
    $db->exec($query);
}