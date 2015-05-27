<?php
class student{
    private $f_name, $l_name, $id, $adv, $grade;

    public function _construct()
    {}
    public function setId($s_id)
    {
        $this->id=$s_id;
    }
    public function setFirst($fName)
    {
        $this->f_name=$fName;
    }
    public function setLast($lName)
    {
        $this->l_name=$lName;
    }
    public function setAd($a_id)
    {
        $this->adv=$a_id;
    }
    public function setGrade($gr)
    {
        $this->grade=$gr;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getLast()
    {
        return $this->l_name;
    }
    public function getFirst()
{
    return $this->f_name;
}
    public function getAd()
    {
        return $this->adv;
    }
    public function getGrade()
    {
        return $this->grade;
    }
}