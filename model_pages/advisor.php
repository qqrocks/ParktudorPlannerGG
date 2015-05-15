<?php
class advisor{
private $f_name, $l_name, $id;

    public function _construct()
    {}
    public function setId($a_id)
    {
        $this->$id=$a_id;
    }
    public function setFirst($fName)
    {
        $this->$f_name=$fName;
    }
    public function setLast($lName)
    {
        $this->$l_name=$lName;
    }
    public function getId()
    {
         return $this->$id;
    }
    public function getLast()
    {
        return $this->$l_name;
    }
    public function getFirst()
    {
        return $this->$l_name;
    }
}