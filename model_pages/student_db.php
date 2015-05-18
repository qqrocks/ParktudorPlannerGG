<?php
class student_db
{
public static function _construct(){}
public static function getStuByAd($a_id)
{
    $db=Database::getDB();
    $query="SELECT s_f_name, s_l_name, studentID, gradeID FROM students
    WHERE advisorID='$a_id'";
    $result=$db->query($query);
    $students=array();
    foreach($result as $row)
    {
        $stu=new student();
        $stu->setId($row['studentID']);
        $stu->setFirst($row['s_f_name']);
        $stu->setAd($a_id);
        $stu->setLast($row['s_l_name']);
        $stu->setgrade(grade_db::getGrade($row['gradeID']));
        $students[]=$stu;
    }
    return $students;
}
    public static function get_student($sID)
    {
        $db=Database::getDB();
        $query="SELECT * FROM students WHERE studentID=$sID";
        $result=$db->query($query);
        $row=$result->fetch();
        $stu=new student();
        $stu->setId($row['studentID']);
        $stu->setFirst($row['s_f_name']);
        $stu->setLast($row['s_l_name']);
        $stu->setAd($row['advisorID']);
        $stu->setGrade(grade_db::getGrade($row[gradeID]));
        return $stu;

    }
public static function add_student($stu){
    $db=Database::getDB();
    $stuID=$stu->getID();
    $fname=$stu->getFirst();
    $lname=$stu->getLast();
    $grade=$stu->getGrade();
    $stuID=$stu->getGrade();
    $query="INSERT INTO students(studentID, s_f_name, s_l_name, gradeID, studentID) VALUES ($stuID, $fname, $lname, $grade, $stuID)";
    $db->exec($query);
}
    public static function delete_stu($s_id)
    {
        $db=Database::getDB();
        $query="DELETE FROM students WHERE studentID='$s_id'";
        $db->exec($query);

    }
}