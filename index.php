<?php
require('/model_pages/advisor.php');
require('/model_pages/advisor_db.php');
require('/model_pages/course.php');
require('/model_pages/course_sel.php');
require('/model_pages/course_selection_db.php');
require('/model_pages/courses_db.php');
require('/model_pages/credit_db.php');
require('/model_pages/database.php');
require('/model_pages/grade_db.php');
require('/model_pages/student_db.php');
require('/model_pages/student.php');

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'list_advisors';
}
 if($action=='list_advisors')
 {
     $g9=advisor_db::getAdvisorsByGrade(9);
     $g10=advisor_db::getAdvisorsByGrade(10);
     $g11=advisor_db::getAdvisorsByGrade(11);
     $g12=advisor_db::getAdvisorsByGrade(12);
     $grades=grade_db::getGrades();

     include('page1.php');
 }
else if($action='get_advisory'&&isset($_GET['ad_id']) )
{

    $advisor=$_GET['ad_id'];
    $students=student_db::getStuByAd($advisor);
    header("Location: page2.php");
}
