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
require('/model_pages/dept_db.php');
require('/model_pages/department.php');

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
     $grade=grade_db::getGrades();
     $grades=array();
     foreach($grade as $g)
     {
         $grades[]=grade_db::getGrade($g);
     }

     include 'page1.php';
 }

else if($action=='get_advisory'&&isset($_GET['ad_id']) )
{

    $advisorID=$_GET['ad_id'];
    $students=student_db::getStuByAd($advisorID);
    $advisor=advisor_db::get_advisor($advisorID);
    $fName=$advisor->getFirst();
    $lName=$advisor->getLast();
    include_once 'page2.php';
}

else if($action=='home')
{
    header("Location:index.php?action=list_advisors");
}
else if($action=='add_student')
{
    $first=$_POST['f_name'];
    $last=$_POST['l_name'];
    $grade=intval($_POST['grade']);
    $advisorID=$_POST['ad_id'];
    $ID=student_db::getNextID();
    $s=new student;
    $s->setId($ID);
    $s->setFirst($first);
    $s->setLast($last);
    $s->setAd($advisorID);
    $s->setGrade($grade);
    student_db::add_student($s);
    $adID=urlencode($advisorID);

    header("Location: index.php?action=get_advisory&ad_id=$adID");
}
else if($action=='get_student')
{
    $id=$_GET['stuID'];


    $depts=dept_db::getDpts();
    $grade1=grade_db::getGrades();
    $grades=array();
    foreach($grade1 as $g)
    {
        $grades[]=grade_db::getGrade($g);
    }
    $name=student_db::get_student($id)->getFirst().' '.student_db::get_student($id)->getLast();
    include_once "page3.php";

}
