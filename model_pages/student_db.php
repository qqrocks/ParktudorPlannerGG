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
        $stu->setgrade(($row['gradeID']));
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
        $stu->setGrade($row['gradeID']);
        return $stu;

    }
public static function add_student($stu){
    $db=Database::getDB();
    $stuID=$stu->getID();
    $fname=$stu->getFirst();
    $lname=$stu->getLast();
    $grade=$stu->getGrade();
    $aID=$stu->getAd();
    $query="INSERT INTO students(studentID, s_f_name, s_l_name, gradeID, advID) VALUES ($stuID, $fname, $lname, $grade, $aID)";
    $db->exec($query);
}
    public static function delete_stu($s_id)
    {
        $db=Database::getDB();
        $query="DELETE FROM students WHERE studentID='$s_id'";
        $db->exec($query);

    }
  public static function delByGrade($gID)
  {
      $db=Database::getDB();
      $query="DELETE FROM students WHERE gradeID='$gID'";
      $db->exec($query);
  }
    public static function upDateGrade($currGrade, $nextGrade)
    {
        $db=Database::getDB();
        $query="UPDATE students SET gradeID=$nextGrade WHERE gradeID=$currGrade";
        $db->exec($query);
    }
   public static function getNextID()
   {
       $db=Database::getDB();
       $query='SELECT studentID from students WHERE 1
                ORDER BY studentID desc';
       $row=$db->exec($query);
       $r= $row->fetch;
       return $r['studentID']+1;


   }
}