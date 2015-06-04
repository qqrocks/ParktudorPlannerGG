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
            $creds=$creds+credit_db::getCred($c->getCreds())*2;
        }
    }
    return $creds;
}

    public static function calcCredsYr($stuID, $yr)
    {
        $courses=course_selection_db::getCoursesByStuYrOnly($stuID, $yr);
        $creds=0;
        foreach($courses as $c)
        {
            if($c->getSem()!=3)
            {
                $creds=$creds+credit_db::getCred($c->getCreds());
            }
            else
            {
                $creds=$creds+credit_db::getCred($c->getCreds())*2;
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
            $credits=$credits+credit_db::getCred($course->getCreds());
            else
            $credits=$credits+credit_db::getCred($course->getCreds())*2;
        }
        if($credits>=(dept_db::getDpt($deptID)->getCreds()))
        {
            if($deptID==1){
                return Calculate::engGrad($cIDs);
            }
            else if($deptID==2){
                return Calculate::mathGrad($cIDs);
            }
            else if($deptID==3){
                $nCreds=0;
                foreach($courses as $course)
                {
                    if($course->getSem()==1 || $course->getSem()==2 ||$course->getSem()==4)
                    {

                        if($course->getID()!=3610&&$course->getID()!=3620&&$course->getID()!=3631&&$course->getID()!=3632&&$course->getID()!=3640&&$course->getID()!=3811&&$course->getID()!=3932&&$course->getID()!=3941)
                        $nCreds=$nCreds+credit_db::getCred($course->getCreds());
                    }
                    else
                    {
                        if($course->getID()!=3610&&$course->getID()!=3620&&$course->getID()!=3631&&$course->getID()!=3632&&$course->getID()!=3640&&$course->getID()!=3811&&$course->getID()!=3932&&$course->getID()!=3941)
                        $nCreds=$nCreds+credit_db::getCred($course->getCreds())*2;
                    }
                }


             if($nCreds>=(dept_db::getDpt($deptID)->getCreds()))
                    return Calculate::sciGrad($cIDs);
                else
                    return false;
            }
            else if($deptID==4)
            {
                return Calculate::histGrad($cIDs);
            }
            else if($deptID==6)
            {
                return Calculate::FAGrad($cIDs);
            }
            else if($deptID==7)
            {
                return Calculate::PEGrad($cIDs);
            }
            else if($deptID==5)
            {
                return Calculate::langGrad($cIDs);
            }
            else
                return false;

        }
        else
        {
         return false;
        }

    }
    public static function engGrad($courseIDs)
    {

        if(in_array(1410, $courseIDs)||in_array(1415, $courseIDs))
        {
            if(in_array(1420, $courseIDs)||in_array(1425, $courseIDs))
            {
                if(in_array(1430, $courseIDs)||in_array(1435, $courseIDs))
                {
                    if(in_array(1440, $courseIDs)||in_array(1445, $courseIDs))
                    {
                        return true;
                        exit;
                    }
                }
            }
        }
        return false;
    }
    public static function mathGrad($courseIDs)
    {
        if(count($courseIDs)==0)
            return false;
        else if(min($courseIDs)>=2530)
            return true;
        else if(min($courseIDs)>=2420)
        {
            if(in_array(2530, $courseIDs)||in_array(2630, $courseIDs)||in_array(2730, $courseIDs))
                return true;
        }
        else if(min($courseIDs)>=2410)
        {
            if(in_array(2420, $courseIDs))
            {
            if(in_array(2530, $courseIDs)||in_array(2630, $courseIDs)||in_array(2730, $courseIDs))
                return true;
            }
        }
        return false;
    }
    public static function sciGrad($courseIDs)
    {

        if(in_array(3410, $courseIDs))
        {
            if(in_array(3420, $courseIDs)||in_array(3430, $courseIDs)||in_array(3520, $courseIDs)||in_array(3530, $courseIDs))
                return true;
        }
        return false;
    }
    public static function histGrad($courseIDs)
    {
        if(in_array(4410, $courseIDs)&&in_array(4420, $courseIDs))
        {
            if(in_array(4430, $courseIDs)||in_array(4435, $courseIDs))
                return true;
        }
        return false;
    }
    public static function FAGrad($courseIDs)
    {
        if(in_array(7400, $courseIDs)|| in_array(7401, $courseIDs) ||in_array(7402, $courseIDs))
            return true;
        return false;
    }
    public static function PEGrad($courseIDs)
{
    if(in_array(8411, $courseIDs)||in_array(8412, $courseIDs)||in_array(8414, $courseIDs)||in_array(8413, $courseIDs))
        return true;
}
    public static function langGrad($courseIDs)
    {
        foreach($courseIDs as $id)
        {
            $a=array();
            $a[]=$id;
            $n=array_diff($courseIDs, $a);
            if($id<5500)
            {
                if(in_array(5410, $n)||in_array(5420, $n)||in_array(5430, $n)||in_array(5440, $n))
                    return true;
            }
            else if($id<5600)
            {
                if(in_array(5510, $n)||in_array(5520, $n)||in_array(5530, $n)||in_array(5540, $n)||in_array(5550, $n)||in_array(5560,$n))
                    return true;
            }
            else if($id<5800&&$id>5610)
            {
                if(in_array(5710, $n)||in_array(5720, $n)||in_array(5730, $n)||in_array(5740, $n))
                    return true;
            }
            else if($id<5900&&$id>5610)
            {
                if(in_array(5810, $n)||in_array(5820, $n)||in_array(5830, $n)||in_array(5840, $n)||in_array(5850, $n)||in_array(5860,$n))
                    return true;
            }
        }
        return false;
    }
    public static function grad($stuID)
    {
        if(Calculate::calcCreds($stuID)>=school_db::getItem("grad_creds"))
        {
            $depts=dept_db::getDpts();
            foreach($depts as $d)
            {
                if(!Calculate::willGrad($stuID, $d->getID()))
                    return false;
            }
            return true;
        }
        return false;
    }
}