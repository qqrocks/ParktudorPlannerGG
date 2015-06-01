<?php
class Calculate
{
    public static function _construct()
{}
    public static function getFrees($semester, $stuID, $yr)
    {
        $courses=course_selection_db::getCoursesByStuYrOnly($stuID, $yr);
        $periods=0;
        $total=school_db::getItem("total_peri");
        foreach($courses as $c)
        {
            if($c->getSem()==$semester ||$c->getSem()==3)
            {
                $periods=$periods+period_db::getPers($c->getPer());
            }
        }
        return $total-$periods;
    }
    public static function calcCreds($stuID)
{
    $courses=course_selection_db::getCoursesStu($stuID);
    $creds=0;
    foreach($courses as $c)
    {
        if($c->getSem()!=3)
        {
            $creds=$creds+credit_db::getCred($c->getCreds());
        }
        else
        {
            $creds=$creds+credit_db::getCred($c->getCred())*2;
        }
    }
    return $creds;
}

    public static function calcCredsYr($stuID)
    {
        $courses=course_selection_db::getCoursesStu($stuID);
        $creds=0;
        foreach($courses as $c)
        {
            if($c->getSem()!=3)
            {
                $creds=$creds+credit_db::getCred($c->getCreds());
            }
            else
            {
                $creds=$creds+credit_db::getCred($c->getCred())*2;
            }
        }
        return $creds;
    }
    public static function calcPers($stuID, $yr, $sem)
    {
        $num=school_db::getItem("total_peri");
        $frees=Calculate::getFrees($sem, $stuID, $yr);
        return $num-$frees;

    }
    public static function willGrad($stuId, $deptID)
    {
        $courses=course_selection_db::getCoursesByDept($stuId, $deptID);
        $cIDs=array();
        foreach($courses as $c)
        {
            $cIDs[]=$c->getID();
        }
        $credits=0;
        foreach($courses as $course)
        {
            if($course->getSem()==1 || $course->getSem()==2 ||$course->getSem()==4)
            $credits=credit_db::getCred($course->getCreds());
            else
            $credits=credit_db::getCred($course->getCreds())*2;
        }
        if($credits>=(dept_db::getDpt($deptID)->getCreds()))
        {
            if($deptID==1){}
            else if($deptID==2){}

        }

    }
    private static function engGrad($courseIDs)
    {

    }
}