<?php
//require('/model_pages/advisor.php');
//require('/model_pages/advisor_db.php');
//require('/model_pages/course.php');
//require('/model_pages/course_sel.php');
//require('/model_pages/course_selection_db.php');
//require('/model_pages/courses_db.php');
//require('/model_pages/credit_db.php');
//require('/model_pages/database.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_advisors';
