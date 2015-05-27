<?php
class department
{
    private $name, $ID, $creds;
    public function _construct(){}

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setID($id)
    {
        $this->ID=$id;
    }
    public function setCred($cNum)
    {
        $this->creds=$cNum;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getID()
    {
        return $this->ID;
    }
    public function getCreds()
    {
        return $this->creds;
    }
}