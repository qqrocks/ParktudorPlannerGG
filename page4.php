<html >
<head>

    <title>The Park Tudor Planner</title>


    <link rel="stylesheet" type="text/css" href="page4.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico">


</head>

<body >
<center><a href="?action=home"><img src="logo.png" style="width: 222px; height: 169px" ></a></center>
<center><div id="logo" >

        <div class="heady"><p><?php echo $grade.' Year'?></p></div>
        <div class="specil">
        <table class="tabel">
            <tr>
                <td class="special">
                    Total Credits Earned:
                </td>
                <td class="special">
                    <?php echo Calculate::calcCreds($id)?>
                </td>
            </tr>
            <tr>
                <td class="special">
                    Credits Earned This Year:
                </td>
                <td class="special">
                    <?php echo Calculate::calcCredsYr($id, $curr);?>
                </td>
            </tr>
            <tr>
                <td class="special">
                    Free Periods:
                </td>
                <td class="special">
                    <?php echo 'semester 1: '.Calculate::getFrees(1, $id, $curr).'/ semester 2: '.Calculate::getFrees(2, $id, $curr); ?>
                </td>
            </tr>
            <tr>
                <td class="special">
                    Periods planned:
                </td>
                <td class="special">
                    <?php echo 'semester 1: '.Calculate::calcPers($id, $curr, 1).'/ semester 2: '.Calculate::calcPers($id, $curr, 2); ?>
                </td>
            </tr>

        </table>
        <table class="tabeli">
            <tr>
                <?php for($i=0; $i<4; $i++){?>
                <td class="tabel2">
                    <?php echo $depts[$i]->getName();?>
                </td>
                <?php }?>

            </tr>
            <tr>
               <?php for($i=0; $i<4; $i++) {?>
                <td class="tabel2">
                    <form id="<?php echo 'myForm'.$i;?>" method="post" action="index.php">
                        <input type="hidden" name="action" value="add_class">
                        <input type="hidden" name="stuID" value="<?php echo $id;?>">
                        <input type="hidden" name="grade" value="<?php echo $curr;?>">

                        <select name="courses" class="qq" onchange="change(<?php echo $i;?>)">
                    <?php $options=courses_db::getUnusedClasses($id, $depts[$i]->getID());
                       foreach($options as $o){?>
                        <option value="<?php echo $o->getID();?>"><?php echo $o->getName()?></option>
                       <?php }?>
                        <option value="" selected="selected"></option>
                      </select>
                        </form>
                    </td>

               <?php } ?>


            </tr>

            <?php
            $sels=array();
            for($z=0; $z<4; $z++)
            {
                $sels[]=course_selection_db::getCoursesByStuYr($id, $curr, $depts[$z]->getID());
            }
            $max=0;
            foreach($sels as $sel)
            {
                $max=max($max, count($sel));
            }
            $index=0;
            while($index<$max)
            {?>
                <tr>
                <?php foreach($sels as $s)
                {
                    if(count($s)>$index)
                    {
                        ?><td class="tabel2">
                        <?php echo $s[$index]->getName()?>
                        <form method="post" action="index.php">
                        <input type="hidden" name="stuID" value="<?php echo $id;?>">
                        <input type="hidden" name="courseID" value="<?php echo $s[$index]->getID();?>">
                        <input type="hidden" name="action" value="del_sel">
                        <input type="hidden" name="yr" value="<?php echo $curr?>">

                        <input type="image" src= "Delete button.png" alt="some_text" class="pert">
                    </form></td>
                    <?php
                    }
                    else{
                        ?><td class="tabel2"></td><?php
                    }
                }?>
                </tr>

            <?php $index++;
            }
            ?>


        </table>
        <table class="tabeli">
            <tr>
                <?php for($x=4; $x<count($depts); $x++){?>
                <td class="tabel2">
                    <?php echo $depts[$x]->getName();?>
                </td>
                <?php }?>

            </tr>
            <tr>
                <?php for($i=4; $i<count($depts); $i++) {?>
                    <td class="tabel2">
                        <form id="<?php echo 'myForm'.$i;?>" method="post" action="index.php">
                        <input type="hidden" name="action" value="add_class">
                        <input type="hidden" name="stuID" value="<?php echo $id;?>">
                        <input type="hidden" name="grade" value="<?php echo $curr;?>">

                        <select name="courses" class="qq" onchange="change(<?php echo $i;?>)">
                            <?php $options=courses_db::getUnusedClasses($id, $depts[$i]->getID());
                            foreach($options as $o){?>
                                <option value="<?php echo $o->getID();?>"><?php echo $o->getName()?></option><?php }?>
                            <option value="" selected="selected"></option>
                        </select>
                            </form>
                    </td>
                <?php } ?>


            </tr>
            <script>
                function change(id)
                {
                    document.getElementById("myForm"+id).submit();
                }
            </script>
            <?php
            $sels=array();
            for($z=4; $z<count($depts); $z++)
            {
                $sels[]=course_selection_db::getCoursesByStuYr($id, $curr, $depts[$z]->getID());
            }
            $max=0;
            foreach($sels as $sel)
            {
                $max=max($max, count($sel));
            }
            $index=0;
            while($index<$max)
            {?>
                <tr>
                    <?php foreach($sels as $s)
                    {
                        if(count($s)>$index)
                        {
                            ?><td class="tabel2"><?php echo $s[$index]->getName()?>
                            <form method="post" action="index.php">
                            <input type="hidden" name="stuID" value="<?php echo $id;?>">
                            <input type="hidden" name="courseID" value="<?php echo $s[$index]->getID();?>">
                            <input type="hidden" name="action" value="del_sel">
                            <input type="hidden" name="yr" value="<?php echo $curr?>">

                            <input type="image" src= "Delete button.png" alt="some_text" class="pert">
                            </form>
                            </td><?php
                        }
                        else{
                            ?><td class="tabel2"></td><?php
                        }
                    }?>
                </tr>

                <?php $index++;
            }
            ?>



        </table>

        <?php if($curr==9) {?>
            <a href="?action=get_student&stuID=<?php echo $id?>" ><img class="lefty" src="fwd.png" ></a>
        <?php }
        else if($curr==10) {?>
            <a href="?action=edit_stu&stuID=<?php echo $id?>" ><img class="lefty" src="fwd.png" ></a>
        <?php }
        else if($curr==11) {?>
            <a href="?action=grade10&stuID=<?php echo $id?>" ><img class="lefty" src="fwd.png" ></a>
        <?php }
        else if($curr==12) {?>
            <a href="?action=grade11&stuID=<?php echo $id?>" ><img class="lefty" src="fwd.png" ></a>
        <?php } ?>


        <?php if(Calculate::getFrees(1, $id, $curr)<0 || Calculate::getFrees(2, $id, $curr)<0)
            echo "You are over-booked. You cannot move on.";
        else if($curr==9) {?>
        <a href="?action=grade10&stuID=<?php echo $id?>" ><img class="righty" src="fwd.png" ></a>
        <?php }
        else if($curr==10) {?>
        <a href="?action=grade11&stuID=<?php echo $id?>" ><img class="righty" src="fwd.png" ></a>
        <?php }
        else if($curr==11) {?>
        <a href="?action=grade12&stuID=<?php echo $id?>" ><img class="righty" src="fwd.png" ></a>
        <?php }
        else if($curr==12) {?>
        <a href="?action=get_student&stuID=<?php echo $id?>" ><img class="righty" src="fwd.png" ></a>
        <?php } ?>


    </div></div>
</center>
</body>
</html>