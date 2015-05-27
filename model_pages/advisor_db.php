<?php
class advisor_db{
public static function _construct(){}
public static function getAdvisorsByGrade($grade_id)
{
    $db=Database::getDB();
    $query="SELECT * FROM advisors INNER JOIN students ON students.advisorID = advisors.advisorID WHERE students.gradeID=$grade_id";
    $result=$db->query($query);
    $advisors = array();
    foreach($result as $row){
        $ad=new advisor();
        $ad->setId($row['advisorID']);
        $ad->setFirst($row['a_f_name']);
        $ad->setLast($row['a_l_name']);
        $advisors[]=$ad;

    }
    return $advisors;
}

public static function add_advisor($advisor)
{
    $db=Database::getDB();
    $fn=$advisor->getFirst();
    $ln=$advisor->getLast();
    $id=$advisor->getID();

    $query="INSERT into advisors(advisorID, a_f_name, a_l_name) VALUES ('$id', '$fn', '$ln')";
    $db->exec($query);
}
public static function delete_ad($ad_id)
{
    $db=Datatbase::getDB();
    $query="DELETE FROM advisors WHERE advisorID=$ad_id";
    $db->exec($query);

}
public static function get_advisor($adID)
{
    $db=Database::getDB();
    $query="SELECT * FROM advisors WHERE advisorID= $adID";
    $result=$db->query($query);
    $row=$result->fetch();
    $adv=new advisor();
    $adv->setId($row['advisorID']);
    $adv->setFirst($row['a_f_name']);
    $adv->setLast($row['a_l_name']);
    return $adv;

}
}




