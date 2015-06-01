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
        <table class="tabel">
            <tr>
                <td class="special">
                    Total Credits Earned:
                </td>
                <td class="special">
                    marget php
                </td>
            </tr>
            <tr>
                <td class="special">
                    Credits Earned This Year:
                </td>
                <td class="special">
                    marget php
                </td>
            </tr>
            <tr>
                <td class="special">
                    Free Periods:
                </td>
                <td class="special">
                    <?php echo 'semester 1- '.Calculate::getFrees(1, $id, $curr).'/ semester 2- '.Calculate::getFrees(2, $id, $curr); ?>
                </td>
            </tr>
            <tr>
                <td class="special">
                    Periods planned:
                </td>
                <td class="special">
                    <?php echo 'semester 1- '.Calculate::calcPers($id, $curr, 1).'/ semester 2- '.Calculate::calcPers($id, $curr, 2); ?>
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
                    <select class="qq">
                    <?php $options=courses_db::getUnusedClasses($id, $depts[$i]->getID());
                       foreach($options as $o){?>
                        <option value="<?php $o->getID();?>"><?php echo $o->getName()?></option>
                       <?php }?>
                      </select>
                    </td>
               <?php } ?>


            </tr>
            <tr>
                <td class="tabel2">
                    ~ <img src= "Delete button.png" alt="some_text" class="pert">
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>

            </tr>
            <tr>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>

            </tr>
            <tr>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                   ~
                </td>

            </tr>
            <tr>

                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
            </tr>


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
                        <select class="qq">
                            <?php $options=courses_db::getUnusedClasses($id, $depts[$i]->getID());
                            foreach($options as $o){?>
                                <option value="<?php $o->getID();?>"><?php echo $o->getName()?></option><?php }?>
                        </select>
                    </td>
                <?php } ?>


            </tr>
            <tr>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>


            </tr>
            <tr>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>


            </tr>
            <tr>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>


            </tr>
            <tr>

                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>
                <td class="tabel2">
                    ~
                </td>

            </tr>


        </table>
        <a href="?action=last_year" ><img class="lefty" src="fwd.png" ></a>
        <?php if($curr==9) {?>
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

<p class="coolio">Next Year</p>
    </div>
</center>