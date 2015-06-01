<?php
class course_selection_db
{
public static function getCoursesByStuYr($stuID, $year, $deptID)
{
    $db=Database::getDB();
    $query="SELECT * FROM `course_selection` INNER JOIN course ON course.courseID=course_selection.courseID WHERE course.deptID=$deptID AND course_selection.studentID=$stuID AND course_selection.year_planned=$year";
    $res=$db->query($query);
    $stuYr=array();
    foreach($res as $row)
    {
        $cs=new course_sel();
        $cs->setCourseID($row['courseID']);
        $cs->setYear($row['year_planned']);
        $cs->setStuID($row['studentID']);
        $stuYr[]=$cs;
    }
    $courses=array();
    foreach($stuYr as $course)
    {
        $courses[]=courses_db::getClass($course->getCourseID());
    }
    return $courses;

}
public static function getSel($stuID, $courseID)
{
    $db=Database::getDB();
    $query='SELECT * FROM `course selection` WHERE studentID=$stuID AND courseID=$courseID';
    $res=$db->query($query);
    $row=$res->fetch();
        $cs=new course_sel();
        $cs->setCourseID($row['courseID']);
        $cs->setYear($row['year_planned']);
        $cs->setStuID($row['studentID']);
    return $cs;
}
public static function add_courseSel($cs)
{
    $db=Database::getDB();

        $cID=$cs->getCourseID();
        $yr=$cs->getYear();
        $sID=$cs->getStuID();
    $query="INSERT INTO `course selection` (studentID, year_planned, courseID) VALUES ($sID, $yr, $cID)";
    $db->exec($query);
}
public static function rem_courseSEL($stuID, $courseID)
    {
        $db=database::getDB();
        $query="DELETE from `course selection` WHERE studentID=$stuID AND courseID=$courseID";
        $db->exec($query);
    }
}