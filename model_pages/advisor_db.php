<?php
require_once('database.php');



function getAdvisees($adID)
{
    global $db;
    $query='SELECT s_f_name, s_l_name FROM students WHERE advisorID=$adID';
    $db->query($query);
}

function add_advisor($adID, $fname, $lname)
{
    global $db;
    $query='INSERT into advisors(advisorID, a_f_name, a_l_name) VALUES ($adID, $fname, $lname)';
    $db->exec($query);
}




function add_credit($credID, $number)
{
    global $db;
    $query='INSERT into credit(creditID,creditNum) VALUES ($credID, $number)';
    $db->exec($query);
}

function add_period($perID, $num)
{
    global $db;
    $query='INSERT into period(periodID, periodNum) VALUES ($perID, $num)';
    $db->exec($query);
}