<?php
function getCourses($stuID)
{
    global $db;
    $query='SELECT `courseID` FROM `course selection` WHERE `studentID`=1';
    $db->query($query);
}
function add_courseSel($stuID, $yr, $courseID)
{
    global $db;
    $query='INSERT into `course selection`(studentID, year_planned, courseID) VALUES ($stuID, $yr, $courseID)';
    $db->exec($query);
}