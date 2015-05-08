<?php
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
}