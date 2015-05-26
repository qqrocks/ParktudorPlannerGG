<?php
require('/model_pages/advisor.php');
require('/model_pages/advisor_db.php');
require('/model_pages/course.php');
require('/model_pages/course_sel.php');
require('/model_pages/course_selection_db.php');
require('/model_pages/courses_db.php');
require('/model_pages/credit_db.php');
require('/model_pages/database.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_advisors';
}
 if($action=='list_advisors')
 {
     $g9=advisor_db::getAdvisorsByGrade(9);
     $g10=advisor_db::getAdvisorsByGrade(10);
     $g11=advisor_db::getAdvisorsByGrade(11);
     $g12=advisor_db::getAdvisorsByGrade(12);
     $maxLength=max(count($g9), count($g10), count($g11), count($g12));
     if($maxLength==count($g9))
     include('page1.php');
 }
