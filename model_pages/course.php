<?php
class course{
    private $name, $id, $d_id, $periods, $credits, $req;

    public function _construct()
    {}
    public function setId($c_id)
    {
        $this->$id=$c_id;
    }

    public function setName($Name)
    {
        $this->$name=$Name;
    }
    public function setDept($de_id)
    {
        $this->$d_id=$de_id;
    }
    public function setPer($pers)
    {
        $this->$periods=$pers;
    }
    public function setCreds($cred)
    {
        $this->$credits=$cred;
    }
    public function setReq($required)
    {
        $this->$req=$required;
    }

    public function getId()
    {
        return $this->$id;
    }

    public function getName()
    {
        return $this->$name;
    }
    public function getDept()
    {
        return $this->$d_id;
    }
    public function getPer()
    {
        return $this->$periods;
    }
    public function getCreds()
    {
        return $this->$credits;
    }
    public function getReq()
    {
        return $this->$req;
    }

}