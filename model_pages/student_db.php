<?php
function add_student($stuID, $fname, $lanme, $grade, $adID){
    global $db;
    $query='INSERT INTO students(studentID, s_f_name, s_l_name, gradeID, advisorID) VALUES ($stuID, $fname, $lname, $grade, $adID)';
    $db->exec($query);
}