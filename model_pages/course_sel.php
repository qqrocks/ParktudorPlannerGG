<?php
class course_sel
{
    private $stu_ID, $courseID, $year;
    public function _construct()
    {

    }
    public function setStuID($sID)
    {
        $this->$stu_ID=$sID;
    }
    public function setCourseID($cID)
    {
        $this->$courseID=$cID;
    }
    public function setYear($yr)
    {
       $this->$year=$yr;
    }
    public function getStuID()
    {
        return $this->$stu_ID;
    }
    public function getCourseID()
    {
        return $this->$courseID;
    }
    public function getYear()
    {
        return $this->$year;
    }

}