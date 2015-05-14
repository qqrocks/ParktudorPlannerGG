<?php
function getReqCred($deptID)
{
    global $db;
    $query='SELECT RequiredCreds from department
            WHERE deptID=$deptID';
    $db->query($query);
}
function add_dept($deptID, $dName, $credreq)
{
    global $db;
    $query='INSERT into department(deptID, name, requiredCreds) VALUES ($deptID, $dName, $credreq)';
    $db->exec($query);
}