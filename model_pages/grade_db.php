<?php
function getAdvisorsbyGrade($gID)
{
    global $db;
    $query='SELECT a_f_name, a_l_name
    from advisors
     INNER JOIN students
     ON advisors.advisorID = students.advisorID
     WHERE students.gradeID=$gID';
    $db->query($query);
}
function add_grade($gID, $label)
{
    global $db;
    $query='INSERT into grade_level(gradeID, Name) VALUES ($gID, $label)';
    $db->exec($query);
}