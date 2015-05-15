<?php

function getAdvisorByGrade($grade_id)
{
    $db=Database::getDB();
    $query='SELECT advisorID, a_f_name, a_l_name FROM advisors
    INNER JOIN students.advisorID = advisors.advisorID;
    WHERE students.gradeID=$grade_id';
    $result=$db->query($query);
    $advisors = array();
    foreach($result as $row){
        $ad=new advisor();
        $ad->setId($row['advisorID']);
        $ad->setFirst($row['a_f_name']);
        $ad->setLast($row['a_l_name']);
        $advisors[]=$ad;

    }
}

function add_advisor($adID, $fname, $lname)
{
    global $db;
    $query='INSERT into advisors(advisorID, a_f_name, a_l_name) VALUES ($adID, $fname, $lname)';
    $db->exec($query);
}
function get_advisor($adID)
{
    $query='SELECT * advisors WHERE advisorID=$adID';
    $db->query($query);
}




